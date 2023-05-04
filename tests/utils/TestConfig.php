<?php

namespace service\KitAPI\TestUtils;

class TestConfig
{
    public static function getApiUrl(): string
    {
        return self::getenv('API_URL', 'https://capi.tk-kit.com/');
    }

    public static function getApiKey(): string
    {
        return self::getenv('API_KEY' );
    }

    /**
     * @param string $variable
     * @param $default
     * @return mixed|null
     */
    private static function getenv(string $variable, $default = null)
    {
        if(!array_key_exists($variable, $_ENV)) {
            return $default;
        }

        return $_ENV[$variable];
    }
}