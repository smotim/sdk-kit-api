<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculateResult
{

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("standart")
     */
    public $standart;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("economy")
     */
    public $economy;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("express")
     */
    public $express;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("standard_courier")
     */
    public $standard_courier;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("express_courier")
     */
    public $express_courier;
}