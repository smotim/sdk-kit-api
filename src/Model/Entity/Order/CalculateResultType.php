<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculateResultType
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
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("cost")
     */
    public $cost;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("time")
     */
    public $time;

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
     * @var \service\KitAPI\Model\Entity\Order\CalculateService[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\CalculateService>")
     * @JSM\SerializedName("detail")
     */
    public $detail;

}