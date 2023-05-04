<?php

namespace service\KitAPI\Model;

use service\KitAPI\Interfaces\RequestInterface;

class RequestData
{

    /** @var string */
    public $method;

    /** @var string */
    public $uri;

    /** @var RequestInterface */
    public $requestModel;

    /** @var array<int|string, mixed> */
    public $requestForm;

    /** @var \Psr\Http\Message\RequestInterface */
    public $request;

    public function __construct(string $method, string $uri, ?RequestInterface $requestModel, array $requestForm = [])
    {
        $this->method = $method;
        $this->uri = $uri;
        $this->requestModel = $requestModel;
        $this->requestForm = $requestForm;
    }
}