<?php

namespace service\KitAPI\Interfaces;

interface ClientExceptionInterface extends \Throwable
{

    /**
     * @return string
     */
    public function __toString();

}