<?php

namespace service\KitAPI\Model\Response\Order;

use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\Component\Serializer\Annotation as JSM;

class GetOrderResponse extends SuccessResponse
{

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
     * @var \service\KitAPI\Model\Entity\Order\Contact
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Contact")
     * @JSM\SerializedName("contact_from")
     */
    public $contact_from;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Contact
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\Contact")
     * @JSM\SerializedName("contact_to")
     */
    public $contact_to;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\OrderCargo
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\OrderCargo")
     * @JSM\SerializedName("about_cargo")
     */
    public $about_cargo;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\OrderTotal
     *
     * @JSM\Type("service\KitAPI\Model\Entity\Order\OrderTotal")
     * @JSM\SerializedName("total")
     */
    public $total;

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
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("pickup_address")
     */
    public $pickup_address;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("delivery_address")
     */
    public $delivery_address;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\OrderService[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\OrderService>")
     * @JSM\SerializedName("service")
     */
    public $service;

    /**
     *
     * @var \service\KitAPI\Model\Entity\Order\Status[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Order\Status>")
     * @JSM\SerializedName("status")
     */
    public $status;
}