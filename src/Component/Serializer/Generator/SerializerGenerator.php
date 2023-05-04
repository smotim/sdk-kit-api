<?php

namespace service\KitAPI\Component\Serializer\Generator;

use Liip\MetadataParser\Builder;
use Liip\MetadataParser\Metadata\ClassMetadata;
use Liip\MetadataParser\Metadata\PropertyMetadata;
use Liip\MetadataParser\Metadata\PropertyType;
use Liip\MetadataParser\Metadata\PropertyTypeArray;
use Liip\MetadataParser\Metadata\PropertyTypeClass;
use Liip\MetadataParser\Metadata\PropertyTypeDateTime;
use Liip\MetadataParser\Metadata\PropertyTypePrimitive;
use Liip\MetadataParser\Metadata\PropertyTypeUnknown;
use Liip\MetadataParser\Reducer\GroupReducer;
use Liip\MetadataParser\Reducer\PreferredReducer;
use Liip\MetadataParser\Reducer\TakeBestReducer;
use Liip\MetadataParser\Reducer\VersionReducer;
use Liip\Serializer\Configuration\GeneratorConfiguration;
use Liip\Serializer\Template\Serialization;
use service\KitAPI\Component\Serializer\Exception\RuntimeException;
use service\KitAPI\Component\Serializer\Template\CustomSerialization;
use service\KitAPI\Component\Serializer\Type\PropertyTypeMixed;
use Symfony\Component\Filesystem\Filesystem;

class SerializerGenerator
{
    private const FILENAME_PREFIX = 'serialize';

    /** @var Serialization */
    private $templating;

    /**
     * @var GeneratorConfiguration<mixed>
     */
    private $configuration;

    /**
     * @var string
     */
    private $cacheDirectory;

    /**
     * @var Filesystem
     */
    private $filesystem;


    public function __construct(
        Serialization          $templating,
        GeneratorConfiguration $configuration,
        string                 $cacheDirectory
    )
    {
        $this->templating = $templating;
        $this->configuration = $configuration;
        $this->cacheDirectory = $cacheDirectory;

        $this->filesystem = new Filesystem();
    }

    /**
     * @param string $className
     * @param string|null $apiVersion
     * @param array $serializerGroups
     * @return string
     */
    public static function buildSerializerFunctionName(
        string  $className,
        ?string $apiVersion,
        array   $serializerGroups
    ): string
    {
        $functionName = static::FILENAME_PREFIX . '_' . $className;

        if (count($serializerGroups)) {
            $functionName .= '_' . implode('_', $serializerGroups);
        }

        if ($apiVersion !== null) {
            $functionName .= '_' . $apiVersion;
        }

        return (string)preg_replace('/[^a-zA-Z0-9_]/', '_', $functionName);
    }


    /**
     * @param Builder $metadataBuilder
     * @return void
     */
    public function generate(Builder $metadataBuilder): void
    {

        $this->filesystem->mkdir($this->cacheDirectory);

        foreach ($this->configuration as $classToGenerate) {
            foreach ($classToGenerate as $groupCombination) {
                $className = $classToGenerate->getClassName();

                foreach ($groupCombination->getVersions() as $version) {
                    if ($version === '') {
                        $metadata = $metadataBuilder->build($className, [
                            new PreferredReducer(),
                            new TakeBestReducer()
                        ]);

                        $this->writeFile($className, null, $groupCombination->getGroups(), $metadata);
                    } else {
                        $metadata = $metadataBuilder->build($className, [
                            new VersionReducer($version),
                            new GroupReducer($groupCombination->getGroups()),
                            new TakeBestReducer(),
                        ]);

                        $this->writeFile($className, $version, $groupCombination->getGroups(), $metadata);
                    }
                }
            }
        }
    }

    /**
     * @param string $className
     * @param string|null $apiVersion
     * @param array $serializerGroups
     * @param ClassMetadata $classMetadata
     * @return void
     */
    private function writeFile(
        string        $className,
        ?string       $apiVersion,
        array         $serializerGroups,
        ClassMetadata $classMetadata
    ): void
    {
        sort($serializerGroups);
        $functionName = static::buildSerializerFunctionName($className, $apiVersion, $serializerGroups);

        $code = $this->templating->renderFunction(
            $functionName,
            $className,
            $this->generateCodeForClass($classMetadata,$apiVersion, $serializerGroups, '', '$model')
        );

        $this->filesystem->dumpFile(sprintf('%s/%s.php', $this->cacheDirectory, $functionName), $code);
    }

    private function generateCodeForClass(
        ClassMetadata $classMetadata,
        ?string       $apiVersion,
        array         $serializerGroups,
        string        $arrayPath,
        string        $modelPath,
        array         $stack = []
    ): string
    {
        $stack[$classMetadata->getClassName()] = ($stack[$classMetadata->getClassName()] ?? 0) + 1;
        $code = '';

        foreach ($classMetadata->getProperties() as $propertyMetadata) {
            $code .= $this->generateCodeForField(
                $propertyMetadata,
                $apiVersion,
                $serializerGroups,
                $arrayPath,
                $modelPath,
                $stack
            );
        }

        return $this->templating->renderClass($arrayPath, $code);
    }


    /**
     * @param PropertyMetadata $propertyMetadata
     * @param string|null $apiVersion
     * @param array $serializerGroups
     * @param string $arrayPath
     * @param string $modelPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForField(
        PropertyMetadata $propertyMetadata,
        ?string          $apiVersion,
        array            $serializerGroups,
        string           $arrayPath,
        string           $modelPath,
        array            $stack
    ): string
    {
        $modelPropertyPath = $modelPath . '->' . $propertyMetadata->getName();
        $fieldPath = $arrayPath . '["' . $propertyMetadata->getSerializedName() . '"]';

        if ($propertyMetadata->getAccessor()->hasGetterMethod()) {
            $tempVariable = str_replace(['->', '[', ']', '$'], '', $modelPath) . ucfirst($propertyMetadata->getName());

            return $this->templating->renderConditional(
                $this->templating->renderTempVariable(
                    $tempVariable,
                    $this->templating->renderGetter(
                        $modelPath,
                        (string)$propertyMetadata->getAccessor()->getGetterMethod()
                    )
                ),
                $this->generateCodeForFieldType(
                    $propertyMetadata->getType(),
                    $apiVersion,
                    $serializerGroups,
                    $fieldPath,
                    $modelPropertyPath,
                    $stack
                )
            );
        }

        if (!$propertyMetadata->isPublic()) {
            throw new RuntimeException(sprintf(
                'Property %s is not public and no getter has been defined. Stack %s',
                $modelPropertyPath,
                var_export($stack, true)
            ));
        }

        return $this->templating->renderConditional(
            $modelPropertyPath,
            $this->generateCodeForFieldType(
                $propertyMetadata->getType(),
                $apiVersion,
                $serializerGroups,
                $fieldPath,
                $modelPropertyPath,
                $stack
            )
        );

    }

    /**
     * @param PropertyType $type
     * @param string|null $apiVersion
     * @param array $serializerGroups
     * @param string $fieldPath
     * @param string $modelPropertyPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForFieldType(
        PropertyType $type,
        ?string      $apiVersion,
        array        $serializerGroups,
        string       $fieldPath,
        string       $modelPropertyPath,
        array        $stack
    ): string
    {
        if ($type instanceof PropertyTypeArray) {
            if ($type->getSubType() instanceof PropertyTypePrimitive) {
                return $this->templating->renderAssign($fieldPath, $modelPropertyPath);
            }


            return $this->generateCodeForArray(
                $type,
                $apiVersion,
                $serializerGroups,
                $fieldPath,
                $modelPropertyPath,
                $stack
            );
        }

        switch ($type) {
            case $type instanceof PropertyTypeDateTime:
                if ($type->getZone()) {
                    throw new \RuntimeException('Timezone support is not implemented');
                }

                $dateFormat = $type->getFormat() ?: \DateTime::ATOM;

                return $this->templating->renderAssign(
                    $fieldPath,
                    $this->templating->renderDateTime($modelPropertyPath, $dateFormat)
                );

            case $type instanceof PropertyTypePrimitive:
            case $type instanceof PropertyTypeUnknown:
            case $type instanceof PropertyTypeMixed:
                return $this->templating->renderAssign($fieldPath, $modelPropertyPath);

            case $type instanceof PropertyTypeClass:
                return $this->generateCodeForClass(
                    $type->getClassMetadata(),
                    $apiVersion,
                    $serializerGroups,
                    $fieldPath,
                    $modelPropertyPath,
                    $stack
                );
            default:
                throw new \RuntimeException('Unexpected type ' . \get_class($type) . ' at ' . $modelPropertyPath);
        }
    }


    /**
     * @param PropertyTypeArray $type
     * @param string|null $apiVersion
     * @param array $serializerGroups
     * @param string $arrayPath
     * @param string $modelPath
     * @param array $stack
     * @return string
     */
    private function generateCodeForArray(
        PropertyTypeArray $type,
        ?string           $apiVersion,
        array             $serializerGroups,
        string            $arrayPath,
        string            $modelPath,
        array             $stack
    ): string
    {
        $index = '$index' . \mb_strlen($arrayPath);
        $subType = $type->getSubType();

        switch ($subType) {
            case $subType instanceof PropertyTypeArray:
                $innerCode = $this->generateCodeForArray(
                    $subType,
                    $apiVersion,
                    $serializerGroups,
                    $arrayPath . '[' . $index . ']',
                    $modelPath . '[' . $index . ']',
                    $stack
                );
                break;
            case $subType instanceof PropertyTypeClass:
                $innerCode = $this->generateCodeForClass(
                    $subType->getClassMetadata(),
                    $apiVersion,
                    $serializerGroups,
                    $arrayPath . '[' . $index . ']',
                    $modelPath . '[' . $index . ']',
                    $stack
                );
                break;
            case $subType instanceof PropertyTypeUnknown:
                $innerCode = $this->templating->renderAssign($arrayPath, $modelPath);
                break;
            default:
                throw new RuntimeException('Unexpected array subtype ' . get_class($subType));
        }

        if ($innerCode === '') {
            if ($type->isHashmap()) {
                return $this->templating->renderLoopHashmapEmpty($arrayPath);
            }

            return $this->templating->renderLoopArrayEmpty($arrayPath);
        }

        if ($type->isHashmap()) {
            return $this->templating->renderLoopHashmap($arrayPath, $modelPath, $index, $innerCode);
        }

        return $this->templating->renderLoopArray($arrayPath, $modelPath, $index, $innerCode);
    }
}