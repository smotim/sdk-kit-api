<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\Currency;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListCurrencyResponse extends SuccessResponse
{

    /**
     * @var Currency[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Currency>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $currencies;

}