<?php

namespace service\KitAPI\Model\Response\Geography;

use service\KitAPI\Model\Entity\Geography\City;
use service\KitAPI\Component\Serializer\Annotation as JSM;
use service\KitAPI\Model\Response\SuccessResponse;

class GetListCityResponse extends SuccessResponse
{

    /**
     * @var City[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\City>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $cities;
}