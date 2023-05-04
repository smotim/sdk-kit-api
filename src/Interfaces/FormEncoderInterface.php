<?php

namespace service\KitAPI\Interfaces;

use Liip\Serializer\SerializerInterface;

interface FormEncoderInterface
{

    /**
     * @param mixed $object
     * @param string $type
     * @return string
     */
    public function encode($object, string $type = ''): string;

    /**
     * @param mixed $object
     * @param string $type
     * @return array
     */
    public function encodeArray($object, string $type = ''): array;

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface;
}