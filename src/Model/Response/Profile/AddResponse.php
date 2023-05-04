<?php

namespace service\KitAPI\Model\Response\Profile;

use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class AddResponse extends SuccessResponse
{

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("message")
     *
     */
    public $message;

    /**
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("client_id")
     *
     */
    public $client_id;

    /**
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("debitor_id")
     *
     */
    public $debitor_id;


}