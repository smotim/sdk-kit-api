<?php

namespace service\KitAPI\Handler\Response;

use Liip\Serializer\SerializerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use service\KitAPI\Component\Utils;
use service\KitAPI\Factory\ApiExceptionFactory;
use service\KitAPI\Handler\AbstractHandler;
use service\KitAPI\Interfaces\ApiExceptionFactoryAwareInterface;
use service\KitAPI\Interfaces\EventDispatcherAwareInterface;
use service\KitAPI\Interfaces\ResponseInterface;
use service\KitAPI\Interfaces\SerializerAwareInterface;
use service\KitAPI\Model\ResponseData;
use service\KitAPI\Traits\ApiExceptionFactoryAwareTrait;
use service\KitAPI\Traits\EventDispatcherAwareTrait;
use service\KitAPI\Traits\SerializerAwareTrait;

abstract class AbstractResponseHandler extends AbstractHandler implements
    SerializerAwareInterface,
    EventDispatcherAwareInterface,
    ApiExceptionFactoryAwareInterface
{
    use SerializerAwareTrait;
    use EventDispatcherAwareTrait;
    use ApiExceptionFactoryAwareTrait;

    /**
     * @param SerializerInterface $serializer
     * @param ApiExceptionFactory $exceptionFactory
     * @param EventDispatcherInterface|null $eventDispatcher
     */
    public function __construct(
        SerializerInterface       $serializer,
        ApiExceptionFactory       $exceptionFactory,
        ?EventDispatcherInterface $eventDispatcher = null
    )
    {
        $this->serializer = $serializer;
        $this->apiExceptionFactory = $exceptionFactory;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param $item
     * @return mixed|null
     */
    final public function handle($item)
    {
        if ($item instanceof ResponseData) {
            return $this->handleResponse($item);
        }

        return parent::handle($item);
    }

    /**
     * @param mixed $item
     * @return mixed|null
     */
    protected function next($item)
    {
        return parent::handle($item);
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param string $type
     * @return ResponseInterface
     * @throws \Exception
     */
    protected function unmarshalBody(\Psr\Http\Message\ResponseInterface $response, string $type): ResponseInterface
    {
        try {
            return $this->serializer->deserialize(Utils::getBodyContents($response->getBody()), $type, 'json');
        } catch (\Throwable $throwable) {
            static::throwUnmarshalError($throwable);
        }
        return new $type();
    }

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return array
     * @throws \Exception
     */
    protected function unmarshalBodyArray(\Psr\Http\Message\ResponseInterface $response): array
    {
        try {
            return json_decode(Utils::getBodyContents($response->getBody()), true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $exception) {
            static::throwUnmarshalError($exception);
        }
        return [];
    }

    /**
     * @param ResponseData $responseData
     * @return mixed
     */
    abstract protected function handleResponse(ResponseData $responseData);


    /**
     * @param \Throwable $throwable
     * @return void
     * @throws \service\KitAPI\Exception\Client\HandlerException
     */
    private static function throwUnmarshalError(\Throwable $throwable): void
    {
        throw new \service\KitAPI\Exception\Client\HandlerException(
            'Cannot deserialize body: ' . $throwable->getMessage(),
            0,
            $throwable
        );
    }

}