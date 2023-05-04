<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;
use service\KitAPI\Model\Entity\Order\Debitor;
use service\KitAPI\Model\Entity\Order\Place;

class CreateRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\SerializedName("city_pickup_code")
     * @Form\Type("string")
     */
    public $city_pickup_code;

    /**
     * @var string
     *
     * @Form\SerializedName("city_delivery_code")
     * @Form\Type("string")
     */
    public $city_delivery_code;

    /**
     * @var string
     *
     * @Form\SerializedName("pickpoint_address_code")
     * @Form\Type("string")
     */
    public $pickpoint_address_code;


    /**
     * @var Debitor
     *
     * @Form\SerializedName("service\KitAPI\Model\Entity\Order\Debitor")
     * @Form\Type("string")
     */
    public $customer;

    /**
     * @var Debitor
     *
     * @Form\SerializedName("service\KitAPI\Model\Entity\Order\Debitor")
     * @Form\Type("string")
     */
    public $sender;

    /**
     * @var Debitor
     *
     * @Form\SerializedName("service\KitAPI\Model\Entity\Order\Debitor")
     * @Form\Type("string")
     */
    public $receiver;


    /**
     * @var string
     *
     * @Form\SerializedName("type")
     * @Form\Type("string")
     */
    public $type;

    /**
     * @var string
     *
     * @Form\SerializedName("cargo_type_code")
     * @Form\Type("string")
     */
    public $cargo_type_code;


    /**
     * @var int
     *
     * @Form\SerializedName("declared_price")
     * @Form\Type("int")
     */
    public $declared_price;

    /**
     * @var bool
     *
     * @Form\SerializedName("confirmation_price")
     * @Form\Type("bool")
     */
    public $confirmation_price;


    /**
     * @var string
     *
     * @Form\SerializedName("inner_track_number")
     * @Form\Type("string")
     */
    public $inner_track_number;

    /**
     * @var Place[]
     *
     * @Form\SerializedName("places")
     * @Form\Type("array<KitAPI\Model\Entity\Order\Place>")
     */
    public $places;

    /**
     * @var bool
     *
     * @Form\SerializedName("pick_up")
     * @Form\Type("bool")
     */
    public $pick_up;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_date")
     * @Form\Type("string")
     */
    public $pickup_date;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_time_start")
     * @Form\Type("string")
     */
    public $pickup_time_start;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_time_end")
     * @Form\Type("string")
     */
    public $pickup_time_end;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_comment")
     * @Form\Type("string")
     */
    public $pickup_comment;


    /**
     * @var bool
     *
     * @Form\SerializedName("pickup_r")
     * @Form\Type("bool")
     */
    public $pickup_r;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_street")
     * @Form\Type("string")
     */
    public $pickup_street;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_house")
     * @Form\Type("string")
     */
    public $pickup_house;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_supp")
     * @Form\Type("string")
     */
    public $pickup_supp;

    /**
     * @var string
     *
     * @Form\SerializedName("pickup_room")
     * @Form\Type("string")
     */
    public $pickup_room;

    /**
     * @var bool
     *
     * @Form\SerializedName("deliver")
     * @Form\Type("bool")
     */
    public $deliver;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_date")
     * @Form\Type("string")
     */
    public $delivery_date;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_time_start")
     * @Form\Type("string")
     */
    public $delivery_time_start;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_time_end")
     * @Form\Type("string")
     */
    public $delivery_time_end;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_comment")
     * @Form\Type("string")
     */
    public $delivery_comment;

    /**
     * @var bool
     *
     * @Form\SerializedName("delivery_r")
     * @Form\Type("bool")
     */
    public $delivery_r;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_street")
     * @Form\Type("string")
     */
    public $delivery_street;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_house")
     * @Form\Type("string")
     */
    public $delivery_house;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_supp")
     * @Form\Type("string")
     */
    public $delivery_supp;

    /**
     * @var string
     *
     * @Form\SerializedName("delivery_room")
     * @Form\Type("string")
     */
    public $delivery_room;

    /**
     * @var string
     *
     * @Form\SerializedName("additional_payment_shipping")
     * @Form\Type("string")
     */
    public $additional_payment_shipping;

    /**
     * @var string
     *
     * @Form\SerializedName("additional_payment_pickup")
     * @Form\Type("string")
     */
    public $additional_payment_pickup;

    /**
     * @var string
     *
     * @Form\SerializedName("additional_payment_delivery")
     * @Form\Type("string")
     */
    public $additional_payment_delivery;

    /**
     * @var bool
     *
     * @Form\SerializedName("insurance")
     * @Form\Type("bool")
     */
    public $insurance;

    /**
     * @var string
     *
     * @Form\SerializedName("insurance_agent_code")
     * @Form\Type("string")
     */
    public $insurance_agent_code;

    /**
     * @var bool
     *
     * @Form\SerializedName("have_doc")
     * @Form\Type("bool")
     */
    public $have_doc;


    /**
     * @var string[]
     *
     * @Form\SerializedName("currency_code")
     * @Form\Type("array<string>")
     */
    public $currency_code;

    /**
     * @var bool
     *
     * @Form\SerializedName("all_places_same")
     * @Form\Type("bool")
     */
    public $all_places_same;
}