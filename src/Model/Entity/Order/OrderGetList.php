<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class OrderGetList
{

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("sale_number")
     */
    public $sale_number;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("cargo_number")
     */
    public $cargo_number;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("date")
     */
    public $date;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("time")
     */
    public $time;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("price")
     */
    public $price;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("currency_code")
     */
    public $currency_code;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Partner
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Partner")
     * @JSM\SerializedName("customer")
     */
    public $customer;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Partner
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Partner")
     * @JSM\SerializedName("sender")
     */
    public $sender;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Partner
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Partner")
     * @JSM\SerializedName("recipient")
     */
    public $recipient;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Payment
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Payment")
     * @JSM\SerializedName("payment")
     */
    public $payment;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CityGetList
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CityGetList")
     * @JSM\SerializedName("from")
     */
    public $from;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\CityGetList
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\CityGetList")
     * @JSM\SerializedName("to")
     */
    public $to;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Status[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Status>")
     * @JSM\SerializedName("status")
     */
    public $status;



}