<?php

namespace service\KitAPI\Handler\Request;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Handler\AbstractHandler;
use service\KitAPI\Interfaces\PsrFactoriesAwareInterface;
use service\KitAPI\Model\RequestData;
use service\KitAPI\Traits\PsrFactoriesAwareTrait;

class PsrRequestHandler extends AbstractHandler implements PsrFactoriesAwareInterface
{
    use PsrFactoriesAwareTrait;

    private static $methodsWithBody = [
        RequestMethod::POST,
        RequestMethod::PUT,
        RequestMethod::PATCH,
    ];

    /**
     * @param UriFactoryInterface $uriFactory
     * @param RequestFactoryInterface $requestFactory
     */
    public function __construct(UriFactoryInterface $uriFactory, RequestFactoryInterface $requestFactory)
    {
        $this->uriFactory = $uriFactory;
        $this->requestFactory = $requestFactory;
    }

    public function handle($item)
    {
        if ($item instanceof RequestData) {
            $item->method = strtoupper($item->method);

            try {
                $uri = $this->uriFactory->createUri($item->uri);
            } catch (\InvalidArgumentException $exception) {
                throw new \Exception("Cannon parse URI", 0, $exception);
            }

            $request = $this->requestFactory
                ->createRequest($item->method, $uri)
                ->withHeader('User-Agent', 'KIT PHP API Client')
                ->withHeader('Accept', 'application/json');

            if (in_array($item->method, static::$methodsWithBody)) {
                $request = $request->withHeader('Content-Type', 'application/json');
            }

            $item->request = $request;
        }

        return parent::handle($item);
    }
}