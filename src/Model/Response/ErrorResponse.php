<?php

namespace service\KitAPI\Model\Response;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class ErrorResponse extends SuccessResponse
{

    /**
     * @var array
     *
     * @JSM\Type("array")
     * @JSM\SerializedName("hidden_array")
     */
    public $errors;

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("string")
     */
    public $errorMsg;

}