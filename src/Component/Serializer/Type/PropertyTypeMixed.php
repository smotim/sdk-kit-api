<?php

namespace service\KitAPI\Component\Serializer\Type;

use Liip\MetadataParser\Metadata\AbstractPropertyType;
use Liip\MetadataParser\Metadata\PropertyType;

class PropertyTypeMixed extends AbstractPropertyType
{

    public const TYPE_NAME = 'mixed';

    public function __construct()
    {
        parent::__construct(true);
    }

    /**
     * @param PropertyType $other
     * @return string
     */
    public function merge(PropertyType $other): PropertyType
    {
        return new self();
    }

    public function __toString(): string
    {
        return static::TYPE_NAME . parent::__toString();
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return static::TYPE_NAME;
    }
}