<?php

namespace service\KitAPI\Model\Request\Geography;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListAddressRequest implements RequestInterface
{

    /**
     * @var string
     *
     * @Form\SerializedName("geography_city_id")
     * @Form\Type("string")
     */
    public $geography_city_id;


    /**
     * @var int
     *
     * @Form\SerializedName("withPhone")
     * @Form\Type("int")
     */
    public $withPhone;

    /**
     * @var int
     *
     * @Form\SerializedName("withEmail")
     * @Form\Type("int")
     */
    public $withEmail;

    /**
     * @param string $geography_city_id
     * @param bool $withPhone
     * @param bool $withEmail
     */
    public function __construct(?string $geography_city_id = null, bool $withPhone = false, bool $withEmail = false)
    {
        if ($geography_city_id !== null) {
            $this->geography_city_id = $geography_city_id;
        }

        if ($withPhone !== false) {
            $this->withPhone = 1;
        }

        if ($withEmail !== false) {
            $this->withEmail = 1;
        }
    }

}