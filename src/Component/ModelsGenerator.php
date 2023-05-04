<?php

namespace service\KitAPI\Component;

use Doctrine\Common\Annotations\AnnotationReader;
use Liip\MetadataParser\Builder;
use Liip\MetadataParser\Parser;
use Liip\MetadataParser\RecursionChecker;
use Liip\Serializer\Configuration\GeneratorConfiguration;
use Liip\Serializer\Template\Deserialization;
use Liip\Serializer\Template\Serialization;
use service\KitAPI\Component\Serializer\Exception\RuntimeException;
use service\KitAPI\Component\Serializer\Generator\DeserializerGenerator;
use service\KitAPI\Component\Serializer\Generator\SerializerGenerator;
use service\KitAPI\Component\Serializer\ModelsChecksumGenerator;
use service\KitAPI\Component\Serializer\Parser\JMSParser;
use service\KitAPI\Component\Serializer\Template\CustomDeserialization;
use service\KitAPI\Component\Serializer\Template\CustomSerialization;
use service\KitAPI\Component\Utils as DevUtils;

class ModelsGenerator
{

    private const IGNORED_NAMESPACES = [
        'service\\KitAPI\\Model\\Request',
        'service\\KitAPI\\Model\\Filter'
    ];

    /** @var string[] */
    private $models;

    /** @var array<string, string> */
    private $oldChecksums;

    /** @var array<string, string> */
    private $newChecksums;

    /** @var bool */
    private $generateAll;

    /**
     * @param bool $generateAll
     */
    public function __construct(bool $generateAll)
    {
        $this->generateAll = $generateAll;
    }

    /**
     * @return void
     */
    public function generate(): void
    {
        $target = Utils::getModelCacheDirectory();
        $this->calculateChecksums();

        if (!is_dir($target)) {
            static::createDir($target);
            file_put_contents(implode(DIRECTORY_SEPARATOR, [$target, '.gitkeep']), '');
        }

        self::generateModelCache($this->models, $target);

        ModelsChecksumGenerator::saveChecksums($this->newChecksums);
    }


    /**
     * @return void
     */
    public function loadModelsList(): void
    {
        $this->models = [];

        $classes      = new PhpFilesIterator(DevUtils::getModelsDirectory());

        foreach ($classes as $model) {
            if (!array_key_exists('fqn', $model)) {
                continue;
            }

            if (
                !static::isNamespaceIgnored($model['fqn']) &&
                $this->shouldGenerateForModel($model['fqn'])
            ) {
                $this->models[] = $model['fqn'];
            }
        }
    }

    /**
     * @return string[]
     */
    public function getModels(): array
    {
        return $this->models;
    }


    /**
     * @return void
     */
    private function calculateChecksums(): void
    {
        $this->newChecksums = ModelsChecksumGenerator::generateChecksums();

        if (!$this->generateAll) {
            $this->oldChecksums = ModelsChecksumGenerator::getStoredChecksums();
        }
    }


    /**
     * @param string $className
     * @return bool
     */
    private function shouldGenerateForModel(string $className): bool
    {
        if ($this->generateAll) {
            return true;
        }

        $serializerFile = SerializerGenerator::buildSerializerFunctionName($className, null, []) . '.php';
        $deserializerFile = DeserializerGenerator::buildDeserializerFunctionName($className) . '.php';

        if (
            !is_file(implode(DIRECTORY_SEPARATOR, [Utils::getModelCacheDirectory(), $serializerFile])) ||
            !is_file(implode(DIRECTORY_SEPARATOR, [Utils::getModelCacheDirectory(), $deserializerFile]))
        ) {
            return true;
        }

        return (
            isset($this->oldChecksums[$className]) &&
            $this->oldChecksums[$className] !== $this->newChecksums[$className]
        );
    }

    /**
     * @param array $classes
     * @param string $target
     * @return void
     */
    private static function generateModelCache(array $classes, string $target): void
    {
        if (empty($classes)) {
            return;
        }

        $configurationArray = [
            'default_group_combinations' => [],
            'default_versions' => [],
            'classes' => [],
        ];

        foreach ($classes as $class) {
            $configurationArray['classes'][$class] = [];
        }

        $configuration = GeneratorConfiguration::createFomArray($configurationArray);
        $parser = [new JMSParser(new AnnotationReader())];
        $builder = new Builder(new Parser($parser), new RecursionChecker(null, []));

        $marshalGenerator = new SerializerGenerator(
            new Serialization(),
            $configuration,
            $target
        );
        $unmarshalGenerator = new DeserializerGenerator(
            new Deserialization(),
            $classes,
            $target
        );

        $marshalGenerator->generate($builder);
        $unmarshalGenerator->generate($builder);
    }


    /**
     * @param string $namespace
     * @return bool
     */
    private static function isNamespaceIgnored(string $namespace): bool
    {
        foreach (static::IGNORED_NAMESPACES as $ignoredNamespace) {
            if (false !== strpos($namespace, $ignoredNamespace)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param string $dir
     * @return void
     */
    private static function createDir(string $dir): void
    {
        if (is_dir($dir)) {
            return;
        }

        if (mkdir($dir, 0777, true) === false && is_dir($dir) === false) {
            throw new RuntimeException(sprintf('Could not create directory "%s".', $dir));
        }
    }


}