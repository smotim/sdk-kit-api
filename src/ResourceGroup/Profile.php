<?php

namespace service\KitAPI\ResourceGroup;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Interfaces\RequestInterface;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Model\Request\Profile\AddRequest;
use service\KitAPI\Model\Request\Profile\ConfirmRequest;
use service\KitAPI\Model\Response\Profile\AddResponse;
use service\KitAPI\Model\Response\Profile\ConfirmResponse;
use service\KitAPI\Model\Response\Profile\ProfileGetList;

class Profile extends AbstractApiResourceGroup
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
     * @return ProfileGetList
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function getList(): ProfileGetList
    {
        /** @var ProfileGetList $response */
        $response = $this->sendRequest(
            RequestMethod::GET,
            '1.0/profile/get-list',
            null,
            ProfileGetList::class,
        );
        return $response;
    }

    /**
     * @param AddRequest $request
     * @return AddResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function add(AddRequest $request): AddResponse
    {
        /** @var AddResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/profile/add',
            $request,
            AddResponse::class
        );
        return $response;
    }

    /**
     * @param ConfirmRequest $request
     * @return ConfirmResponse
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    public function confirm(ConfirmRequest $request): ConfirmResponse
    {
        /** @var ConfirmResponse $response */
        $response = $this->sendRequest(
            RequestMethod::POST,
            '1.0/profile/confirm',
            $request,
            ConfirmResponse::class
        );
        return $response;
    }
}