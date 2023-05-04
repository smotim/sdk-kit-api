<?php

namespace service\KitAPI\Model\Request\Tdd;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListRegionRequest implements RequestInterface
{

    /**
     * @var string
     *
     * @Form\SerializedName("code")
     * @Form\Type("string")
     */
    public $code;

    /**
     * @var string
     *
     * @Form\SerializedName("country_code")
     * @Form\Type("string")
     */
    public $country_code;

    /**
     * @param string|null $country_code
     * @param string|null $code
     */
    public function __construct(?string $country_code = null, ?string $code = null)
    {
        if ($code !== null) {
            $this->code = $code;
        }

        if ($country_code !== null) {
            $this->country_code = $country_code;
        }
    }
}