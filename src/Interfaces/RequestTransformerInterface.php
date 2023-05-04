<?php

namespace service\KitAPI\Interfaces;

use Psr\Http\Message\RequestInterface as PsrRequestInterface;


interface RequestTransformerInterface
{
    /**
     * @param string $method
     * @param string $uri
     * @param RequestInterface|null $request
     * @return \Psr\Http\Message\RequestInterface
     */
    public function createPsrRequest(
        string $method,
        string $uri,
        ?RequestInterface $request = null
    ): PsrRequestInterface;


    /**
     * @param string $method
     * @param string $uri
     * @param array $requestForm
     * @return \Psr\Http\Message\RequestInterface
     */
    public function createCustomPsrRequest(
        string $method,
        string $uri,
        array $requestForm = []
    ): PsrRequestInterface;

    /**
     * @return HandlerInterface|null
     */
    public function getHandler(): ?HandlerInterface;

}