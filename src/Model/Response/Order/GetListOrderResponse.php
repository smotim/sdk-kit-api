<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\OrderGetList;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListOrderResponse extends SuccessResponse
{

    /**
     * @var OrderGetList[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\OrderGetList>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $orders;

}