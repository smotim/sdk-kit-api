<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculatePostResult
{

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("XS")
     */
    public $XS;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("S")
     */
    public $S;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("M")
     */
    public $M;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CalculateResultType
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResultType")
     * @JSM\SerializedName("L")
     */
    public $L;
}