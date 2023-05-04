<?php

namespace service\KitAPI\Component\FormData;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use PhpParser\Node\Expr\Print_;
use service\KitAPI\Component\FormData\Mapping\PostSerialize;
use service\KitAPI\Component\FormData\Strategy\StrategyFactory;
use service\KitAPI\Interfaces\FormEncoderInterface;

class FormEncoder implements FormEncoderInterface
{

    /** @var \Doctrine\Common\Annotations\Reader */
    private $annotationReader;

    /** @var \Liip\Serializer\SerializerInterface */
    private $serializer;

    public function __construct(SerializerInterface $serializer, ?Reader $annotationReader)
    {
        $this->serializer = $serializer;
        $this->annotationReader = $annotationReader ?: new AnnotationReader();
    }

    /**
     * @param $object
     * @param string $type
     * @return string
     */
    public function encode($object, string $type = ''): string
    {
        return json_encode($this->encodeArray($object, $type), JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param $object
     * @param string $type
     * @return array
     */
    public function encodeArray($object, string $type = ''): array
    {
        $type = empty($type) ? gettype($object) : $type;
        $result = (array) StrategyFactory::encodeStrategyByType(
            $type,
            $object,
            $this->annotationReader,
            $this->serializer
        )->encode($object, null);

        return $this->processPostSerialize($object, $result);
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

    /**
     * @param $object
     * @param array $result
     * @return array
     * @throws \ReflectionException
     */
    private function processPostSerialize($object, array $result): array
    {
        $class = get_class($object);

        if ($object !== null) {
            try {
                $reflection = new \ReflectionClass($class);
            } catch (\ReflectionException $exception) {
                return $result;
            }

            foreach ($reflection->getMethods() as $method) {
                $postDeserialize = $this->annotationReader->getMethodAnnotation($method, PostSerialize::class);

                if ($postDeserialize instanceof PostSerialize) {
                    return $method->invokeArgs($object, [$result]);
                }
            }
        }
        return $result;
    }
}