<?php

namespace service\KitAPI\Interfaces;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;

interface PsrFactoriesAwareInterface
{

    /**
     * @param UriFactoryInterface $uriFactory
     */
    public function setUriFactory(UriFactoryInterface $uriFactory);

    /**
     * @param RequestFactoryInterface $requestFactory
     */
    public function setRequestFactory(RequestFactoryInterface $requestFactory);

    /**
     * @param StreamFactoryInterface $streamFactory
     */
    public function setStreamFactory(StreamFactoryInterface $streamFactory);

}