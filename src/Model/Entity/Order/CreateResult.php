<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CreateResult
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
     * @var \service\KitAPI\Model\Entity\Order\Result
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Result")
     * @JSM\SerializedName("result")
     */
    public $result;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("message")
     */
    public $message;

}