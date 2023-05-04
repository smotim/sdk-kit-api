<?php

namespace service\KitAPI\Model\Response\Geography;

use service\KitAPI\Model\Entity\Geography\Email;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetListEmailResponse extends SuccessResponse
{

    /**
     * @var Email[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\Email>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $emails;
}