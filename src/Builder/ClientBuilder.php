<?php

namespace service\KitAPI\Builder;

use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\UriFactoryInterface;
use Psr\Log\LoggerInterface;
use service\KitAPI\Component\Transformer\RequestTransformer;
use service\KitAPI\Component\Transformer\ResponseTransformer;
use service\KitAPI\Exception\Client\BuilderException;
use service\KitAPI\Factory\ApiExceptionFactory;
use service\KitAPI\Factory\RequestPipelineFactory;
use service\KitAPI\Factory\ResponsePipelineFactory;
use service\KitAPI\Interfaces\ApiExceptionFactoryAwareInterface;
use service\KitAPI\Interfaces\BuilderInterface;
use service\KitAPI\Interfaces\EventDispatcherAwareInterface;
use service\KitAPI\Interfaces\FormEncoderInterface;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\PsrFactoriesAwareInterface;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Interfaces\ResponseTransformerInterface;
use service\KitAPI\Interfaces\SerializerAwareInterface;
use service\KitAPI\KitAPIClient;
use service\KitAPI\Traits\EventDispatcherAwareTrait;

class ClientBuilder implements BuilderInterface, EventDispatcherAwareInterface
{
    use EventDispatcherAwareTrait;

    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var HandlerInterface|null
     */
    private $authenticator;

    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var LoggerInterface|null
     */
    private $debugLogger;

    /** @var RequestTransformerInterface|null */
    private $requestTransformer;

    /** @var ResponseTransformerInterface|null */
    private $responseTransformer;

    /**
     * @var FormEncoderInterface|null
     */
    private $formEncoder;

    /** @var StreamFactoryInterface|null */
    private $streamFactory;

    /** @var RequestFactoryInterface|null */
    private $requestFactory;

    /** @var \Psr\Http\Message\UriFactoryInterface|null */
    private $uriFactory;

    /** @var ApiExceptionFactory|null */
    private $apiExceptionFactory;

    /** @var HandlerInterface[] */
    private $requestHandlers = [];

    /** @var HandlerInterface[] */
    private $responseHandlers = [];

    /**
     * @param string $apiUrl
     * @return ClientBuilder
     */
    public function setApiUrl(string $apiUrl): ClientBuilder
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @param HandlerInterface|null $authenticator
     * @return ClientBuilder
     */
    public function setAuthenticatorHandler(?HandlerInterface $authenticator): ClientBuilder
    {
        $this->authenticator = $authenticator;
        return $this;
    }

    /**
     * @param ClientInterface|null $httpClient
     * @return ClientBuilder
     */
    public function setHttpClient(?ClientInterface $httpClient): ClientBuilder
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @param LoggerInterface|null $debugLogger
     * @return ClientBuilder
     */
    public function setDebugLogger(?LoggerInterface $debugLogger): ClientBuilder
    {
        $this->debugLogger = $debugLogger;
        return $this;
    }

    public function setRequestTransformer(?RequestTransformerInterface $requestTransformer): ClientBuilder
    {
        $this->requestTransformer = $requestTransformer;
        return $this;
    }

    /**
     * @param ResponseTransformerInterface|null $responseTransformer
     * @return ClientBuilder
     */
    public function setResponseTransformer(?ResponseTransformerInterface $responseTransformer): ClientBuilder
    {
        $this->responseTransformer = $responseTransformer;
        return $this;
    }

    /**
     * @param FormEncoderInterface $formEncoder
     * @return ClientBuilder
     */
    public function setFormEncoder(FormEncoderInterface $formEncoder): ClientBuilder
    {
        $this->formEncoder = $formEncoder;
        return $this;
    }

    /**
     * @param StreamFactoryInterface|null $streamFactory
     * @return ClientBuilder
     */
    public function setStreamFactory(?StreamFactoryInterface $streamFactory): ClientBuilder
    {
        $this->streamFactory = $streamFactory;
        return $this;
    }

    /**
     * @param RequestFactoryInterface|null $requestFactory
     * @return ClientBuilder
     */
    public function setRequestFactory(?RequestFactoryInterface $requestFactory): ClientBuilder
    {
        $this->requestFactory = $requestFactory;
        return $this;
    }

    /**
     * @param UriFactoryInterface|null $uriFactory
     * @return ClientBuilder
     */
    public function setUriFactory(?UriFactoryInterface $uriFactory): ClientBuilder
    {
        $this->uriFactory = $uriFactory;
        return $this;
    }

    /**
     * @param HandlerInterface $handler
     * @return ClientBuilder
     */
    public function appendRequestHandler(HandlerInterface $handler): ClientBuilder
    {
        $this->requestHandlers[] = $handler;
        return $this;
    }

    /**
     * @param HandlerInterface $handler
     * @return ClientBuilder
     */
    public function appendResponseHandler(HandlerInterface $handler): ClientBuilder
    {
        $this->responseHandlers[] = $handler;
        return $this;
    }

    /**
     * @param HandlerInterface[] $handlers
     * @return ClientBuilder
     */
    public function appendRequestHandlers(array $handlers): ClientBuilder
    {
        foreach ($handlers as $handler) {
            $this->appendRequestHandler($handler);
        }
        return $this;
    }

    /**
     * @param HandlerInterface[] $handlers
     * @return ClientBuilder
     */
    public function appendResponseHandlers(array $handlers): ClientBuilder
    {
        foreach ($handlers as $handler) {
            $this->appendResponseHandler($handler);
        }
        return $this;
    }

    /**
     * @return KitAPIClient
     * @throws BuilderException
     */
    public function build(): KitAPIClient
    {

        $this->validateBuilder();
        // тут нужно добавить функцию вызова валидации validateBuilder

        if ($this->authenticator !== null && $this->requestTransformer !== null && $this->requestTransformer->getHandler() !== null) {
            $this->requestTransformer->getHandler()->append($this->authenticator);
        }

        if ($this->requestTransformer === null) {
            $this->requestTransformer = $this->buildRequestTransformer();
        }

        if ($this->responseTransformer === null) {
            $this->responseTransformer = $this->buildResponseTransformer();
        }

        $this->appendAdditionalRequestHandlers();
        $this->appendAdditionalResponseHandlers();

        return new KitAPIClient(
            $this->apiUrl,
            $this->httpClient ?: Psr18ClientDiscovery::find(),
            $this->requestTransformer,
            $this->responseTransformer,
            $this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory(),
            $this->eventDispatcher,
            $this->debugLogger,
        );

    }

    /**
     * @return void
     * @throws BuilderException
     */
    private function validateBuilder(): void
    {
        if (empty($this->apiUrl)) {
            throw new BuilderException('apiUrl must not be empty', ['apiUrl']);
        }

        if (empty($this->authenticator) && empty($this->requestTransformer)) {
            throw new BuilderException(
                'Authenticator or RequestTransformer must be present',
                ['authenticator', 'requestTransformer']
            );
        }
    }


    /**
     * @return void
     * @throws BuilderException
     */
    private function appendAdditionalRequestHandlers(): void
    {
        if (
            $this->requestHandlers !== null &&
            $this->requestTransformer->getHandler() &&
            count($this->requestHandlers) > 0
        ) {
            foreach ($this->requestHandlers as $handler) {
                if ($handler instanceof PsrFactoriesAwareInterface) {
                    $handler->setRequestFactory($this->requestFactory ?: Psr17FactoryDiscovery::findRequestFactory());
                    $handler->setStreamFactory($this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory());
                    $handler->setUriFactory($this->uriFactory ?: Psr17FactoryDiscovery::findUriFactory());
                }
            }
            $this->requestTransformer->getHandler()->append(static::buildHandlersChain($this->requestHandlers));
        }
    }


    private function appendAdditionalResponseHandlers(): void
    {
        if (
            null !== $this->responseTransformer &&
            null !== $this->responseTransformer->getHandler() &&
            count($this->responseHandlers) > 0
        ) {
            foreach ($this->responseHandlers as $handler) {
                if ($handler instanceof SerializerAwareInterface && null !== $this->formEncoder) {
                    $handler->setSerializer($this->formEncoder->getSerializer());
                }

                if ($handler instanceof ApiExceptionFactoryAwareInterface && null !== $this->apiExceptionFactory) {
                    $handler->setApiExceptionFactory($this->apiExceptionFactory);
                }

                if ($handler instanceof EventDispatcherAwareInterface) {
                    $handler->setEventDispatcher($this->eventDispatcher);
                }
            }
            $this->responseTransformer->getHandler()->append(static::buildHandlersChain($this->requestHandlers));
        }
    }

    /**
     * @return RequestTransformer
     */
    public function buildRequestTransformer(): RequestTransformer
    {
        return new RequestTransformer(
            RequestPipelineFactory::createDefaultPipeline(
                $this->formEncoder,
                $this->uriFactory ?: Psr17FactoryDiscovery::findUriFactory(),
                $this->requestFactory ?: Psr17FactoryDiscovery::findRequestFactory(),
                $this->streamFactory ?: Psr17FactoryDiscovery::findStreamFactory(),
                $this->authenticator,
            )
        );
    }

    /**
     * @return ResponseTransformer
     * @throws BuilderException
     */
    public function buildResponseTransformer(): ResponseTransformer
    {
        if ($this->formEncoder === null) {
            throw new BuilderException(
                "You must provide a FormEncoder instance in order to delegate " .
                "ResponseTransformer instantiation to the ClientBuilder."
            );
        }

        if ($this->apiExceptionFactory === null) {
            $this->apiExceptionFactory = new ApiExceptionFactory();
        }

        return new ResponseTransformer(
            ResponsePipelineFactory::createDefaultPipeline(
                $this->formEncoder->getSerializer(),
                $this->apiExceptionFactory,
                $this->eventDispatcher
            )
        );
    }

    /**
     * @param array $handlers
     * @return HandlerInterface
     * @throws BuilderException
     */
    private static function buildHandlersChain(array $handlers): HandlerInterface
    {
        if (empty($handlers)) {
            throw new BuilderException('Supplied handlers chain must contain at least one handler');
        }

        if (count($handlers) === 1) {
            return $handlers[0];
        }

        for ($i = 0, $iMax = count($handlers) - 1; $i < $iMax; $i++) {
            $handlers[$i]->setNext($handlers[$i + 1]);
        }

        return $handlers[0];
    }

}