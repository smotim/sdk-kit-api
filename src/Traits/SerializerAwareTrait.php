<?php

namespace service\KitAPI\Traits;

use Liip\Serializer\SerializerInterface;

trait SerializerAwareTrait
{

    /** @var SerializerInterface */
    protected $serializer;

    /**
     * @param SerializerInterface $serializer
     * @return self
     */
    public function setSerializer(SerializerInterface $serializer): self
    {
        $this->serializer = $serializer;
        return $this;
    }

    /**
     * @return SerializerInterface
     */
    public function getSerializer(): SerializerInterface
    {
        return $this->serializer;
    }

}