<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetDocumentRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\SerializedName("sale_number")
     * @Form\Type("string")
     */
    public $sale_number;

    /**
     * @var string
     *
     * @Form\SerializedName("type_code")
     * @Form\Type("string")
     */
    public $type_code;


    /**
     * @param string $sale_number
     * @param int $type_code
     */
    public function __construct(string $sale_number, int $type_code)
    {
        $this->sale_number = $sale_number;
        $this->type_code = $type_code;
    }

}