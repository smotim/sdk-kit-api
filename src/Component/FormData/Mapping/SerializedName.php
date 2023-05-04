<?php

namespace service\KitAPI\Component\FormData\Mapping;

/**
 * Class PostSerialize
 *
 * @category PostSerialize
 * @package service\KitAPI\Component\FormData\Mapping
 *
 * @Annotation
 */
final class SerializedName
{
    /**
     * Property name in result JSON
     *
     * @var string
     */
    public $name;
}