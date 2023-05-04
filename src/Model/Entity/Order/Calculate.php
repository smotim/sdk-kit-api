<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Calculate
{

    /**
     * @var CalculateResult
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculateResult")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $calculate;
}