<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetStatusRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\SerializedName("cargo_number")
     * @Form\Type("string")
     */
    public $cargo_number;

    /**
     * @param string $cargo_number
     */
    public function __construct(string $cargo_number)
    {
        $this->cargo_number =$cargo_number;
    }

}