<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class OrderCargo
{

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("places")
     */
    public $places;

    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("weight")
     */
    public $weight;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("weight_unit")
     */
    public $weight_unit;

    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("volume")
     */
    public $volume;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("volume_unit")
     */
    public $volume_unit;



}