<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class TimeDeliveryRequest implements RequestInterface
{

    /**
     * @var string
     *
     * @Form\SerializedName("adress_id_from")
     * @Form\Type("string")
     */
    public $adress_id_from;

    /**
     * @var string
     *
     * @Form\SerializedName("adress_id_to")
     * @Form\Type("string")
     */
    public $adress_id_to;

    /**
     * @var string
     *
     * @Form\SerializedName("timestamp")
     * @Form\Type("string")
     */
    public $timestamp;

    /**
     * @var bool
     *
     * @Form\SerializedName("hardpack")
     * @Form\Type("bool")
     */
    public $hardpack;

    /**
     * @var bool
     *
     * @Form\SerializedName("pickup")
     * @Form\Type("bool")
     */
    public $pickup;

    /**
     * @var bool
     *
     * @Form\SerializedName("delivery")
     * @Form\Type("bool")
     */
    public $delivery;

    /**
     * @param string $adress_id_from
     * @param string $adress_id_to
     * @param string $timestamp // 2022-09-15 15:02:00
     * @param bool $pickup
     * @param bool $delivery
     * @param bool $hardpack
     */
    public function __construct(
        string $adress_id_from,
        string $adress_id_to,
        string $timestamp,
        bool   $pickup = false,
        bool   $delivery = false,
        bool   $hardpack = false
    )
    {
        $this->adress_id_from = $adress_id_from;
        $this->adress_id_to = $adress_id_to;
        $this->timestamp = $timestamp;

        $this->pickup = $pickup ? 1 : 0;
        $this->delivery = $delivery ? 1 : 0;
        $this->hardpack = $hardpack ? 1 : 0;
    }
}