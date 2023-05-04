<?php

namespace service\KitAPI\TestUtils;

class ReflectionUtils
{

    /**
     * @param object $object
     * @param string $property
     * @return mixed
     * @throws \ReflectionException
     */
    public static function getProperty(object $object, string $property)
    {
        return static::getReflectionProperty($object, $property)->getValue($object);
    }

    /**
     * @param object $object
     * @param string $property
     * @param $value
     * @return void
     * @throws \ReflectionException
     */
    public static function setProperty(object $object, string $property, $value): void
    {
        static::getReflectionProperty($object, $property)->setValue($object, $value);
    }

    /**
     * @param object $object
     * @param string $property
     * @return \ReflectionProperty
     * @throws \ReflectionException
     */
    private static function getReflectionProperty(object $object, string $property): \ReflectionProperty
    {
        $prop = new \ReflectionProperty($object, $property);
        $prop->setAccessible(true);

        return $prop;
    }
}