<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Model\Entity\Order\Place;
use service\KitAPI\Component\FormData\Mapping as Form;

class CalculateRequest implements RequestInterface
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
     * @var bool
     *
     * @Form\SerializedName("delivery")
     * @Form\Type("bool")
     */
    public $delivery;

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

    /**
     * @var bool
     *
     * @Form\SerializedName("all_places_same")
     * @Form\Type("bool")
     */
    public $all_places_same;

}