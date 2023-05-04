<?php

namespace service\KitAPI\Model\Response\Profile;

use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class ConfirmResponse extends SuccessResponse
{
    /**
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("status")
     *
     */
    public $status;

}