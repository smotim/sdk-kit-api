<?php

namespace service\KitAPI\Model\Request\Profile;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class ConfirmRequest implements RequestInterface
{


    /**
     * @var int
     *
     * @Form\SerializedName("client_id")
     * @Form\Type("int")
     */
    public $client_id;

    /**
     * @var int
     *
     * @Form\SerializedName("debitor_id")
     * @Form\Type("int")
     */
    public $debitor_id;

    /**
     * @var string
     *
     * @Form\SerializedName("confirm_code")
     * @Form\Type("string")
     */
    public $confirm_code;

    public function __construct(int $client_id, int $debitor_id, int $confirm_code)
    {
        $this->client_id = $client_id;
        $this->debitor_id = $debitor_id;
        $this->confirm_code = $confirm_code;
    }
}