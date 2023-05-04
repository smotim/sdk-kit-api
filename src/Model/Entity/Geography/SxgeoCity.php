<?php

namespace service\KitAPI\Model\Entity\Geography;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class SxgeoCity
{

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("id")
     */
    public $id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("lat")
     */
    public $lat;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("lon")
     */
    public $lon;

}