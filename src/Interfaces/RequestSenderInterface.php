<?php

namespace service\KitAPI\Interfaces;

interface RequestSenderInterface
{

    /**
     * @param string $method
     * @param string $route
     * @param array $requestForm
     * @return array
     */
    public function send(
        string $method,
        string $route,
        array  $requestForm = []
    ): array;

    /**
     * Returns API routes with base URI prepended.
     *
     * @param string $route
     *
     * @return string
     */
    public function route(string $route): string;

    /**
     * Returns host from the base URL.
     *
     * @return string
     */
    public function host(): string;

}