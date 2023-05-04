<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use service\KitAPI\Component\FormData\Mapping\Type;
use service\KitAPI\Component\FormData\PropertyAnnotations;

interface EncodeStrategyInterface
{


    /**
     * @param $value
     * @param PropertyAnnotations|null $annotations
     * @return mixed
     */
    public function encode($value, ?PropertyAnnotations $annotations);

    /**
     * @param string $type
     * @return EncodeStrategyInterface
     */
    public function setInnerType(string $type): EncodeStrategyInterface;
}