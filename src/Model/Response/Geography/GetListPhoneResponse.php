<?php

namespace service\KitAPI\Model\Response\Geography;

use service\KitAPI\Model\Entity\Geography\Phone;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListPhoneResponse extends SuccessResponse
{
    /**
     * @var Phone[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\Phone>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $phones;
}