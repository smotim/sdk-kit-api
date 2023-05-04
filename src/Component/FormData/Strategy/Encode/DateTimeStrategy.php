<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use service\KitAPI\Component\FormData\PropertyAnnotations;

class DateTimeStrategy extends AbstractEncodeStrategy
{

    /**
     * @param $value
     * @param PropertyAnnotations|null $annotations
     * @return mixed|string|null
     */
    public function encode($value, ?PropertyAnnotations $annotations)
    {
        if ($value instanceof \DateTime) {
            return $value->format($this->innerType);
        }

        return null;
    }

}