<?php

namespace service\KitAPI\Interfaces;

use Liip\Serializer\SerializerInterface;

interface SerializerAwareInterface
{

    /**
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer);

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface;
}