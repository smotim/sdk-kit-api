<?php

namespace service\KitAPI\Model\Response\Geography;

use service\KitAPI\Model\Entity\Geography\Schedule;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListScheduleResponse extends SuccessResponse
{

    /**
     * @var Schedule[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\Schedule>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $schedules;

}