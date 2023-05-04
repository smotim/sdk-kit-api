<?php

namespace service\KitAPI\Interfaces;

use service\KitAPI\Interfaces\ResponseInterface as KitResponseInterface;

interface ResponseTransformerInterface
{
    /**
     * @param string $baseUrl
     * @param \Psr\Http\Message\RequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string $type
     * @return ResponseInterface
     */
    public function createResponse(
        string $baseUrl,
        \Psr\Http\Message\RequestInterface $request,
        \Psr\Http\Message\ResponseInterface $response,
        string $type
    ): KitResponseInterface;

    /**
     * @param string $baseUrl
     * @param \Psr\Http\Message\RequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return array
     */
    public function createCustomResponse(
        string $baseUrl,
        \Psr\Http\Message\RequestInterface $request,
        \Psr\Http\Message\ResponseInterface $response
    ): array;

    /**
     * @return HandlerInterface|null
     */
    public function getHandler(): ?HandlerInterface;

}