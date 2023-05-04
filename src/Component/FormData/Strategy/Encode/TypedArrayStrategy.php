<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use service\KitAPI\Component\FormData\Mapping\JsonField;
use service\KitAPI\Component\FormData\PropertyAnnotations;
use service\KitAPI\Component\FormData\Strategy\StrategyFactory;

class TypedArrayStrategy extends AbstractEncodeStrategy
{

    /** @var string  */
    private static $innerTypesMather = '/^([a-z]+)\s*\,?\s*(.+?\>)/m';

    /** @var SimpleTypeStrategy */
    private $simpleStrategy;

    /**
     * @param Reader $annotationReader
     * @param SerializerInterface $liipSerializer
     */
    public function __construct(Reader $annotationReader, SerializerInterface $liipSerializer)
    {
        parent::__construct($annotationReader, $liipSerializer);

        $this->simpleStrategy = new SimpleTypeStrategy($this->annotationReader, $this->liipSerializer);
    }

    /**
     * @param $value
     * @param PropertyAnnotations|null $annotations
     * @return array|mixed|string
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedFormatException
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    public function encode($value, ?PropertyAnnotations $annotations)
    {
        if (!is_array($value)) {
            return $value;
        }

        if (strpos($this->innerType, ',') !== false) {
            [$keyType, $valueType] = static::getInnerTypes($this->innerType);

            if ($keyType === '' && $valueType === '') {
                $valueType = $this->innerType;
            }
        } else {
            $valueType = $this->innerType;
        }

        if ($annotations !== null && $annotations->jsonField instanceof JsonField && !empty($value)) {
            return $this->liipSerializer->serialize($value, 'json');
        }

        return $this->encodeRegularArray($value, $valueType);
    }

    /**
     * @param array $value
     * @param string $valueType
     * @return array
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedFormatException
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    private function encodeRegularArray(array $value, string $valueType): array
    {
        $result = [];

        foreach (array_keys($value) as $key) {
            $result[$this->simpleStrategy->encode($key, new PropertyAnnotations())] = StrategyFactory::encodeStrategyByType(
                $valueType,
                $value[$key],
                $this->annotationReader,
                $this->liipSerializer
            )->encode($value[$key], new PropertyAnnotations());
        }
        return $result;
    }

    /**
     * @param string $innerType
     * @return array|string[]
     */
    private static function getInnerTypes(string $innerType)
    {
        $matches = [];

        preg_match_all(static::$innerTypesMather, $innerType, $matches, PREG_SET_ORDER, 0);

        if (empty($matches)) {
            return ['', ''];
        }

        $matches = $matches[0];

        return [trim($matches[1]), trim($matches[2])];
    }

}