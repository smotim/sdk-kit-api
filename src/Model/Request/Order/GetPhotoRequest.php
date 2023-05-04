<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetPhotoRequest implements RequestInterface
{
    /**
     * @var string
     *
     * @Form\SerializedName("sale_number")
     * @Form\Type("string")
     */
    public $sale_number;

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
     * @Form\SerializedName("profile_id")
     * @Form\Type("string")
     */
    public $profile_id;

    /**
     * @param string $sale_number
     * @param int $type
     * @param int|null $profile_id
     */
    public function __construct(string $sale_number, int $type, ?int $profile_id = null)
    {
        $this->sale_number = $sale_number;
        $this->type = $type;

        if ($profile_id !== null) {
            $this->profile_id = $profile_id;
        }
    }

}