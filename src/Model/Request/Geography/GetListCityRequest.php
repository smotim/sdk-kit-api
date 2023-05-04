<?php

namespace service\KitAPI\Model\Request\Geography;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListCityRequest implements RequestInterface
{

    /**
     * @var int
     *
     * @Form\SerializedName("id")
     * @Form\Type("int")
     */
    public $id;


    /**
     * @var string
     *
     * @Form\SerializedName("tdd_city_code")
     * @Form\Type("string")
     */
    public $tdd_city_code;

    /**
     * @param int|null $id
     * @param string|null $tdd_city_code
     */
    public function __construct(int $id = null, ?string $tdd_city_code = null)
    {
        if ($id !== null) {
            $this->id = $id;
        }

        if ($tdd_city_code !== null) {
            $this->tdd_city_code = $tdd_city_code;
        }
    }
}