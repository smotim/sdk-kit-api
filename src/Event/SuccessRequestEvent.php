<?php

namespace service\KitAPI\Event;

use Psr\Http\Message\RequestInterface;
use service\KitAPI\Interfaces\ResponseInterface;

class SuccessRequestEvent extends AbstractRequestEvent
{

    /** @var ResponseInterface|null */
    private $responseModel;

    public function __construct(
        string $baseUrl,
        RequestInterface $request,
        \Psr\Http\Message\ResponseInterface $response,
        ?ResponseInterface $responseModel,
        array $responseArray = []
    )
    {
        parent::__construct($baseUrl, $request, $response, $responseArray);

        $this->responseModel = $responseModel;
    }

    /**
     * @return ResponseInterface|null
     */
    public function getResponseModel(): ?ResponseInterface
    {
        return $this->responseModel;
    }

}