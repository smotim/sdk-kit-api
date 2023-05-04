<?php

namespace service\KitAPI\Model\Request\Tdd;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListCityRequest implements RequestInterface
{

    /**
     *
     * @Form\SerializedName("code")
     */
    public $code;

    /**
     *
     * @Form\SerializedName("region_code")
     */
    public $region_code;

    /**
     *
     * @Form\SerializedName("country_code")
     */
    public $country_code;

    /**
     * @param string|null $country_code
     * @param string|null $region_code
     * @param string|null $code
     */
    public function __construct(?string $country_code = null, ?string $region_code = null, ?string $code = null)
    {
        if ($country_code !== null) {
            $this->country_code = $country_code;
        }

        if ($region_code !== null) {
            $this->region_code = $region_code;
        }

        if ($code !== null) {
            $this->code = $code;
        }
    }
}