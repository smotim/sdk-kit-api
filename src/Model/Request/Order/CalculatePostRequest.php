<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class CalculatePostRequest implements RequestInterface
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
     * @Form\SerializedName("post_type")
     * @Form\Type("string")
     */
    public $post_type;

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
     * @var string
     *
     * @Form\SerializedName("cargo_type_code")
     * @Form\Type("string")
     */
    public $cargo_type_code;

    /**
     * @var string[]
     *
     * @Form\SerializedName("currency_code")
     * @Form\Type("array<string>")
     */
    public $currency_code;

}