<?php

namespace service\KitAPI\Model\Entity\Tdd;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class City
{
    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("name")
     */
    public $name;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("type")
     */
    public $type;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("code")
     */
    public $code;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("kladr")
     */
    public $kladr;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("region_code")
     */
    public $region_code;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("country_code")
     */
    public $country_code;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("required_pickup")
     */
    public $required_pickup;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("required_delivery")
     */
    public $required_delivery;

}