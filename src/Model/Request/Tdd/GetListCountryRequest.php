<?php

namespace service\KitAPI\Model\Request\Tdd;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListCountryRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\SerializedName("code")
     * @Form\Type("string")
     */
    public $code;

    /**
     * @param string|null $code
     */
    public function __construct(?string $code = null)
    {
        if ($code !== null) {
            $this->code = $code;
        }
    }

}