<?php

namespace service\KitAPI\Component\Transformer;

use Psr\Http\Message\RequestInterface as PsrRequestInterface;
use service\KitAPI\Exception\Client\HandlerException;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Model\RequestData;

class RequestTransformer implements RequestTransformerInterface
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
     * @param string $method
     * @param string $uri
     * @param RequestInterface|null $request
     * @return PsrRequestInterface
     * @throws \Exception
     */
    public function createPsrRequest(string $method, string $uri, ?RequestInterface $request = null): PsrRequestInterface
    {
        $requestData = new RequestData($method, $uri, $request);
        $this->handler->handle($requestData);

        return $this->returnRequest($requestData);
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $requestForm
     * @return PsrRequestInterface
     * @throws \Exception
     */
    public function createCustomPsrRequest(string $method, string $uri, array $requestForm = []): PsrRequestInterface
    {
        $requestData = new RequestData($method, $uri, null, $requestForm);
        $this->handler->handle($requestData);

        return $this->returnRequest($requestData);
    }

    /**
     * @return HandlerInterface|null
     */
    public function getHandler(): ?HandlerInterface
    {
        return $this->handler;
    }

    /**
     * @param RequestData $requestData
     * @return PsrRequestInterface
     * @throws \Exception
     */
    public function returnRequest(RequestData $requestData): PsrRequestInterface
    {
        if ($requestData->request === null) {
            throw new HandlerException('Handlers should instantiate request in the ResponseData.');
        }

        return $requestData->request;
    }

}