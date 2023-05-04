<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Place
{

    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("height")
     */
    public $height;

    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("width")
     */
    public $width;

    /**
     *
     * @var float
     *
     * @JSM\Type("float")
     * @JSM\SerializedName("length")
     */
    public $length;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("count_place")
     */
    public $count_place;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("weight")
     */
    public $weight;

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
     * @var ServicePlace[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\ServicePlace>")
     * @JSM\SerializedName("service")
     */
    public $service;
}