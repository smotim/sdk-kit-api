<?php

namespace service\KitAPI;


use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Component\Utils;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\ResourceGroup\CustomMethods;
use service\KitAPI\ResourceGroup\Geography;
use service\KitAPI\ResourceGroup\Order;
use service\KitAPI\ResourceGroup\Profile;
use service\KitAPI\ResourceGroup\Tdd;

class KitAPIClient
{
    /**
     * @var \service\KitAPI\ResourceGroup\Profile
     */
    public $profile;

    /**
     * @var \service\KitAPI\ResourceGroup\Geography
     */
    public $geography;

    /**
     * @var \service\KitAPI\ResourceGroup\Tdd
     */
    public $tdd;

    /**
     * @var Order
     */
    public $order;

    /** @var CustomMethods  */
    public $customMethods;

    /** @var StreamFactoryInterface */
    private $streamFactory;

    /**
     * @param string $apiUrl
     * @param ClientInterface $httpClient
     * @param RequestTransformerInterface $requestTransformer
     * @param ResponseTransformerInterface $responseTransformer
     * @param StreamFactoryInterface $streamFactory
     * @param EventDispatcherInterface|null $eventDispatcher
     * @param LoggerInterface|null $logger
     */
    public function __construct(
        string                       $apiUrl,
        ClientInterface              $httpClient,
        RequestTransformerInterface  $requestTransformer,
        ResponseTransformerInterface $responseTransformer,
        StreamFactoryInterface       $streamFactory,
        ?EventDispatcherInterface    $eventDispatcher = null,
        ?LoggerInterface             $logger = null
    )
    {
        $url = static::getBaseUrl($apiUrl);

        $this->streamFactory = $streamFactory;

        $this->profile = new Profile(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger,
        );

        $this->geography = new Geography(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger,
        );

        $this->tdd = new Tdd(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );

        $this->order = new Order(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );

        $this->customMethods = new CustomMethods(
            $url,
            $httpClient,
            $requestTransformer,
            $responseTransformer,
            $eventDispatcher,
            $logger
        );

    }

    /**
     * @return StreamFactoryInterface
     */
    public function getStreamFactory(): StreamFactoryInterface
    {
        return $this->streamFactory;
    }


    /**
     * @param string $url
     * @return string
     */
    private static function getBaseUrl(string $url): string
    {
        return Utils::removeTrailingSlash($url);
    }
}