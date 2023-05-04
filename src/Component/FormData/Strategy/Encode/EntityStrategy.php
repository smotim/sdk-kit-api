<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use service\KitAPI\Component\FormData\Mapping\Accessor;
use service\KitAPI\Component\FormData\Mapping\JsonField;
use service\KitAPI\Component\FormData\Mapping\NoTransform;
use service\KitAPI\Component\FormData\Mapping\SerializedName;
use service\KitAPI\Component\FormData\Mapping\Type;
use service\KitAPI\Component\FormData\PropertyAnnotations;
use service\KitAPI\Component\FormData\Strategy\StrategyFactory;

class EntityStrategy extends AbstractEncodeStrategy
{

    /**
     * @param $value
     * @param PropertyAnnotations|null $annotations
     * @return mixed[]|string|null
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedFormatException
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    public function encode($value, ?PropertyAnnotations $annotations)
    {
        return static::inArray($value);
//        if (empty($value)) {
//            return null;
//        }
//
//        if ($annotations !== null && $annotations->jsonField instanceof JsonField) {
//            return $this->liipSerializer->serialize($value, 'json');
//        }
//
//        $result = [];
//        $reflection = new \ReflectionClass(get_class($value));
//
//        if (!$reflection->isUserDefined()) {
//            return (array)$value;
//        }
//
//        foreach ($reflection->getProperties() as $property) {
//            $this->encodeProperty($value, $property, $result);
//        }
//        return $result;

    }


    /**
     * @param $object
     * @param \ReflectionProperty $property
     * @param array $result
     * @return void
     */
    protected function encodeProperty($object, \ReflectionProperty $property, array &$result): void
    {


        $annotations = new PropertyAnnotations($this->annotationReader->getPropertyAnnotations($property));

        if (!($annotations->serializedName instanceof SerializedName)) {
            return;
        }

        if ($annotations->accessor instanceof Accessor && !empty($annotations->accessor->getter)) {
            $value = $object->{$annotations->accessor->getter}();
        } else {
            $property->setAccessible(true);
            $value = $property->getValue($object);
        }

        if ($this->isNoTransform($property)) {
            $result[$annotations->serializedName->name] = $value;
        } elseif ($annotations->type instanceof Type) {
            $result[$annotations->serializedName->name] = StrategyFactory::encodeStrategyByType(
                $annotations->type->type,
                $value,
                $this->annotationReader,
                $this->liipSerializer,
            )->encode($value, $annotations);
        } else {
            $result[$annotations->serializedName->name] = StrategyFactory::encodeStrategyByType(
                gettype($value),
                $value,
                $this->annotationReader,
                $this->liipSerializer,
            )->encode($value, $annotations);
        }
    }

    protected function isNoTransform(\ReflectionProperty $property): bool
    {
        $isNoTransform = $this->annotationReader->getPropertyAnnotations($property, NoTransform::class);

        return $isNoTransform instanceof NoTransform;
    }

    /**
     * @param $object
     * @return array
     */
    private static function inArray($object): array
    {
        $object = is_object($object) ? get_object_vars($object) : $object;
        $response = [];
        foreach ($object as $key => $value) {
            if (is_array($value) || is_object($value)) {
                $response[$key] = static::inArray($value);
            } else {
                if (!is_null($value)) {
                    $response[$key] = $value;
                }
            }
        }
        return $response;
    }

}