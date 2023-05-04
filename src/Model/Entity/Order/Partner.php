<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Partner
{

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("debitor")
     */
    public $debitor;
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
     * @JSM\SerializedName("short_name")
     */
    public $short_name;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("inn")
     */
    public $inn;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("kpp")
     */
    public $kpp;

    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("status")
     */
    public $status;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("phone")
     */
    public $phone;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("actual_address")
     */
    public $actual_address;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("legal_address")
     */
    public $legal_address;
}