<?php

namespace service\KitAPI\TestUtils\Factory;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Builder\ClientBuilder;
use service\KitAPI\Builder\FormEncoderBuilder;
use service\KitAPI\Exception\Client\BuilderException;
use service\KitAPI\Handler\Request\HeaderAuthenticatorHandler;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\KitAPIClient;
use service\KitAPI\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

class TestClientFactory
{

    private static $cache;

    /**
     * @param ClientInterface $client
     * @param LoggerInterface|null $logger
     * @param EventDispatcherInterface|null $eventDispatcher
     * @param HandlerInterface|null $authenticator
     *
     * @return KitAPIClient
     * @throws BuilderException
     */
    public static function createClient(
        ClientInterface $client,
        ?LoggerInterface $logger = null,
        ?EventDispatcherInterface $eventDispatcher = null,
        ?HandlerInterface $authenticator = null
    ): KitAPIClient {
        if (null === static::$cache) {
            static::$cache = new ArrayAdapter();
        }

        $encoder = (new FormEncoderBuilder())
            ->setCache(static::$cache)
            ->build();

        return (new ClientBuilder())
            ->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler($authenticator ?? new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setDebugLogger($logger)
            ->setEventDispatcher($eventDispatcher)
            ->setFormEncoder($encoder)
            ->setHttpClient($client)
            ->build();
    }

}