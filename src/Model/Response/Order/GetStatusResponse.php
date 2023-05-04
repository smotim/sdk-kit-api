<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\Status;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetStatusResponse extends SuccessResponse
{

    /**
     * @var Status[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Status>")
     * @JSM\SerializedName("status")
     *
     */
    public $status;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("notice")
     */
    public $notice;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("address")
     */
    public $address;

    /**
     *
     * @var string[]
     *
     * @JSM\Type("array<string>")
     * @JSM\SerializedName("phone")
     */
    public $phone;

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

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("schedule")
     */
    public $schedule;

}