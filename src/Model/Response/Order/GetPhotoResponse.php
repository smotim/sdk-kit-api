<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\Photo;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetPhotoResponse extends SuccessResponse
{
    /**
     * @var Photo[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Photo>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $photos;


}