<?php

namespace  service\KitAPI\Model\Entity\Geography;

use service\KitAPI\Component\Serializer\Annotation as JSM;
class Address
{
    /**
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("id")
     *
     */
    public $id;

    /**
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("geography_city_id")
     *
     */
    public $geography_city_id;

    /**
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("lat")
     *
     */
    public $lat;

    /**
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("lon")
     *
     */
    public $lon;

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("address_code")
     *
     */
    public $address_code;

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("cityName")
     *
     */
    public $cityName;

    /**
     * @var string[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\Phone>")
     * @JSM\SerializedName("phone")
     *
     */
    public $phone;

    /**
     * @var string[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\Email>")
     * @JSM\SerializedName("email")
     *
     */
    public $email;

    /**
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("value")
     *
     */
    public $value;

}