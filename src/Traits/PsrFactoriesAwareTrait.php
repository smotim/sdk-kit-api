<?php

namespace service\KitAPI\Traits;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

trait PsrFactoriesAwareTrait
{

    /** @var UriFactoryInterface */
    protected $uriFactory;

    /** @var RequestFactoryInterface */
    protected $requestFactory;

    /** @var StreamFactoryInterface */
    protected $streamFactory;

    /**
     * @param UriFactoryInterface $uriFactory
     * @return self
     */
    public function setUriFactory(UriFactoryInterface $uriFactory): self
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * @param RequestFactoryInterface $requestFactory
     * @return self
     */
    public function setRequestFactory(RequestFactoryInterface $requestFactory): self
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * @param StreamFactoryInterface $streamFactory
     * @return self
     */
    public function setStreamFactory(StreamFactoryInterface $streamFactory): self
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }
}