<?php

namespace service\KitAPI\Component\Transformer;

use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\ResponseInterface as KitResponseInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Model\ResponseData;

class ResponseTransformer implements ResponseTransformerInterface
{
    /** @var HandlerInterface */
    private $handler;

    /**
     * @param HandlerInterface $handler
     */
    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param string $baseUrl
     * @param \Psr\Http\Message\RequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string $type
     * @return KitResponseInterface
     */
    public function createResponse(
        string $baseUrl,
        \Psr\Http\Message\RequestInterface $request,
        \Psr\Http\Message\ResponseInterface $response,
        string $type): KitResponseInterface
    {
        $responseData = new ResponseData($baseUrl, $request, $response, $type, false);
        $this->handler->handle($responseData);

        return $responseData->responseModel;
    }

    /**
     * @param string $baseUrl
     * @param \Psr\Http\Message\RequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return array
     */
    public function createCustomResponse(string $baseUrl, \Psr\Http\Message\RequestInterface $request, \Psr\Http\Message\ResponseInterface $response): array
    {
        $responseData = new ResponseData($baseUrl, $request, $response, '', true);
        $this->handler->handle($responseData);

        return $responseData->responseArray;
    }

    /**
     * @return HandlerInterface|null
     */
    public function getHandler(): ?HandlerInterface
    {
        return $this->handler;
    }


}