<?php

namespace service\KitAPI\Builder;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\PsrCachedReader;
use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use Psr\Cache\CacheItemPoolInterface;
use service\KitAPI\Component\FormData\FormEncoder;
use service\KitAPI\Factory\SerializerFactory;
use service\KitAPI\Interfaces\BuilderInterface;

class FormEncoderBuilder implements BuilderInterface
{

    /** @var CacheItemPoolInterface|null */
    private $cache;

    /** @var Reader */
    private $annotationReader;

    /** @var FileSystemCacheBuilder */
    private $fsCacheBuilder;

    /** @var SerializerInterface */
    private $serializer;

    public function __construct()
    {
        $this->fsCacheBuilder = new FileSystemCacheBuilder();
    }

    /**
     * @param string $cacheDir
     * @return FormEncoderBuilder
     */
    public function setCacheDir(string $cacheDir): FormEncoderBuilder
    {
        $this->fsCacheBuilder->setCacheDir($cacheDir);
        return $this;
    }

    /**
     * @param CacheItemPoolInterface $cache
     * @return FormEncoderBuilder
     */
    public function setCache(CacheItemPoolInterface $cache): FormEncoderBuilder
    {
        $this->cache = $cache;
        return $this;
    }

    /**
     * @param SerializerInterface $serializer
     * @return FormEncoderBuilder
     */
    public function setSerializer(SerializerInterface $serializer): FormEncoderBuilder
    {
        $this->serializer = $serializer;
        return $this;
    }

    public function build()
    {
        $this->buildCache();
        $this->buildAnnotationReader();
        $this->buildSerializer();

        return new FormEncoder($this->serializer, $this->annotationReader);
    }

    /**
     * @return void
     * @throws \service\KitAPI\Exception\Client\BuilderException
     */
    private function buildCache(): void
    {
        if ($this->cache === null) {
            $this->cache = $this->fsCacheBuilder->build();
        }
    }

    /**
     * @return void
     */
    private function buildAnnotationReader(): void
    {
        $this->annotationReader = new AnnotationReader();

        if ($this->cache !== null) {
            $this->annotationReader = new PsrCachedReader(new AnnotationReader(), $this->cache);
        }
    }

    /**
     * @return void
     */
    private function buildSerializer(): void
    {
        if ($this->serializer === null) {
            $this->serializer = SerializerFactory::create();
        }
    }

}