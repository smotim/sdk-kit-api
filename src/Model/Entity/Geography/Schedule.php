<?php

namespace service\KitAPI\Model\Entity\Geography;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Schedule
{
    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("geography_city_id")
     */
    public $geography_city_id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("geography_address_id")
     */
    public $geography_address_id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("group_id")
     */
    public $group_id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("day")
     */
    public $day;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("all_day")
     */
    public $all_day;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("freeday")
     */
    public $freeday;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("from")
     */
    public $from;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("to")
     */
    public $to;

}