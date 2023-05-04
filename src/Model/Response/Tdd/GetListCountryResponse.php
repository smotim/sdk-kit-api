<?php

namespace service\KitAPI\Model\Response\Tdd;

use service\KitAPI\Model\Entity\Tdd\Country;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;


class GetListCountryResponse extends SuccessResponse
{
    /**
     * @var Country[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Tdd\Country>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $countries;
}