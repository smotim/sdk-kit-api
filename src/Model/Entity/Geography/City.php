<?php

namespace service\KitAPI\Model\Entity\Geography;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class City
{

    /**
     * @var int
     * @JSM\Type("int")
     * @JSM\SerializedName("id")
     */
    public $id;

    /**
     * @var string
     * @JSM\Type("string")
     * @JSM\SerializedName("tdd_city_code")
     */
    public $tdd_city_code;

    /**
     * @var int
     * @JSM\Type("int")
     * @JSM\SerializedName("sxgeo_city_id")
     */
    public $sxgeo_city_id;

    /**
     * @var \service\KitAPI\Model\Entity\Geography\SxgeoCity
     * @JSM\Type("service\KitAPI\Model\Entity\Geography\SxgeoCity")
     * @JSM\SerializedName("sxgeoCity")
     */
    public $sxgeoCity;

}