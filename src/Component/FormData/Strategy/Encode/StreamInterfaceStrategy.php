<?php

namespace service\KitAPI\Component\FormData\Strategy\Encode;

use Psr\Http\Message\StreamInterface;
use service\KitAPI\Component\FormData\PropertyAnnotations;

class StreamInterfaceStrategy extends AbstractEncodeStrategy
{
    /**
     * @param $value
     * @param PropertyAnnotations|null $annotations
     * @return string|null
     */
    public function encode($value, ?PropertyAnnotations $annotations): ?string
    {
        if ($value instanceof StreamInterface) {
            if ($value->isSeekable()) {
                $value->seek(0);
            }

            return $value->getContents();
        }

        return null;
    }
}