<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class OrderService
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
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("quantity")
     */
    public $quantity;

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
     * @JSM\SerializedName("currency_code")
     */
    public $currency_code;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("payer_debitor")
     */
    public $payer_debitor;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("payer_short_name")
     */
    public $payer_short_name;

}