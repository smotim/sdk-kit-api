<?php

namespace service\KitAPI\Factory;

use Liip\Serializer\Serializer;
use Liip\Serializer\SerializerInterface;
use service\KitAPI\Component\Serializer\ArraySupportDecorator;
use service\KitAPI\Component\Utils;

class SerializerFactory
{
    public static function create(): SerializerInterface
    {
        return new ArraySupportDecorator(new Serializer(Utils::getModelCacheDirectory()));
    }

}