<?php

namespace service\KitAPI\Model\Request\Order;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class GetListOrderRequest implements RequestInterface
{

    /**
     * @var string
     *
     * @Form\SerializedName("date_start")
     * @Form\Type("string")
     */
    public $date_start;

    /**
     * @var string
     *
     * @Form\SerializedName("date_end")
     * @Form\Type("string")
     */
    public $date_end;

    /**
     * @var int
     *
     * @Form\SerializedName("limit")
     * @Form\Type("int")
     */
    public $limit;

    /**
     * @var int
     *
     * @Form\SerializedName("offset")
     * @Form\Type("int")
     */
    public $offset;

    /**
     * @var int
     *
     * @Form\SerializedName("profile_id")
     * @Form\Type("int")
     */
    public $profile_id;

    /**
     * @param string $date_start
     * @param string $date_end
     * @param int|null $limit
     * @param int|null $offset
     * @param int|null $profile_id
     */
    public function __construct(string $date_start, string $date_end, ?int $limit = null, ?int $offset = null, ?int $profile_id = null)
    {
        $this->date_start = $date_start;
        $this->date_end = $date_end;

        if ($limit !== null) {
            $this->limit = $limit;
        }

        if ($offset !== null) {
            $this->offset = $offset;
        }

        if ($profile_id !== null) {
            $this->profile_id = $profile_id;
        }
    }
}