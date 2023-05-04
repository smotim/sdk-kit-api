<?php

namespace service\KitAPI\Tests\Builder;

use League\Event\EventDispatcher;
use Nyholm\Psr7\Factory\Psr17Factory;
use Http\Client\Curl\Client as CurlClient;
use PHPUnit\Framework\TestCase;
use service\KitAPI\Builder\ClientBuilder;
use service\KitAPI\Builder\FormEncoderBuilder;
use service\KitAPI\Component\Transformer\RequestTransformer;
use service\KitAPI\Component\Transformer\ResponseTransformer;
use service\KitAPI\Exception\Client\BuilderException;
use service\KitAPI\Factory\ApiExceptionFactory;
use service\KitAPI\Factory\RequestPipelineFactory;
use service\KitAPI\Factory\ResponsePipelineFactory;
use service\KitAPI\Handler\Request\HeaderAuthenticatorHandler;
use service\KitAPI\ResourceGroup\Profile;
use service\KitAPI\TestUtils\ReflectionUtils;
use service\KitAPI\TestUtils\TestConfig;

class ClientBuilderTest extends TestCase
{
    public function testNoData(): void
    {
        $this->expectException(BuilderException::class);
        $this->expectExceptionMessage('apiUrl must not be empty');
        (new ClientBuilder())->build();
    }

    public function testNoDataCheckFields(): void
    {
        try {
            (new ClientBuilder())->build();
        } catch (BuilderException $exception) {
            self::assertEquals(['apiUrl'], $exception->getInvalidArgument());
        }
    }

    public function testNoRequestTransformer(): void
    {
        $this->expectException(BuilderException::class);
        $this->expectExceptionMessage('Authenticator or RequestTransformer must be present');
        (new ClientBuilder())
            ->setApiUrl('https://capi.tk-kit.com')
            ->build();
    }

    public function testBuild(): void
    {
        $eventDispatcher = new EventDispatcher();
        $psr17Factory = new Psr17Factory();
        $httpClient = new CurlClient();

        $builder = new ClientBuilder();
        $formEncoder = (new FormEncoderBuilder())->setCacheDir('cache')->build();
        $requestTransformer = new RequestTransformer(RequestPipelineFactory::createDefaultPipeline(
            $formEncoder,
            $psr17Factory, // PSR-17 UriFactoryInterface
            $psr17Factory, // PSR-17 RequestFactoryInterface
            $psr17Factory  // PSR-17 StreamFactoryInterface
        ));
        $responseTransformer = new ResponseTransformer(ResponsePipelineFactory::createDefaultPipeline(
            $formEncoder->getSerializer(),
            new ApiExceptionFactory(),
            $eventDispatcher
        ));
        $client = $builder->setApiUrl(TestConfig::getApiUrl())
            ->setAuthenticatorHandler(new HeaderAuthenticatorHandler(TestConfig::getApiKey()))
            ->setFormEncoder($formEncoder)
            ->setHttpClient($httpClient)
            ->setRequestTransformer($requestTransformer)
            ->setResponseTransformer($responseTransformer)
            ->build();

        /** @var Profile $api */
        $api = ReflectionUtils::getProperty($client, 'profile');

        self::assertStringContainsString(TestConfig::getApiUrl(), ReflectionUtils::getProperty($api, 'baseUrl'));
        self::assertEquals($httpClient, ReflectionUtils::getProperty($api, 'httpClient'));
        self::assertEquals($requestTransformer, ReflectionUtils::getProperty($api, 'requestTransformer'));
        self::assertEquals($responseTransformer, ReflectionUtils::getProperty($api, 'responseTransformer'));
    }
}