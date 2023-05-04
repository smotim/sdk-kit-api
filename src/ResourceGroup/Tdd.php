<?php

namespace service\KitAPI\ResourceGroup;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Model\Request\Tdd\GetListCityRequest;
use service\KitAPI\Model\Request\Tdd\GetListCountryRequest;
use service\KitAPI\Model\Request\Tdd\GetListRegionRequest;
use service\KitAPI\Model\Request\Tdd\SearchByNameRequest;
use service\KitAPI\Model\Request\Tdd\SearchCodeCityRequest;
use service\KitAPI\Model\Response\Tdd\GetListCityResponse;
use service\KitAPI\Model\Response\Tdd\GetListCountryResponse;
use service\KitAPI\Model\Response\Tdd\GetListRegionResponse;
use service\KitAPI\Model\Response\Tdd\SearchByNameResponse;
use service\KitAPI\Model\Response\Tdd\SearchCodeCityResponse;

class Tdd extends AbstractApiResourceGroup
{

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
        parent::__construct($baseUrl, $httpClient, $requestTransformer, $responseTransformer, $eventDispatcher, $logger);
    }

    /**
     * @param GetListCityRequest|null $request
     * @return GetListCityResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListCity(?GetListCityRequest $request = null): GetListCityResponse
    {
        /** @var GetListCityResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.1/tdd/city/get-list',
            $request,
            GetListCityResponse::class
        );

        return $response;

    }

    /**
     * @param GetListCountryRequest|null $request
     * @return GetListCountryResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListCountry(?GetListCountryRequest $request = null): GetListCountryResponse
    {
        /** @var GetListCountryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/tdd/country/get-list',
            $request,
            GetListCountryResponse::class
        );

        return $response;

    }

    /**
     * @param GetListRegionRequest|null $request
     * @return GetListRegionResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListRegion(?GetListRegionRequest $request = null): GetListRegionResponse
    {
        /** @var GetListRegionResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/tdd/region/get-list',
            $request,
            GetListRegionResponse::class
        );

        return $response;

    }

    /**
     * @param SearchByNameRequest $request
     * @return SearchByNameResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function searchByName(SearchByNameRequest $request): SearchByNameResponse
    {
        /** @var SearchByNameResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.1/tdd/search/by-name',
            $request,
            SearchByNameResponse::class
        );

        return $response;

    }

    /**
     * @param SearchCodeCityRequest $request
     * @return SearchCodeCityResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function searchCodeCity(SearchCodeCityRequest $request): SearchCodeCityResponse
    {
        /** @var SearchCodeCityResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/tdd/search/code-city',
            $request,
            SearchCodeCityResponse::class
        );
        return $response;
    }

}