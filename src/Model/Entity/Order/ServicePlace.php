<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class ServicePlace
{


    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("code")
     */
    public $code;

}