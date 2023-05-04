<?php

namespace service\KitAPI\Model\Entity\Geography;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class ScheduleGroup
{

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("id")
     */
    public $id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("name")
     */
    public $name;

}