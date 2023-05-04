<?php

namespace service\KitAPI\Model\Entity\Profile;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Profile
{
    /**
     *
     * @var int
     *
     * @JSM\Type("int")
     * @JSM\SerializedName("id")
     */
    public $id;

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
     * @JSM\SerializedName("debitor")
     */
    public $debitor;

}