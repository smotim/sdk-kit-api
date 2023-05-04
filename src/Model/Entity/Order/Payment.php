<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Payment
{
    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("code")
     */
    public $code;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("name")
     */
    public $name;
}