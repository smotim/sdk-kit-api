<?php

namespace service\KitAPI\Component\FormData;

use service\KitAPI\Component\FormData\Mapping\Accessor;
use service\KitAPI\Component\FormData\Mapping\JsonField;
use service\KitAPI\Component\FormData\Mapping\SerializedName;
use service\KitAPI\Component\FormData\Mapping\Type;

class PropertyAnnotations
{

    /** @var SerializedName */
    public $serializedName;

    /** @var Accessor */
    public $accessor;

    /**
     * @var Type
     */
    public $type;

    /**
     * @return JsonField|null
     */
    public $jsonField;

    /**
     * @param object[] $annotations
     */
    public function __construct(array $annotations = [])
    {
        foreach ($annotations as $annotation) {
            switch (get_class($annotation)) {
                case Type::class:
                    $this->type = $annotation;
                    break;
                case SerializedName::class:
                    $this->serializedName = $annotation;
                    break;
                case Accessor::class:
                    $this->accessor = $annotation;
                    break;
                case JsonField::class:
                    $this->jsonField = $annotation;
                    break;
            }
        }
    }

}