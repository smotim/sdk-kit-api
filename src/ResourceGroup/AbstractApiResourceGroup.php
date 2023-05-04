<?php

namespace service\KitAPI\ResourceGroup;

use Pock\Client;
use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use service\KitAPI\Component\Utils;
use service\KitAPI\Event\FailureRequestEvent;
use service\KitAPI\Exception\Client\HttpClientException;
use service\KitAPI\Interfaces\EventDispatcherAwareInterface;
use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Traits\BaseUrlAwareTrait;
use service\KitAPI\Traits\EventDispatcherAwareTrait;
use Psr\Http\Message\RequestInterface as PsrRequestInterface;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

abstract class AbstractApiResourceGroup implements EventDispatcherAwareInterface
{

    use EventDispatcherAwareTrait;
    use BaseUrlAwareTrait;

    /** @var ClientInterface */
    protected $httpClient;

    /**
     * @var RequestTransformerInterface
     */
    protected $requestTransformer;

    /**
     * @var ResponseTransformerInterface
     */
    protected $responseTransformer;

    /** @var LoggerInterface|null */
    protected $logger;

    /**
     * @param string $baseUrl
     * @param ClientInterface $httpClient
     * @param RequestTransformerInterface $requestTransformer
     * @param ResponseTransformerInterface $responseTransformer
     * @param EventDispatcherInterface|null $eventDispatcher
     * @param LoggerInterface|null $logger
     */
    public function __construct(
        string                       $baseUrl,
        ClientInterface              $httpClient,
        RequestTransformerInterface  $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        ?EventDispatcherInterface    $eventDispatcher = null,
        ?LoggerInterface             $logger = null
    )
    {
        $this->baseUrl = $baseUrl;
        $this->httpClient = $httpClient;
        $this->requestTransformer = $requestTransformer;
        $this->responseTransformer = $responseTransformer;
        $this->eventDispatcher = $eventDispatcher;
        $this->logger = $logger;

    }

    /**
     * @param string $method
     * @param string $rout
     * @param RequestInterface|null $request
     * @param string $type
     * @return ResponseInterface
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    protected function sendRequest(string $method, string $route, ?RequestInterface $request, string $type): ResponseInterface
    {
        $method = strtoupper($method);
        $psrRequest = $this->requestTransformer->createPsrRequest(
            $method,
            $this->route($route),
            $request
        );

        $this->logPsr7Request($psrRequest);

        try {
            $psrResponse = $this->httpClient->sendRequest($psrRequest);
        } catch (ClientExceptionInterface|NetworkExceptionInterface $exception) {
            $this->processPsr18Exception($psrRequest, $exception);
        }

        if (isset($psrResponse)) {
            $this->logPsr7Response($psrResponse);
        } else {
            return new $type();
        }
        return $this->responseTransformer->createResponse($this->baseUrl, $psrRequest, $psrResponse, $type);
    }


    /**
     * Logs PSR-7 request data if possible.
     *
     * @param \Psr\Http\Message\RequestInterface $psrRequest
     */
    protected function logPsr7Request(PsrRequestInterface $psrRequest): void
    {
        if ($this->logger instanceof LoggerInterface && !($this->logger instanceof NullLogger)) {
            $this->logger->debug(sprintf(
                '[KIT API Request]: %s URL: "%s", Headers: "%s", Body: "%s"',
                $psrRequest->getMethod(),
                (string)$psrRequest->getUri(),
                json_encode($psrRequest->getHeaders()),
                Utils::getBodyContents($psrRequest->getBody())
            ));
        }
    }

    /**
     * Logs PSR-7 response data if possible.
     *
     * @param \Psr\Http\Message\ResponseInterface $psrResponse
     */
    protected function logPsr7Response(PsrResponseInterface $psrResponse): void
    {
        if (
            $this->logger instanceof LoggerInterface &&
            !($this->logger instanceof NullLogger)
        ) {
            $this->logger->debug(sprintf(
                '[KIT API Response]: Status: "%d", Body: "%s"',
                $psrResponse->getStatusCode(),
                Utils::getBodyContents($psrResponse->getBody())
            ));
        }
    }

    /**
     * Processes PSR-18 client exception.
     *
     * @param \Psr\Http\Message\RequestInterface $psrRequest
     * @param ClientExceptionInterface|NetworkExceptionInterface $exception
     *
     * @throws \service\KitAPI\Exception\ApiException
     * @throws \service\KitAPI\Exception\ClientException
     */
    protected function processPsr18Exception(PsrRequestInterface $psrRequest, $exception): void
    {
        $event = new FailureRequestEvent(
            $this->baseUrl,
            $psrRequest,
            null,
            new HttpClientException(
                sprintf('HTTP client error: %s', $exception->getMessage()),
                $exception->getCode(),
                $exception
            )
        );

        $this->dispatch($event);

        if (!$event->shouldSuppressThrow()) {
            throw $event->getException();
        }
    }


}