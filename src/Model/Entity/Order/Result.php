<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Result
{
    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("sale_number")
     */
    public $sale_number;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("cargo_number")
     */
    public $cargo_number;

}