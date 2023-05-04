<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\Service;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListServiceResponse extends SuccessResponse
{
    /**
     * @var Service[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Service>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $services;
}