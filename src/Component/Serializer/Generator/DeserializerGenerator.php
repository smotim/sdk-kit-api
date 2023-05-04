<?php

namespace service\KitAPI\Component\Serializer\Generator;

use Liip\MetadataParser\Builder;
use Liip\MetadataParser\Metadata\ClassMetadata;
use Liip\MetadataParser\Metadata\PropertyMetadata;
use Liip\MetadataParser\Metadata\PropertyTypeArray;
use Liip\MetadataParser\Metadata\PropertyTypeClass;
use Liip\MetadataParser\Metadata\PropertyTypeDateTime;
use Liip\MetadataParser\Metadata\PropertyTypePrimitive;
use Liip\MetadataParser\Metadata\PropertyTypeUnknown;
use Liip\MetadataParser\Reducer\TakeBestReducer;
use Liip\Serializer\Path\ArrayPath;
use Liip\Serializer\Path\ModelPath;
use Liip\Serializer\Template\Deserialization;
use service\KitAPI\Component\Serializer\Template\CustomDeserialization;
use service\KitAPI\Component\Serializer\Type\PropertyTypeMixed;
use Symfony\Component\Filesystem\Filesystem;
use RuntimeException;

class DeserializerGenerator
{

    private const FILENAME_PREFIX = 'deserialize';

    /**
     * @var Deserialization
     */
    private $templating;


    /**
     * @var Filesystem
     */
    private $filesystem;

    /**
     * This is a list of fqn classnames
     *
     * I.e.
     *
     * [
     *    Product::class,
     * ];
     *
     * @var string[]
     */
    private $classesToGenerate;

    /**
     * @var string
     */
    private $cacheDirectory;


    public function __construct(
        Deserialization $templating,
        array           $classesToGenerate,
        string          $cacheDirectory
    )
    {
        $this->templating = $templating;
        $this->classesToGenerate = $classesToGenerate;
        $this->cacheDirectory = $cacheDirectory;
        $this->filesystem = new Filesystem();
    }

    /**
     * @param string $className
     * @return string
     */
    public static function buildDeserializerFunctionName(string $className): string
    {
        return static::FILENAME_PREFIX . '_' . str_replace('\\', '_', $className);
    }


    /**
     * @param Builder $metadataBuilder
     * @return void
     */
    public function generate(Builder $metadataBuilder): void
    {
        $this->filesystem->mkdir($this->cacheDirectory);

        foreach ($this->classesToGenerate as $className) {
//            print_r($className);
            $classMetadata = $metadataBuilder->build($className, [
                new TakeBestReducer()
            ]);
            $this->writeFile($classMetadata);
        }
    }

    /**
     * @param ClassMetadata $classMetadata
     * @return void
     */
    private function writeFile(ClassMetadata $classMetadata): void
    {
        if (count($classMetadata->getConstructorParameters())) {
            throw new RuntimeException(sprintf(
                'We currently do not support deserializing when the root class has a non-empty constructor. Class %s',
                $classMetadata->getClassName()
            ));
        }

        $functionName = static::buildDeserializerFunctionName($classMetadata->getClassName());
        $arrayPath = new ArrayPath('jsonData');

        $code = $this->templating->renderFunction(
            $functionName,
            $classMetadata->getClassName(),
            (string)$arrayPath,
            $this->generateCodeForClass($classMetadata, $arrayPath, new ModelPath('model'))
        );

        $this->filesystem->dumpFile(sprintf('%s/%s.php', $this->cacheDirectory, $functionName), $code);
    }


    /**
     * @param ClassMetadata $classMetadata
     * @param ArrayPath $arrayPath
     * @param ModelPath $modelPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForClass(
        ClassMetadata $classMetadata,
        ArrayPath     $arrayPath,
        ModelPath     $modelPath,
        array         $stack = []
    ): string
    {
        $stack[$classMetadata->getClassName()] = ($stack[$classMetadata->getClassName()] ?? 0) + 1;

        $constructorArgumentNames = [];
        $initCode = '';
        $code = '';

        foreach ($classMetadata->getProperties() as $propertyMetadata) {

            // обработка безымянного массива
            if ($propertyMetadata->getSerializedName() === 'hidden_array') {
                $propertyArrayPath = $arrayPath;
            } else {
                $propertyArrayPath = $arrayPath->withFieldName($propertyMetadata->getSerializedName());
            }

            if ($classMetadata->hasConstructorParameter($propertyMetadata->getName())) {
                $argument = $classMetadata->getConstructorParameter($propertyMetadata->getName());
                $default = var_export($argument->isRequired() ? null : $argument->getDefaultValue(), true);
                $tempVariable = ModelPath::tempVariable([(string)$modelPath, $propertyMetadata->getName()]);
                $constructorArgumentNames[$propertyMetadata->getName()] = (string)$tempVariable;

                $initCode .= $this->templating->renderArgument(
                    (string)$tempVariable,
                    $default,
                    $this->generateCodeForField($propertyMetadata, $propertyArrayPath, $tempVariable, $stack)
                );
            } else {
                $code .= $this->generateCodeForProperty($propertyMetadata, $propertyArrayPath, $modelPath, $stack);
            }

        }

        foreach ($classMetadata->getPostDeserializeMethods() as $method) {
            $code .= $this->templating->renderPostMethod((string)$modelPath, $method);
        }

        $constructorArguments = [];

        foreach ($classMetadata->getConstructorParameters() as $definition) {
            if (array_key_exists($definition->getName(), $constructorArgumentNames)) {
                $constructorArguments[] = $constructorArgumentNames[$definition->getName()];
                continue;
            }

            if ($definition->isRequired()) {
                throw new RuntimeException(sprintf(
                    'Unknown constructor argument "%s" in "%s(%s)"',
                    $definition->getName(),
                    $classMetadata->getClassName(),
                    implode(', ', array_keys($constructorArgumentNames))
                ));
            }

            $constructorArguments[] = var_export($definition->getDefaultValue(), true);
        }

        if (count($constructorArgumentNames) > 0) {
            $code .= $this->templating->renderUnset(array_values($constructorArgumentNames));
        }

        return $this->templating->renderClass(
            (string)$modelPath,
            $classMetadata->getClassName(),
            $constructorArguments,
            $code,
            $initCode
        );

    }

    /**
     * @param PropertyMetadata $propertyMetadata
     * @param ArrayPath $arrayPath
     * @param ModelPath $modelPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForProperty(
        PropertyMetadata $propertyMetadata,
        ArrayPath        $arrayPath,
        ModelPath        $modelPath,
        array            $stack
    ): string
    {
        if ($propertyMetadata->isReadOnly()) {
            return '';
        }

        if ($propertyMetadata->getAccessor()->hasSetterMethod()) {
            $tempVariable = ModelPath::tempVariable([(string)$modelPath, $propertyMetadata->getName()]);
            $code = $this->generateCodeForField($propertyMetadata, $arrayPath, $tempVariable, $stack);
            $code .= $this->templating->renderConditional(
                (string)$tempVariable,
                $this->templating->renderSetter(
                    (string)$modelPath,
                    (string)$propertyMetadata->getAccessor()->getSetterMethod(),
                    (string)$tempVariable
                )
            );
            $code .= $this->templating->renderUnset([(string)$tempVariable]);

            return $code;
        }

        $modelPropertyPath = $modelPath->withPath($propertyMetadata->getName());

        return $this->generateCodeForField($propertyMetadata, $arrayPath, $modelPropertyPath, $stack);
    }


    /**
     * @param PropertyMetadata $propertyMetadata
     * @param ArrayPath $arrayPath
     * @param ModelPath $modelPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForField(
        PropertyMetadata $propertyMetadata,
        ArrayPath        $arrayPath,
        ModelPath        $modelPath,
        array            $stack
    ): string
    {
        return $this->templating->renderConditional(
            (string)$arrayPath,
            $this->generateInnerCodeForFieldType($propertyMetadata, $arrayPath, $modelPath, $stack)
        );
    }


    /**
     * @param PropertyMetadata $propertyMetadata
     * @param ArrayPath $arrayPath
     * @param ModelPath $modelPropertyPath
     * @param array $stack
     * @return string
     */
    private function generateInnerCodeForFieldType(
        PropertyMetadata $propertyMetadata,
        ArrayPath        $arrayPath,
        ModelPath        $modelPropertyPath,
        array            $stack
    ): string
    {
        $type = $propertyMetadata->getType();

        if ($type instanceof PropertyTypeArray) {
            if ($type->getSubType() instanceof PropertyTypePrimitive) {
                // for arrays of scalars, copy the field even when its an empty array
                return $this->templating->renderAssignJsonDataToField((string)$modelPropertyPath, (string)$arrayPath);
            }

            // either array or hashmap with second param the type of values
            // the index works the same whether its numeric or hashmap
            return $this->generateCodeForArray($type, $arrayPath, $modelPropertyPath, $stack);
        }

        switch ($type) {
            case $type instanceof PropertyTypeDateTime:
                if (null !== $type->getZone()) {
                    throw new RuntimeException('Timezone support is not implemented');
                }

                $format = $type->getDeserializeFormat() ?: $type->getFormat();

                if (null !== $format) {
                    return $this->templating->renderAssignDateTimeFromFormat(
                        $type->isImmutable(),
                        (string)$modelPropertyPath,
                        (string)$arrayPath,
                        $format
                    );
                }

                return $this->templating->renderAssignDateTimeToField(
                    $type->isImmutable(),
                    (string)$modelPropertyPath,
                    (string)$arrayPath
                );
            case $type instanceof PropertyTypePrimitive && 'float' === $type->getTypeName():
                return $this->templating->renderAssignJsonDataToFieldWithCasting(
                    (string)$modelPropertyPath,
                    (string)$arrayPath,
                    'float'
                );
            case $type instanceof PropertyTypePrimitive:
            case $type instanceof PropertyTypeUnknown:
            case $type instanceof PropertyTypeMixed:
                return $this->templating->renderAssignJsonDataToField((string)$modelPropertyPath, (string)$arrayPath);
            case $type instanceof PropertyTypeClass:
                return $this->generateCodeForClass($type->getClassMetadata(), $arrayPath, $modelPropertyPath, $stack);
            default:
                throw new RuntimeException('Unexpected type ' . get_class($type) . ' at ' . $modelPropertyPath);
        }
    }

    /**
     * @param PropertyTypeArray $type
     * @param ArrayPath $arrayPath
     * @param ModelPath $modelPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForArray(
        PropertyTypeArray $type,
        ArrayPath         $arrayPath,
        ModelPath         $modelPath,
        array             $stack
    ): string
    {
        $index = ModelPath::indexVariable((string)$arrayPath);
        $arrayPropertyPath = $arrayPath->withVariable((string)$index);
        $modelPropertyPath = $modelPath->withArray((string)$index);
        $subType = $type->getSubType();

        switch ($subType) {
            case $subType instanceof PropertyTypeArray:
                $innerCode = $this->generateCodeForArray($subType, $arrayPropertyPath, $modelPropertyPath, $stack);
                break;
            case $subType instanceof PropertyTypeClass:
                $innerCode = $this->generateCodeForClass(
                    $subType->getClassMetadata(),
                    $arrayPropertyPath,
                    $modelPropertyPath,
                    $stack
                );
                break;
            case $subType instanceof PropertyTypeUnknown:
                $innerCode = $this->templating->renderAssignJsonDataToField(
                    $modelPropertyPath,
                    $arrayPropertyPath
                );
                break;
            default:
                throw new RuntimeException('Unexpected array subtype ' . get_class($subType));
        }

        if ('' === $innerCode) {
            return '';
        }

        $code = $this->templating->renderInitArray((string)$modelPath);
        $code .= $this->templating->renderLoop((string)$arrayPath, (string)$index, $innerCode);

        return $code;
    }

}