<?php

namespace service\KitAPI\Component\FormData\Mapping;


use Doctrine\Common\Annotations\Annotation\Attribute;

/**
 * @Annotation
 * @Attribute(
 *     @Attribute("getter", required=false, type="string"),
 *     @Attribute("setter", required=false, type="string")
 * )
 */
final class Accessor
{
    /**
     * @var string
     */
    public $getter;

    /**
     * @var string
     */
    public $setter;

}