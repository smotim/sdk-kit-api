<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Entity\Order\Calculate;
use service\KitAPI\Model\Entity\Order\CalculateResult;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class CalculateResponse extends SuccessResponse
{

    /**
     * @var Calculate[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Calculate>")
     * @JSM\SerializedName("hidden_array")
     */
    public $calculateResults;


    public function getResult(): CalculateResult
    {
        return $this->calculateResults[0]->calculate;
    }

}