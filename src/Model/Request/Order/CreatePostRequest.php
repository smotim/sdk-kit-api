<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;
use service\KitAPI\Model\Entity\Order\Debitor;

class CreatePostRequest implements RequestInterface
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
     * @var string[]
     *
     * @Form\SerializedName("service")
     * @Form\Type("array<string>")
     */
    public $service;

    /**
     * @var string
     *
     * @Form\SerializedName("type_post")
     * @Form\Type("string")
     */
    public $type_post;

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

}