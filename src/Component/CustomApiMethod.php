<?php


namespace service\KitAPI\Component;

use service\KitAPI\Exception\Client\HandlerException;
use service\KitAPI\Interfaces\RequestSenderInterface;

class CustomApiMethod
{

    /** @var string */
    protected $method;

    /** @var string */
    protected $route;

    /** @var bool */
    protected $rawRouteUri;

    /**
     * Instantiates new instance of the CustomApiMethod.
     *
     * @param string $method
     * @param string $route
     */
    public function __construct(string $method, string $route)
    {
        $this->method = $method;
        $this->route = $route;
    }

    /**
     * Use provided route as if it was full URL.
     *
     * @return $this
     */
    public function useRouteAsUri(): self
    {
        $this->rawRouteUri = true;
        return $this;
    }

    /**
     * Sends the request, returns the response.
     *
     * @param \service\KitAPI\Interfaces\RequestSenderInterface $sender
     * @param array<int|string, mixed>|object                  $data
     *
     * @return array<int|string, mixed>|mixed
     * @throws \service\KitAPI\Exception\ApiException
     * @throws \service\KitAPI\Exception\ClientException
     * @throws \service\KitAPI\Exception\Client\HandlerException
     * @throws \service\KitAPI\Interfaces\ApiExceptionInterface
     */
    public function __invoke(RequestSenderInterface $sender, $data = [])
    {
        if (!is_array($data)) {
            throw new HandlerException(__CLASS__ . ' only supports array data');
        }

        return $sender->send($this->method, $this->rawRouteUri ? $this->route : $sender->route($this->route), $data);
    }
}