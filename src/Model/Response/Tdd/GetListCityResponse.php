<?php

namespace service\KitAPI\Model\Response\Tdd;

use service\KitAPI\Model\Entity\Tdd\City;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListCityResponse extends SuccessResponse
{

    /**
     * @var City[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Tdd\City>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $cities;

}