<?php

namespace service\KitAPI\Model\Request\Tdd;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Component\FormData\Mapping as Form;

class SearchByNameRequest implements RequestInterface
{

    /**
     * @var string
     *
     * @Form\SerializedName("title")
     * @Form\Type("string")
     */
    public $title;

    /**
     * @param string $title
     */
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}