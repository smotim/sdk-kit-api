<?php

namespace service\KitAPI\Model\Request\Geography;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListScheduleRequest implements RequestInterface
{
    /**
     * @var int
     *
     * @Form\SerializedName("geography_city_id")
     * @Form\Type("int")
     */
    public $geography_city_id;


    /**
     * @var int
     *
     * @Form\SerializedName("geography_address_id")
     * @Form\Type("int")
     */
    public $geography_address_id;

    /**
     * @var int
     *
     * @Form\SerializedName("group_id")
     * @Form\Type("int")
     */
    public $group_id;

    /**
     * @param int|null $geography_city_id
     * @param int|null $geography_address_id
     * @param int|null $group_id
     */
    public function __construct(?int $geography_city_id = null, ?int $geography_address_id = null, ?int $group_id = null)
    {
        if ($geography_city_id !== null) {
            $this->geography_city_id = $geography_city_id;
        }

        if ($geography_address_id !== null) {
            $this->geography_address_id = $geography_address_id;
        }

        if ($group_id !== null) {
            $this->group_id = $group_id;
        }
    }
}