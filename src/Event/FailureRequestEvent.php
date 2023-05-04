<?php

namespace service\KitAPI\Event;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class FailureRequestEvent extends AbstractRequestEvent
{
    /** @var \Exception */
    private $exception;

    /** @var bool */
    private $suppressThrow = false;

    public function __construct(string $baseUrl, RequestInterface $request, ?ResponseInterface $response, $exception, array $responseArray = [])
    {
        parent::__construct($baseUrl, $request, $response, $responseArray);

        $this->exception = $exception;
    }

    /**
     * @return FailureRequestEvent
     */
    public function suppressThrow(): FailureRequestEvent
    {
        $this->suppressThrow = true;
        return $this;
    }

    /** @return bool */
    public function shouldSuppressThrow(): bool
    {
        return $this->suppressThrow;
    }

    /**
     * @return \Exception
     */
    public function getException(): \Exception
    {
        return $this->exception;
    }


}