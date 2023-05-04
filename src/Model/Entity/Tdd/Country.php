<?php

namespace service\KitAPI\Model\Entity\Tdd;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Country
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

}