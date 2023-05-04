<?php


namespace service\KitAPI\Component;

use Psr\Http\Client\NetworkExceptionInterface;
use service\KitAPI\Interfaces\ClientExceptionInterface;
use service\KitAPI\Interfaces\RequestSenderInterface;
use service\KitAPI\ResourceGroup\AbstractApiResourceGroup;
use service\KitAPI\Traits\BaseUrlAwareTrait;

class RequestSender extends AbstractApiResourceGroup implements RequestSenderInterface
{

    use BaseUrlAwareTrait {
        route as private makeRoute;
    }

    /**
     * @param AbstractApiResourceGroup $resourceGroup
     */
    public function __construct(AbstractApiResourceGroup $resourceGroup)
    {
        parent::__construct(
            $resourceGroup->baseUrl,
            $resourceGroup->httpClient,
            $resourceGroup->requestTransformer,
            $resourceGroup->responseTransformer,
            $resourceGroup->eventDispatcher,
            $resourceGroup->logger
        );
    }


    public function send(
        string $method,
        string $route,
        array  $requestForm = []
    ): array
    {
        $method = strtoupper($method);
        $psrRequest = $this->requestTransformer->createCustomPsrRequest($method, $route, $requestForm);

        $this->logPsr7Request($psrRequest);

        try {
            $psrResponse = $this->httpClient->sendRequest($psrRequest);
        } catch (ClientExceptionInterface|NetworkExceptionInterface $exception) {
            $this->processPsr18Exception($psrRequest, $exception);
        }

        if (isset($psrResponse)) {
            $this->logPsr7Response($psrResponse);
        } else {
            return [];
        }

        return $this->responseTransformer->createCustomResponse($this->baseUrl, $psrRequest, $psrResponse);
    }

    /**
     * @inheritDoc
     */
    public function route(string $route): string
    {
        return $this->makeRoute($route);
    }

    /**
     * @inheritDoc
     */
    public function host(): string
    {
        return (string)parse_url($this->baseUrl, PHP_URL_HOST);
    }
}