<?php

namespace service\KitAPI\Factory;

use Psr\Cache\CacheItemPoolInterface;
use service\KitAPI\Builder\ClientBuilder;
use service\KitAPI\Builder\FormEncoderBuilder;
use service\KitAPI\Handler\Request\HeaderAuthenticatorHandler;
use service\KitAPI\KitAPIClient;

class SimpleClientFactory
{

    public static function createClient(string $apiUrl, string $apiKey): KitAPIClient
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder((new FormEncoderBuilder())->build())
            ->build();
    }


    /**
     * @param string $apiUrl
     * @param string $apiKey
     * @param CacheItemPoolInterface $cache
     * @return KitAPIClient
     * @throws \service\KitAPI\Exception\Client\BuilderException
     */
    public static function createWithCache(string $apiUrl, string $apiKey, CacheItemPoolInterface $cache): KitAPIClient
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder(
                (new FormEncoderBuilder())
                    ->setCache($cache)
                    ->build()
            )
            ->build();
    }

    /**
     * @param string $apiUrl
     * @param string $apiKey
     * @param string $cacheDir
     * @return KitAPIClient
     * @throws \service\KitAPI\Exception\Client\BuilderException
     */
    public static function createWithCacheDir(string $apiUrl, string $apiKey, string $cacheDir): KitAPIClient
    {
        return (new ClientBuilder())
            ->setApiUrl($apiUrl)
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler($apiKey))
            ->setFormEncoder(
                (new FormEncoderBuilder())
                    ->setCacheDir($cacheDir)
                    ->build()
            )
            ->build();
    }


}