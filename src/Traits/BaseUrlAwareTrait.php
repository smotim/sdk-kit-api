<?php

namespace service\KitAPI\Traits;

trait BaseUrlAwareTrait
{

    protected $baseUrl;


    protected function route(string $route): string
    {
        return sprintf('%s/%s', $this->baseUrl, $route);
    }

}