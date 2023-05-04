<?php

namespace service\KitAPI\Model\Response\Tdd;

use service\KitAPI\Model\Entity\Tdd\Region;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListRegionResponse extends SuccessResponse
{

    /**
     * @var Region[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Tdd\Region>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $regions;

}