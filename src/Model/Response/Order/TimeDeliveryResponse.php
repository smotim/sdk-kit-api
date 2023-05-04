<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class TimeDeliveryResponse extends SuccessResponse
{

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
     * @JSM\SerializedName("timestamp_result")
     */
    public $timestamp_result;

    /**
     *
     * @var \DateTime
     *
     * @JSM\Type("DateTime<'Y-m-d'>")
     * @JSM\SerializedName("date")
     */
    public $date;

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
     * @JSM\SerializedName("days")
     */
    public $days;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("message")
     */
    public $message;

}