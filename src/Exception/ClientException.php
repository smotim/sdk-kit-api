<?php

namespace service\KitAPI\Exception;

use service\KitAPI\Interfaces\ClientExceptionInterface;

abstract class ClientException extends \Exception implements ClientExceptionInterface
{
    public function __toString()
    {
        return sprintf("%s (%d)\n%s", $this->getMessage(), $this->getCode(), $this->getTraceAsString());
    }


}