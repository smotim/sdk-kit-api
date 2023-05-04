<?php

namespace service\KitAPI\Factory;

use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use service\KitAPI\Handler\Response\AccountNotFoundHandler;
use service\KitAPI\Handler\Response\ErrorResponseHandler;
use service\KitAPI\Handler\Response\FilesDownloadResponseHandler;
use service\KitAPI\Handler\Response\UnmarshalResponseHandler;
use service\KitAPI\Interfaces\ApiExceptionFactoryAwareInterface;
use service\KitAPI\Interfaces\EventDispatcherAwareInterface;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\SerializerAwareInterface;

class ResponsePipelineFactory
{

    /**
     * @param SerializerInterface $serializer
     * @param ApiExceptionFactory $exceptionFactory
     * @param EventDispatcherInterface|null $eventDispatcher
     * @param HandlerInterface ...$additionalHandlers
     * @return HandlerInterface
     */
    public static function createDefaultPipeline(
        SerializerInterface       $serializer,
        ApiExceptionFactory       $exceptionFactory,
        ?EventDispatcherInterface $eventDispatcher,
        HandlerInterface          ...$additionalHandlers
    ): HandlerInterface
    {
        $handler = new AccountNotFoundHandler($serializer, $exceptionFactory, $eventDispatcher);
        $nextHandler = $handler
            ->setNext(new ErrorResponseHandler($serializer, $exceptionFactory, $eventDispatcher))
//            ->setNext(new FilesDownloadResponseHandler($serializer, $exceptionFactory, $eventDispatcher))
            ->setNext(new UnmarshalResponseHandler($serializer, $exceptionFactory, $eventDispatcher));

        if (count($additionalHandlers) > 0) {
            foreach ($additionalHandlers as $additionalHandler) {
                if ($additionalHandler instanceof SerializerAwareInterface) {
                    $additionalHandler->setSerializer($serializer);
                }

                if ($additionalHandler instanceof ApiExceptionFactoryAwareInterface) {
                    $additionalHandler->setApiExceptionFactory($exceptionFactory);
                }

                if ($additionalHandler instanceof EventDispatcherAwareInterface) {
                    $additionalHandler->setEventDispatcher($eventDispatcher);
                }

                $nextHandler = $nextHandler->setNext($additionalHandler);
            }
        }
        return $handler;
    }
}