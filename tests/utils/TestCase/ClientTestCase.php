<?php

namespace service\KitAPI\TestUtils\TestCase;

use Doctrine\Common\Annotations\PsrCachedReader;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use service\KitAPI\Handler\Request\RequestDataHandler;
use service\KitAPI\Interfaces\FormEncoderInterface;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\KitAPIClient;
use service\KitAPI\ResourceGroup\Profile;
use service\KitAPI\TestUtils\ReflectionUtils;
use service\KitAPI\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class ClientTestCase extends TestCase
{

    /**
     * Validate client
     *
     * @param mixed  $client
     * @param string $readerClass
     * @param string $cacheClass
     * @param string $directory
     * @param bool   $loggerPresent
     *
     * @throws \ReflectionException
     */
    protected static function assertClientIsValid(
        $client,
        string $readerClass = PsrCachedReader::class,
        string $cacheClass = '',
        string $directory = '',
        bool $loggerPresent = false
    ): void {
        self::assertInstanceOf(KitAPIClient::class, $client);

        $profile = ReflectionUtils::getProperty($client, 'profile');

        self::assertInstanceOf(Profile::class, $profile);
        self::assertEquals(
            parse_url(TestConfig::getApiUrl(), PHP_URL_HOST),
            parse_url(ReflectionUtils::getProperty($profile, 'baseUrl'), PHP_URL_HOST)
        );

        $requestTransformer = ReflectionUtils::getProperty($profile, 'requestTransformer');
        self::assertInstanceOf(RequestTransformerInterface::class, $requestTransformer);

        $handler = ReflectionUtils::getProperty($requestTransformer, 'handler');
        self::assertInstanceOf(HandlerInterface::class, $handler);

        $modelDataHandler = static::findModelDataHandler($handler);
        $formEncoder = ReflectionUtils::getProperty($modelDataHandler, 'formEncoder');

        self::assertInstanceOf(FormEncoderInterface::class, $formEncoder);

        $annotationReader = ReflectionUtils::getProperty($formEncoder, 'annotationReader');
        self::assertInstanceOf($readerClass, $annotationReader);

        if ('' !== $cacheClass) {
            $cache = ReflectionUtils::getProperty($annotationReader, 'cache');
            self::assertInstanceOf($cacheClass, $cache);

            if ('' !== $directory) {
                self::assertInstanceOf(FilesystemAdapter::class, $cache);
                self::assertStringContainsString($directory, ReflectionUtils::getProperty($cache, 'directory'));
            }
        }

        if ($loggerPresent) {
            self::assertInstanceOf(LoggerInterface::class, ReflectionUtils::getProperty($profile, 'logger'));
        }
    }

    /**
     * @param HandlerInterface $handler
     *
     * @return RequestDataHandler
     */
    private static function findModelDataHandler(HandlerInterface $handler): RequestDataHandler
    {
        if ($handler instanceof RequestDataHandler) {
            return $handler;
        }

        while ($handler = $handler->getNext()) {
            if ($handler instanceof RequestDataHandler) {
                return $handler;
            }
        }

        throw new \RuntimeException('RequestDataHandler is not present in the chain.');
    }
}