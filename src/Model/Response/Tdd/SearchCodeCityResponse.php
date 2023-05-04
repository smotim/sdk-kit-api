<?php

namespace service\KitAPI\Model\Response\Tdd;

use service\KitAPI\Component\Serializer\Annotation as JSM;
use service\KitAPI\Model\Response\SuccessResponse;

class SearchCodeCityResponse extends SuccessResponse
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