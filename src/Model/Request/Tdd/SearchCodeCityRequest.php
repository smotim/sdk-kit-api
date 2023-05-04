<?php

namespace service\KitAPI\Model\Request\Tdd;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class SearchCodeCityRequest implements RequestInterface
{

    /**
     * @var string
     *
     * @Form\SerializedName("code_city")
     * @Form\Type("string")
     */
    public $code_city;

    /**
     * @var string
     *
     * @Form\SerializedName("kladr")
     * @Form\Type("string")
     */
    public $kladr;

    /**
     * @param string|null $code_city
     * @param string|null $kladr
     */
    public function __construct(?string $code_city = null, ?string $kladr = null)
    {
        if ($code_city !== null) {
            $this->code_city = $code_city;
        }

        if ($kladr !== null) {
            $this->kladr = $kladr;
        }
    }

}