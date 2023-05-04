<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculatePost
{

    /**
     * @var CalculatePostResult
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CalculatePostResult")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $calculate;
}