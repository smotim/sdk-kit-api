<?php


namespace service\KitAPI\Model\Response\Geography;

use service\KitAPI\Model\Entity\Geography\Address;
use service\KitAPI\Component\Serializer\Annotation as JSM;
use service\KitAPI\Model\Response\SuccessResponse;

class GetListAddressResponse extends SuccessResponse
{

    /**
     * @var Address[]
     *
     * @JSM\Type("array<service\KitAPI\Model\Entity\Geography\Address>")
     * @JSM\SerializedName("hidden_array")
     *
     */

    public $addreses;

}