<?php

namespace service\KitAPI\Model\Response\Geography;

use service\KitAPI\Model\Entity\Geography\ScheduleGroup;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListScheduleGroupResponse extends SuccessResponse
{
    /**
     * @var ScheduleGroup[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\ScheduleGroup>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $scheduleGroups;

}