<?php

namespace service\KitAPI\Interfaces;

use service\KitAPI\Factory\ApiExceptionFactory;

interface ApiExceptionFactoryAwareInterface
{

    /**
     * @param ApiExceptionFactory $exceptionFactory
     */
    public function setApiExceptionFactory(ApiExceptionFactory $exceptionFactory);
}