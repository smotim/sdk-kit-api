<?php

namespace service\KitAPI\Component\FormData\Strategy;

use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use Psr\Http\Message\StreamInterface;
use service\KitAPI\Component\FormData\Strategy\Encode\DateTimeStrategy;
use service\KitAPI\Component\FormData\Strategy\Encode\EncodeStrategyInterface;
use service\KitAPI\Component\FormData\Strategy\Encode\EntityStrategy;
use service\KitAPI\Component\FormData\Strategy\Encode\StreamInterfaceStrategy;
use service\KitAPI\Component\FormData\Strategy\Encode\TypedArrayStrategy;

class StrategyFactory
{

    private const TYPED_MATCHER = '/^\\\\?([a-zA-Z0-9_]+)\s*\<(.+)\>$/m';

    /** @var string[] $simpleTypes */
    private static $simpleTypes = [
        'bool',
        'boolean',
        'int',
        'integer',
        'float',
        'double',
        'string',
        'array'
    ];

    /**
     * @param string $dataType
     * @param $value
     * @param Reader $annotationReader
     * @param SerializerInterface $serializer
     * @return EncodeStrategyInterface
     */
    public static function encodeStrategyByType(
        string              $dataType,
                            $value,
        Reader              $annotationReader,
        SerializerInterface $serializer
    ): EncodeStrategyInterface
    {
        if (in_array($dataType, static::$simpleTypes)) {
            return new Encode\SimpleTypeStrategy($annotationReader, $serializer);
        }

        if (static::isDataTime($dataType)) {
            return (new DateTimeStrategy($annotationReader, $serializer))->setInnerType(\DateTime::RFC3339);
        }

        $arrSubType = static::getArrayInnerTypes($dataType);

        if (!empty($arrSubType)) {
            return (new TypedArrayStrategy($annotationReader, $serializer))->setInnerType($arrSubType);
        }

        $dateTimeFormat = static::getDateTimeFormat($dataType);

        if (!empty($dateTimeFormat)) {
            return (new DateTimeStrategy($annotationReader, $serializer))->setInnerType($dateTimeFormat);
        }

        if ($value instanceof StreamInterface) {
            return new StreamInterfaceStrategy($annotationReader, $serializer);
        }

        return new EntityStrategy($annotationReader, $serializer);
    }

    private static function isDataTime(string $dataType): bool
    {
        return strlen($dataType) > 1
            && ($dataType === \DateTime::class
                || ($dataType[0] === '\\' && substr($dataType, 1) === \DateTime::class));
    }

    /**
     * @param string $dataType
     * @return string
     */
    private static function getArrayInnerTypes(string $dataType): string
    {
        $matches = [];

        preg_match_all(static::TYPED_MATCHER, $dataType, $matches, PREG_SET_ORDER, 0);

        if (empty($matches)) {
            if (strlen($dataType) > 2 && substr($dataType, -2) === '[]') {
                return substr($dataType, 0, -2);
            }

            return '';
        }

        if ($matches[0][1] === 'array') {
            return $matches[0][2];
        }

        return '';
    }


    /**
     * @param string $dataType
     * @return string
     */
    private static function getDateTimeFormat(string $dataType): string
    {
        $matches = [];

        preg_match_all(static::TYPED_MATCHER, $dataType, $matches, PREG_SET_ORDER, 0);

        if (empty($matches)) {
            return '';
        }

        if ($matches[0][1] === 'DateTime') {
            $format = $matches[0][2];

            if (strlen($format) > 2 && $format[0] === "'" && substr($format, -1) === "'") {
                return substr($format, 1, -1);
            }

            return $format;
        }

        return '';
    }
}