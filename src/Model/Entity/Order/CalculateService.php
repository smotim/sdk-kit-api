<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculateService
{
    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("name")
     */
    public $name;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("code")
     */
    public $code;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("price")
     */
    public $price;

}