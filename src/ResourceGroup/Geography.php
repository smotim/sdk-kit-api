<?php

namespace service\KitAPI\ResourceGroup;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Model\Request\Geography\GetListAddressRequest;
use service\KitAPI\Model\Request\Geography\GetListCityRequest;
use service\KitAPI\Model\Request\Geography\GetListEmailRequest;
use service\KitAPI\Model\Request\Geography\GetListPhoneRequest;
use service\KitAPI\Model\Request\Geography\GetListScheduleRequest;
use service\KitAPI\Model\Response\Geography\GetListAddressResponse;
use service\KitAPI\Model\Response\Geography\GetListCityResponse;
use service\KitAPI\Model\Response\Geography\GetListEmailResponse;
use service\KitAPI\Model\Response\Geography\GetListPhoneResponse;
use service\KitAPI\Model\Response\Geography\GetListScheduleGroupResponse;
use service\KitAPI\Model\Response\Geography\GetListScheduleResponse;

class Geography extends AbstractApiResourceGroup
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
        string $baseUrl,
        ClientInterface $httpClient,
        RequestTransformerInterface $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        ?EventDispatcherInterface $eventDispatcher = null,
        ?LoggerInterface $logger = null)
    {
        parent::__construct($baseUrl, $httpClient, $requestTransformer, $responseTransformer, $eventDispatcher, $logger);
    }


    /**
     * @param GetListAddressRequest|null $request
     * @return GetListAddressResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListAddress(?GetListAddressRequest $request = null): GetListAddressResponse
    {
        /** @var GetListAddressResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.1/geography/address/get-list',
            $request,
            GetListAddressResponse::class
        );

        return $response;
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
            '1.0/geography/city/get-list',
            $request,
            GetListCityResponse::class
        );
        return $response;
    }

    /**
     * @param GetListEmailRequest|null $request
     * @return GetListEmailResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListEmail(?GetListEmailRequest $request = null): GetListEmailResponse
    {
        /** @var GetListEmailResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/geography/email/get-list',
            $request,
            GetListEmailResponse::class
        );
        return $response;
    }

    /**
     * @param GetListPhoneRequest|null $request
     * @return GetListPhoneResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListPhone(?GetListPhoneRequest $request = null): GetListPhoneResponse
    {
        /** @var GetListPhoneResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/geography/phone/get-list',
            $request,
            GetListPhoneResponse::class
        );
        return $response;
    }

    /**
     * @return GetListScheduleGroupResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListScheduleGroup(): GetListScheduleGroupResponse
    {
        /** @var GetListScheduleGroupResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/geography/schedule-group/get-list',
            null,
            GetListScheduleGroupResponse::class
        );
        return $response;
    }

    /**
     * @param GetListScheduleRequest|null $request
     * @return GetListScheduleResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListSchedule(?GetListScheduleRequest $request = null): GetListScheduleResponse
    {
        /** @var GetListScheduleResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/geography/schedule/get-list',
            $request,
            GetListScheduleResponse::class
        );
        return $response;
    }

}