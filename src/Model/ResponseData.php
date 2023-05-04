<?php

namespace service\KitAPI\Model;

use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Interfaces\ResponseInterface;

class ResponseData
{
    /** @var string */
    public $baseUrl;

    /** @var \Psr\Http\Message\RequestInterface */
    public $request;

    /** @var \Psr\Http\Message\ResponseInterface */
    public $response;

    /** @var string */
    public $type;

    /** @var bool */
    public $custom;

    /** @var ResponseInterface */
    public $responseModel;

    /** @var array<int|string, mixed> */
    public $responseArray;


    /**
     * @param string $baseUrl
     * @param \Psr\Http\Message\RequestInterface $request
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string $type
     * @param bool $custom
     */
    public function __construct(
        string $baseUrl,
        \Psr\Http\Message\RequestInterface $request,
        \Psr\Http\Message\ResponseInterface $response,
        string $type,
        bool $custom = false
    )
    {
        $this->baseUrl = $baseUrl;
        $this->request = $request;
        $this->response = $response;
        $this->type = $type;
        $this->custom = $custom;
    }

}