<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class OrderTotal
{
    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("nds")
     */
    public $nds;

    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("price")
     */
    public $price;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("route")
     */
    public $route;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("comment")
     */
    public $comment;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("cargo_number")
     */
    public $cargo_number;

}