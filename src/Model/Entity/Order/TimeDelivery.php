<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class TimeDelivery
{

    /**
     *
     * @var \DateTime
     *
     * @JSM\Type("DateTime<'Y:m:d'>")
     * @JSM\SerializedName("date")
     */
    public $date;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("days")
     */
    public $days;

    /**
     *
     * @var \DateTime
     *
     * @JSM\Type("DateTime<'H:i'>")
     * @JSM\SerializedName("time")
     */
    public $time;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("status")
     */
    public $status;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("message")
     */
    public $message;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("timestamp_result")
     */
    public $timestamp_result;

}