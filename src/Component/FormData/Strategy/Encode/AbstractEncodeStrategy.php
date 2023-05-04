<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use Doctrine\Common\Annotations\Reader;
use Liip\Serializer\SerializerInterface;
use service\KitAPI\Component\FormData\Mapping\SerializedName;

abstract class AbstractEncodeStrategy implements EncodeStrategyInterface
{
    /** @var Reader */
    protected $annotationReader;

    /** @var string */
    protected $innerType;

    /**
     * @var SerializerInterface
     */
    protected $liipSerializer;

    /**
     * @param Reader $annotationReader
     * @param SerializedName $liipSerializer
     */
    public function __construct(Reader $annotationReader, SerializerInterface $liipSerializer)
    {
        $this->annotationReader = $annotationReader;
        $this->liipSerializer = $liipSerializer;
    }

    /**
     * @param string $type
     * @return EncodeStrategyInterface
     */
    public function setInnerType(string $type): EncodeStrategyInterface
    {
        $this->innerType = $type;
        return $this;
    }

}