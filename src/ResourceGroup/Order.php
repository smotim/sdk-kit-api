<?php

namespace service\KitAPI\ResourceGroup;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Model\Request\Order\CalculatePostRequest;
use service\KitAPI\Model\Request\Order\CalculateRequest;
use service\KitAPI\Model\Request\Order\CreatePostRequest;
use service\KitAPI\Model\Request\Order\CreateRequest;
use service\KitAPI\Model\Request\Order\GetDocumentRequest;
use service\KitAPI\Model\Request\Order\GetListOrderRequest;
use service\KitAPI\Model\Request\Order\GetOrderRequest;
use service\KitAPI\Model\Request\Order\GetPhotoRequest;
use service\KitAPI\Model\Request\Order\GetStatusRequest;
use service\KitAPI\Model\Request\Order\TimeDeliveryRequest;
use service\KitAPI\Model\Response\Order\CalculatePostResponse;
use service\KitAPI\Model\Response\Order\CalculateResponse;
use service\KitAPI\Model\Response\Order\CreatePostResponse;
use service\KitAPI\Model\Response\Order\CreateResponse;
use service\KitAPI\Model\Response\Order\GetDocumentResponse;
use service\KitAPI\Model\Response\Order\GetListCurrencyResponse;
use service\KitAPI\Model\Response\Order\GetListOrderResponse;
use service\KitAPI\Model\Response\Order\GetListServiceResponse;
use service\KitAPI\Model\Response\Order\GetOrderResponse;
use service\KitAPI\Model\Response\Order\GetPhotoResponse;
use service\KitAPI\Model\Response\Order\GetStatusResponse;
use service\KitAPI\Model\Response\Order\TimeDeliveryResponse;

class Order extends AbstractApiResourceGroup
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
     * @return GetListCurrencyResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListCurrency(): GetListCurrencyResponse
    {
        /** @var GetListCurrencyResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/currency/get-list',
            null,
            GetListCurrencyResponse::class
        );

        return $response;
    }

    /**
     * @param GetDocumentRequest $request
     * @return GetDocumentResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getDocument(GetDocumentRequest $request): GetDocumentResponse
    {
        /** @var GetDocumentResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/document/get',
            $request,
            GetDocumentResponse::class
        );
        return $response;
    }

    /**
     * @param GetOrderRequest $request
     * @return GetOrderResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getOrder(GetOrderRequest $request): GetOrderResponse
    {
        /** @var GetOrderResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/get',
            $request,
            GetOrderResponse::class
        );
        return $response;
    }

    /**
     * @param GetListOrderRequest $request
     * @return GetListOrderResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListOrder(GetListOrderRequest $request): GetListOrderResponse
    {
        /** @var GetListOrderResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/get-list',
            $request,
            GetListOrderResponse::class
        );
        return $response;
    }

    /**
     * @param GetPhotoRequest $request
     * @return GetPhotoResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getPhoto(GetPhotoRequest $request): GetPhotoResponse
    {
        /** @var GetPhotoResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/photo/get',
            $request,
            GetPhotoResponse::class
        );
        return $response;
    }

    /**
     * @return GetListServiceResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getListService(): GetListServiceResponse
    {
        /** @var GetListServiceResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/service/get-list',
            null,
            GetListServiceResponse::class
        );
        return $response;
    }

    /**
     * @param GetStatusRequest $request
     * @return GetStatusResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getStatus(GetStatusRequest $request): GetStatusResponse
    {
        /** @var GetStatusResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/status/get',
            $request,
            GetStatusResponse::class
        );
        return $response;
    }

    /**
     * @param TimeDeliveryRequest $request
     * @return TimeDeliveryResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getTimeDelivery(TimeDeliveryRequest $request): TimeDeliveryResponse
    {
        /** @var TimeDeliveryResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/time-delivery',
            $request,
            TimeDeliveryResponse::class
        );
        return $response;
    }

    /**
     * @param CalculateRequest $request
     * @return CalculateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function calculate(CalculateRequest $request): CalculateResponse
    {
        /** @var CalculateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.1/order/calculate',
            $request,
            CalculateResponse::class
        );
        return $response;
    }

    /**
     * @param CalculatePostRequest $request
     * @return CalculatePostResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function calculatePost(CalculatePostRequest $request): CalculatePostResponse
    {
        /** @var CalculatePostResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/calculate-post',
            $request,
            CalculatePostResponse::class
        );
        return $response;
    }

    /**
     * @param CreateRequest $request
     * @return CreateResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function create(CreateRequest $request): CreateResponse
    {
        /** @var CreateResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.1/order/create',
            $request,
            CreateResponse::class
        );
        return $response;
    }

    /**
     * @param CreatePostRequest $request
     * @return CreatePostResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function createPost(CreatePostRequest $request): CreatePostResponse
    {
        /** @var CreatePostResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/order/create-post',
            $request,
            CreatePostResponse::class
        );
        return $response;
    }

}