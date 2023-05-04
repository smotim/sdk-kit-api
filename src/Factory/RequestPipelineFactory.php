<?php

namespace service\KitAPI\Factory;

use Http\Discovery\Psr17FactoryDiscovery;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use service\KitAPI\Handler\Request\PsrRequestHandler;
use service\KitAPI\Handler\Request\RequestDataHandler;
use service\KitAPI\Interfaces\FormEncoderInterface;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\PsrFactoriesAwareInterface;

class RequestPipelineFactory
{

    /**
     * @param FormEncoderInterface $formEncoder
     * @param UriFactoryInterface|null $uriFactory
     * @param RequestFactoryInterface|null $requestFactory
     * @param StreamFactoryInterface|null $streamFactory
     * @param HandlerInterface ...$additionalHandlers
     * @return HandlerInterface
     */
    public static function createDefaultPipeline(
        FormEncoderInterface     $formEncoder,
        ?UriFactoryInterface     $uriFactory,
        ?RequestFactoryInterface $requestFactory,
        ?StreamFactoryInterface  $streamFactory,
        HandlerInterface         ...$additionalHandlers
    ): HandlerInterface
    {
        $uriFactory = $uriFactory ?: Psr17FactoryDiscovery::findUriFactory();
        $requestFactory = $requestFactory ?: Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = $streamFactory ?: Psr17FactoryDiscovery::findStreamFactory();

        $handler = new PsrRequestHandler($uriFactory, $requestFactory);
        $nextHandler = $handler->setNext(new RequestDataHandler($formEncoder, $streamFactory));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                if ($additionalHandler instanceof PsrFactoriesAwareInterface) {
                    $additionalHandler->setRequestFactory($requestFactory);
                    $additionalHandler->setStreamFactory($streamFactory);
                    $additionalHandler->setUriFactory($uriFactory);
                }
                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }
        return $handler;
    }
}