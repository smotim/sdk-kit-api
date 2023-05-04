<?php

namespace service\KitAPI\Tests;

use Doctrine\Common\Annotations\PsrCachedReader;
use PHPUnit\Framework\TestCase;
use service\KitAPI\Factory\SimpleClientFactory;
use service\KitAPI\Handler\Request\RequestDataHandler;
use service\KitAPI\Interfaces\FormEncoderInterface;
use service\KitAPI\Interfaces\HandlerInterface;
use service\KitAPI\Interfaces\RequestTransformerInterface;
use service\KitAPI\Model\Request\Order\GetListOrderRequest;
use service\KitAPI\ResourceGroup\Profile;
use service\KitAPI\TestUtils\ReflectionUtils;
use service\KitAPI\TestUtils\TestConfig;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use RuntimeException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class ClientTest extends TestCase
{

    public function testFileCacheWorks(): void
    {
        $dir = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'retailcrm_test_metadata_cache_' . uniqid();
        $client = SimpleClientFactory::createWithCacheDir(
            TestConfig::getApiUrl(),
            TestConfig::getApiKey(),
            $dir
        );

        self::assertDirectoryExists($dir);

        $profile = ReflectionUtils::getProperty($client, 'profile');
        self::assertInstanceOf(Profile::class, $profile);

        $requestTransformer = ReflectionUtils::getProperty($profile, 'requestTransformer');
        self::assertInstanceOf(RequestTransformerInterface::class, $requestTransformer);

        $handler = ReflectionUtils::getProperty($requestTransformer, 'handler');
        self::assertInstanceOf(HandlerInterface::class, $handler);

        /** @var FormEncoderInterface $formEncoder */
        $formEncoder = ReflectionUtils::getProperty(static::findModelDataHandler($handler), 'formEncoder');
        self::assertInstanceOf(FormEncoderInterface::class, $formEncoder);

        $request = new GetListOrderRequest('2023-03-08 12:00:00', '2023-04-08 12:00:00');
        $request->limit = 10;
        $request->offset = 5;
        $request->profile_id = 3;


        $encoded = $formEncoder->encode($request);
        self::assertNotEmpty($encoded);

        $annotationReader = ReflectionUtils::getProperty($formEncoder, 'annotationReader');
        self::assertInstanceOf(PsrCachedReader::class, $annotationReader);

        $cache = ReflectionUtils::getProperty($annotationReader, 'cache');
        $cacheDir = ReflectionUtils::getProperty($cache, 'directory');

        self::assertInstanceOf(FilesystemAdapter::class, $cache);
        self::assertStringStartsWith($dir, $cacheDir);
        self::assertDirectoryExists($cacheDir);
        self::assertTrue(is_readable($cacheDir) && count(scandir($cacheDir)) > 2);

        static::recursiveRmdir($dir);
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

        throw new RuntimeException('RequestDataHandler is not present in the chain.');
    }

    /**
     * @param string $dir
     */
    private static function recursiveRmdir(string $dir): void
    {
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );

        foreach ($files as $fileInfo) {
            $todo = ($fileInfo->isDir() ? 'rmdir' : 'unlink');
            $todo($fileInfo->getRealPath());
        }

        rmdir($dir);
    }
}