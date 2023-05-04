<?php

namespace service\KitAPI\Model\Response\Profile;

use service\KitAPI\Model\Entity\Profile\Profile;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class ProfileGetList extends SuccessResponse
{

    /**
     * @var Profile[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Profile\Profile>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $profiles;
}