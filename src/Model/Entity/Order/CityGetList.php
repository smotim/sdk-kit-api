<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CityGetList
{
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
     * @JSM\SerializedName("region_code")
     */
    public $region_code;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("code")
     */
    public $code;

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

}