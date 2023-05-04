<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\CalculatePost;
use service\KitAPI\Model\Entity\Order\CalculatePostResult;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculatePostResponse extends SuccessResponse
{

    /**
     * @var CalculatePost[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\CalculatePost>")
     * @JSM\SerializedName("hidden_array")
     *
     */
    public $calculateResults;

    public function getResult(): CalculatePostResult
    {
        return $this->calculateResults[0]->calculate;
    }

}