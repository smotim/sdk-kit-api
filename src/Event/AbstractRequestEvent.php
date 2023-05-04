<?php

namespace service\KitAPI\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

abstract class AbstractRequestEvent
{
    /** @var string */
    private $requestScheme;

    /** @var string */
    private $crmDomain;

    /** @var string */
    private $token;

    /** @var RequestInterface */
    private $request;

    /** @var ResponseInterface */
    private $response;

    /** @var array<int|string, mixed> */
    private $responseArray;

    public function __construct(
        string $baseUrl,
        RequestInterface $request,
        ?ResponseInterface $response,
        array $responseArray = []
    )
    {
        $this->requestScheme = (string) parse_url($baseUrl, PHP_URL_SCHEME);
        $this->crmDomain = (string) parse_url($baseUrl, PHP_URL_HOST);
        $this->request = $request;
        $this->response = $response;
        $this->responseArray = $responseArray;
    }

    /**
     * @return RequestInterface
     */
    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    /**
     * @return ResponseInterface|null
     */
    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function getApiDomain(): string
    {
        return $this->crmDomain;
    }

    /**
     * @return array|mixed[]
     */
    public function getResponseArray(): array
    {
        return $this->responseArray;
    }

    public function getApiUrl(): string
    {
        return sprintf('%s://%s', $this->requestScheme, $this->crmDomain);
    }

    public function getToken(): string
    {
        if (empty($this->token)) {
            $uri = $this->request->getUri();

            if ($this->request->getHeaderLine('Authorization')) {
                $this->token = str_replace('Bearer ', '', $this->request->getHeaderLine('Authorization'));
            } elseif ($uri->getQuery() !== '') {
                $params = [];
                parse_str($uri->getQuery(), $params);

                if (array_key_exists('token', $params)) {
                    $this->token = $params['token'];
                }
            }
        }

        return $this->token;
    }


}