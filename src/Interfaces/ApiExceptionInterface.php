<?php

namespace service\KitAPI\Interfaces;

use service\KitAPI\Model\Response\ErrorResponse;

interface ApiExceptionInterface extends \Throwable
{

    /**
     * @return int
     */
    public function getStatusCode(): int;

    /**
     * @return ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse;

    /**
     * @return string
     */
    public function __toString();
}