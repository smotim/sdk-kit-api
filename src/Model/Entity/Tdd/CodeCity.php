<?php

namespace service\KitAPI\Model\Entity\Tdd;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class CodeCity
{

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
     * @JSM\SerializedName("type_kladr")
     */
    public $type_kladr;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("name_kladr")
     */
    public $name_kladr;
}