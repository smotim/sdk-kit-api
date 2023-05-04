<?php

namespace service\KitAPI\Model\Entity\Order;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Document
{

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("name")
     */
    public $name;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("data")
     */
    public $data;

    public function getFileDocument()
    {
        return base64_decode($this->data);
    }
}