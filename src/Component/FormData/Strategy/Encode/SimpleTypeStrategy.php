<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use service\KitAPI\Component\FormData\Mapping\JsonField;
use service\KitAPI\Component\FormData\PropertyAnnotations;
use service\KitAPI\Component\FormData\Strategy\StrategyFactory;

class SimpleTypeStrategy extends AbstractEncodeStrategy
{
    /**
     * @param $value
     * @param PropertyAnnotations|null $annotations
     * @return array|bool|float|int|mixed|string|null
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedFormatException
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    public function encode($value, ?PropertyAnnotations $annotations)
    {
        if ($annotations !== null && $annotations->jsonField instanceof JsonField && !empty($value)) {
            return $this->liipSerializer->serialize($value, 'json');
        }

        return $this->encodeValue($value);
    }

    /**
     * @param $value
     * @return array|bool|float|int|string|null
     */
    public function encodeValue($value)
    {
        switch (gettype($value)) {
            case 'bool':
            case 'boolean':
                return (bool) $value;
            case 'int':
            case 'integer':
                return (int) $value;
            case 'float':
                return (float) $value;
            case 'double':
                return (double) $value;
            case 'string':
                return (string) $value;
            default:
                return $this->encodeDefault($value);
        }
    }


    /**
     * @param $value
     * @return array|null
     */
    private function encodeDefault($value): ?array
    {
        if (is_iterable($value)) {
            $result = [];

            foreach ($value as $key => $item) {
                $result[$key] = StrategyFactory::encodeStrategyByType(
                    gettype($item),
                    $item,
                    $this->annotationReader,
                    $this->liipSerializer,
                )->encode($item, new PropertyAnnotations());
            }

            return $result;
        }
        return null;
    }


}