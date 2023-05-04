<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\Result;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class CreateResponse extends SuccessResponse
{

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("status")
     *
     */
    public $status;

    /**
     * @var Result
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Result")
     * @JSM\SerializedName("result")
     *
     */
    public $result;

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("message")
     *
     */
    public $message;

}