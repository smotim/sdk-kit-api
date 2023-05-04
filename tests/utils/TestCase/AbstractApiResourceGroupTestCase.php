<?php

namespace service\KitAPI\TestUtils\TestCase;

use Closure;
use DateTime;
use Http\Discovery\Psr17FactoryDiscovery;
use Liip\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use service\KitAPI\Builder\FormEncoderBuilder;
use service\KitAPI\Component\Utils;
use service\KitAPI\Exception\Client\BuilderException;
use service\KitAPI\Factory\SerializerFactory;
use service\KitAPI\Interfaces\FormEncoderInterface;
use service\KitAPI\TestUtils\PockBuilder;
use service\KitAPI\TestUtils\TestConfig;
use service\KitAPI\Interfaces\RequestInterface as KitRequestInterface;
use service\KitAPI\Interfaces\ResponseInterface as KitResponseInterface;
use RuntimeException;

class AbstractApiResourceGroupTestCase extends TestCase
{

    /** @var SerializerInterface */
    protected static $serializer;

    /** @var FormEncoderInterface */
    protected static $formEncoder;

    /** @var ResponseFactoryInterface */
    protected static $responseFactory;

    /** @var StreamFactoryInterface */
    protected static $streamFactory;

    /**
     * @param string $pathFragment
     *
     * @return PockBuilder
     */
    protected static function createApiMockBuilder(string $pathFragment): PockBuilder
    {
        $testDataPath = parse_url(TestConfig::getApiUrl(), PHP_URL_PATH);

        return (new PockBuilder())
            ->matchScheme((string) parse_url(TestConfig::getApiUrl(), PHP_URL_SCHEME))
            ->matchHost((string) parse_url(TestConfig::getApiUrl(), PHP_URL_HOST))
            ->matchHeader('Authorization', 'Bearer ' . TestConfig::getApiKey())
            ->matchPath($pathFragment);
    }

    /**
     * @param int                                    $code
     * @param object|mixed[]|string $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     * @throws \InvalidArgumentException
     */
    protected static function responseJson(int $code, $response): ResponseInterface
    {
        $data = null;

        switch (gettype($response)) {
            case 'string':
                $data = static::getStreamFactory()->createStream((string) $response);
                break;
            case 'array':
            case 'object':
                $data = static::getStreamFactory()->createStream(static::getSerializer()->serialize($response, 'json'));
                break;
            default:
                throw new \InvalidArgumentException(sprintf(
                    'Expected string, object, or array, got "%s"',
                    gettype($response)
                ));
        }

        return static::getResponseFactory()->createResponse($code)
            ->withHeader('Content-Type', 'application/json')
            ->withBody($data);
    }

    /**
     * @param string $path
     * @param bool   $header
     *
     * @return PockBuilder
     */
    protected static function createUnversionedApiMockBuilder(string $path = '', bool $header = true): PockBuilder
    {
        $testDataPath = parse_url(TestConfig::getApiUrl(), PHP_URL_PATH);

        $builder = (new PockBuilder())
            ->matchScheme((string) parse_url(TestConfig::getApiUrl(), PHP_URL_SCHEME))
            ->matchHost((string) parse_url(TestConfig::getApiUrl(), PHP_URL_HOST))
            ->matchPath($path);

        if ($header) {
            $builder->matchHeader('Authorization', 'Bearer ' . TestConfig::getApiKey());
        } else {
            $builder->matchQuery(['token' => TestConfig::getApiKey()]);
        }

//        print_r($builder->getClient()->sendRequest(''));
        return $builder;
    }

    /**
     * @param KitRequestInterface $request
     *
     * @return string
     * @throws \ReflectionException
     */
    public static function encodeForm(KitRequestInterface $request): string
    {
        return static::getFormEncoder()->encode($request);
    }

    /**
     * @param KitRequestInterface $request
     *
     * @return mixed[]
     * @throws \ReflectionException
     */
    public static function encodeFormArray(KitRequestInterface $request): array
    {
        return static::clearArray(static::getFormEncoder()->encodeArray($request));
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    public static function serialize($value): string
    {
        return static::getSerializer()->serialize($value, 'json');
    }

    /**
     * @param mixed $value
     *
     * @return mixed[]
     */
    public static function serializeArray($value): array
    {
        return static::getSerializer()->toArray($value);
    }

    /**
     * Removes all empty fields from arrays, works for nested arrays
     *
     * @param mixed[] $arr
     *
     * @return mixed
     */
    public static function clearArray(array $arr)
    {
        if (!is_array($arr)) {
            return $arr;
        }

        $result = [];
        $i = 0;

        foreach ($arr as $index => $node) {
            if (null === $node) {
                continue;
            }

            if (is_array($node)) {
                if ($index == 'hidden_array') {
                    $index = $i;
                    $result[] = static::clearArray($node);
                } else {
                    $result[$index] = static::clearArray($result);
                }
            } else {
                $result[$index] = trim($node);
            }

//            $result[$index] = is_array($node) === true ? static::clearArray($node) : trim($node);

            if (
                '' === $result[$index] ||
                (is_array($result[$index]) && count($result[$index]) < 1)
            ) {
                unset($result[$index]);
            }
            $i++;
        }

        return $result;
    }

    /**
     * @param string                                      $expectedJson
     * @param \service\KitAPI\Interfaces\ResponseInterface $response
     * @param bool                                        $stripNilValues
     *
     * @throws \JsonException
     */
    protected static function assertModelEqualsToResponse(
        string $expectedJson,
        KitResponseInterface $response,
        bool $stripNilValues = false
    ): void {
        $expected = json_decode($expectedJson, true, 512, JSON_THROW_ON_ERROR);
        $actual   = self::getSerializer()->toArray($response);

        if ($stripNilValues) {
            $expected = static::clearArray($expected);
            $actual   = static::clearArray($actual);
        }

        self::assertEquals($expected, $actual);
    }

    /**
     * @param string                                      $expectedJson
     * @param KitResponseInterface $response
     * @param \Closure                                    $callback
     *
     * @throws \JsonException
     */
    protected static function assertModelsCallback(
        string $expectedJson,
        KitResponseInterface $response,
        Closure $callback
    ): void {
        $expected = json_decode($expectedJson, true, 512, JSON_THROW_ON_ERROR);
        $actual   = self::getSerializer()->toArray($response);

        $callback($expected, $actual);
    }

    /**
     * @param string $text
     *
     * @return string
     */
    private static function addTrailingSlash(string $text): string
    {
        if ('' === $text) {
            return '';
        }

        if ('/' !== $text[strlen($text) - 1]) {
            return $text . '/';
        }

        return $text;
    }

    /**
     * @return \Psr\Http\Message\StreamFactoryInterface
     */
    protected static function getStreamFactory(): StreamFactoryInterface
    {
        if (null === static::$streamFactory) {
            static::$streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        return static::$streamFactory;
    }

    /**
     * @return \Psr\Http\Message\ResponseFactoryInterface
     */
    protected static function getResponseFactory(): ResponseFactoryInterface
    {
        if (null === static::$responseFactory) {
            static::$responseFactory = Psr17FactoryDiscovery::findResponseFactory();
        }

        return static::$responseFactory;
    }

    /**
     * @return \Liip\Serializer\SerializerInterface
     */
    protected static function getSerializer(): SerializerInterface
    {
        if (null === static::$serializer) {
            static::$serializer = SerializerFactory::create();
        }

        return static::$serializer;
    }

    /**
     * @param string $format
     * @param string $dateTime
     *
     * @return \DateTime
     */
    protected static function dateTimeFromFormat(string $format, string $dateTime): DateTime
    {
        $result = DateTime::createFromFormat($format, $dateTime);

        if (!($result instanceof DateTime)) {
            throw new RuntimeException(sprintf(
                'Cannot create DateTime with data "%s" with format "%s"',
                $format,
                $dateTime
            ));
        }

        return $result;
    }

    /**
     * @return FormEncoderInterface
     * @throws BuilderException
     */
    private static function getFormEncoder(): FormEncoderInterface
    {
        if (null === static::$formEncoder) {
            static::$formEncoder = (new FormEncoderBuilder())->build();
        }

        return static::$formEncoder;
    }
}