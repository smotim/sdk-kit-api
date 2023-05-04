<?php

namespace service\KitAPI\Model\Entity\Tdd;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Region
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
     * @JSM\SerializedName("code")
     */
    public $code;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("country_code")
     */
    public $country_code;
}