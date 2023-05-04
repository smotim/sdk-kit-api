<?php

namespace service\KitAPI\Traits;

use service\KitAPI\Factory\ApiExceptionFactory;

trait ApiExceptionFactoryAwareTrait
{

    /** @var ApiExceptionFactory */
    protected $apiExceptionFactory;

    /**
     * @param ApiExceptionFactory $apiExceptionFactory
     * @return self
     */
    public function setApiExceptionFactory(ApiExceptionFactory $apiExceptionFactory): self
    {
        $this->apiExceptionFactory = $apiExceptionFactory;
        return $this;
    }
}