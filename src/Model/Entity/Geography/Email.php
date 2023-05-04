<?php

namespace service\KitAPI\Model\Entity\Geography;

use service\KitAPI\Component\Serializer\Annotation as JSM;

class Email
{

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("geography_city_id")
     */
    public $geography_city_id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("geography_address_id")
     */
    public $geography_address_id;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("value")
     */
    public $value;

    /**
     *
     * @var string
     *
     * @JSM\Type("string")
     * @JSM\SerializedName("comment")
     */
    public $comment;
}