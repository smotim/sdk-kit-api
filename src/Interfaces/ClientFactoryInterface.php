<?php

namespace service\KitAPI\Interfaces;

use service\KitAPI\Exception\Client\BuilderException;
use service\KitAPI\KitAPIClient;

interface ClientFactoryInterface
{
    /**
     * Instantiates Client with provided URL and key.
     *
     * @param string $apiUrl
     * @param string $apiKey
     *
     * @return KitAPIClient
     * @throws BuilderException
     */
    public function createClient(string $apiUrl, string $apiKey): KitAPIClient;

}