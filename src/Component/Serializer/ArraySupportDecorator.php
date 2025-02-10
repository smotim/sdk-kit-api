<?php

namespace service\KitAPI\Component\Serializer;

use Liip\Serializer\Context;
use Liip\Serializer\Exception\UnsupportedFormatException;
use Liip\Serializer\SerializerInterface;
use Pnz\JsonException\Json;

class ArraySupportDecorator implements SerializerInterface
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    public function __construct(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param $data
     * @param string $format
     * @param Context|null $context
     * @return string
     * @throws UnsupportedFormatException
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    public function serialize($data, string $format, ?Context $context = null): string
    {
        if ($format !== 'json') {
            throw new UnsupportedFormatException('Liip serializer only supports JSON for now');
        }

        if (is_array($data)) {
            try {
                return Json::encode($this->encodeArray($data, $context), JSON_UNESCAPED_SLASHES);
            } catch (\JsonException $exception) {
                throw new \Exception(
                    sprintf(
                        'Failed to JSON encode data for %s. This is not supposed to happen.',
                        // @phpstan-ignore-next-line
                        is_object($data) ? get_class($data) : gettype($data)
                    ),
                    0,
                    $exception
                );
            }
        }
        return $this->serializer->serialize($data, $format, $context);
    }


    /**
     * @param string $data
     * @param string $type
     * @param string $format
     * @param Context|null $context
     * @return mixed
     * @throws UnsupportedFormatException
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    public function deserialize(string $data, string $type, string $format, ?Context $context = null): string
    {
        if ($format !== 'json') {
            throw new UnsupportedFormatException('Liip serializer only supports JSON for now');
        }

        if (static::isArrayType($type)) {
            try {
                $array = Json::decode($data, true);
            } catch (\JsonException $exception) {
                throw new \Exception('Failed to JSON decode data. This is not supposed to happen.', 0, $exception);
            }

            return $this->serializer->fromArray($this->decodeArray($array, $type, $context), $type, $context);
        }

        return $this->serializer->deserialize($data, $type, $format, $context);
    }

    /**
     * @param $data
     * @param Context|null $context
     * @return array
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    public function toArray($data, ?Context $context = null): array
    {
        if (is_array($data)) {
            return $this->encodeArray($data, $context);
        }

        return $this->serializer->toArray($data, $context);
    }

    public function fromArray(array $data, string $type, ?Context $context = null): mixed
    {
        if (static::isArrayType($type)) {
            return $this->decodeArray($data, $type, $context);
        }
        return $this->serializer->fromArray($data, $type, $context);
    }


    /**
     * @param array $data
     * @param Context|null $context
     * @return array
     * @throws \Liip\Serializer\Exception\Exception
     * @throws \Liip\Serializer\Exception\UnsupportedTypeException
     */
    private function encodeArray(array $data, ?Context $context = null): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            switch (gettype($value)) {
                case 'array':
                    $result[$key] = $this->encodeArray($value, $context);
                    break;
                case 'object':
                    $result[$key] = $this->serializer->toArray($value, $context);
                    break;
                default:
                    $result[$key] = $value;
                    break;
            }
        }

        return $result;
    }


    /**
     * @param array $data
     * @param string $type
     * @param Context|null $context
     * @return array
     */
    private function decodeArray(array $data, string $type, ?Context $context = null): array
    {
        $result = [];
        $subtype = static::getArrayValueType($type);

        if (class_exists($subtype)) {
            foreach ($data as $key => $item) {
                if (is_array($item)) {
                    $result[$key] = $this->decodeArray($item, $subtype, $context);
                    continue;
                }
                $result[$key] = $item;
            }
            return $result;
        }
        return $data;
    }


    /**
     * @param string $type
     * @return bool
     */
    private static function isArrayType(string $type): bool
    {
        return strpos($type, 'array') !== false;
    }

    /**
     * @param string $type
     * @return string
     */
    private static function getArrayValueType(string $type): string
    {
        $matches = [];

        preg_match_all(
            '/array(\s+)?\<([\w\|\\\\]+)\s+\,\s+([\w\|\\\\]+)\>/m',
            $type,
            $matches,
            PREG_SET_ORDER,
            0
        );

        if (count($matches) > 0) {
            return $matches[count($matches) - 1];
        }

        preg_match_all('/array(\s+)?\<([\w\|\\\\]+)\>/m', $type, $matches, PREG_SET_ORDER, 0);

        if (count($matches) > 0) {
            return $matches[count($matches) - 1];
        }

        return 'mixed';
    }
}