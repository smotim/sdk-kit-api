<?php

namespace service\KitAPI\Model\Request\Profile;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class AddRequest implements RequestInterface
{

    /**
     * @var int
     *
     * @Form\SerializedName("type")
     * @Form\Type("int")
     */
    public $type;

    /**
     * @var string
     *
     * @Form\SerializedName("city_code")
     * @Form\Type("string")
     */
    public $city_code;

    /**
     * @var string
     *
     * @Form\SerializedName("country")
     * @Form\Type("string")
     */
    public $country;

    /**
     * @var string
     *
     * @Form\SerializedName("name")
     * @Form\Type("string")
     */
    public $name;

    /**
     * @var string
     *
     * @Form\SerializedName("email")
     * @Form\Type("string")
     */
    public $email;

    /**
     * @var string
     *
     * @Form\SerializedName("phone")
     * @Form\Type("string")
     */
    public $phone;

    /**
     * @var string
     *
     * @Form\SerializedName("phone_country")
     * @Form\Type("string")
     */
    public $phone_country;

    /**
     * @var string
     *
     * @Form\SerializedName("password")
     * @Form\Type("string")
     */
    public $password;

    /**
     * @var string
     *
     * @Form\SerializedName("password_confirm")
     * @Form\Type("string")
     */
    public $password_confirm;

    /**
     * @var string
     *
     * @Form\SerializedName("iin")
     * @Form\Type("string")
     */
    public $iin;

    /**
     * @var string
     *
     * @Form\SerializedName("inn3")
     * @Form\Type("string")
     */
    public $inn3;

    /**
     * @var string
     *
     * @Form\SerializedName("inn2")
     * @Form\Type("string")
     */
    public $inn2;

    /**
     * @var string
     *
     * @Form\SerializedName("bin_3")
     * @Form\Type("string")
     */
    public $bin_3;

    /**
     * @var string
     *
     * @Form\SerializedName("kpp")
     * @Form\Type("string")
     */
    public $kpp;

    /**
     * @var string
     *
     * @Form\SerializedName("unp_2")
     * @Form\Type("string")
     */
    public $unp_2;

}