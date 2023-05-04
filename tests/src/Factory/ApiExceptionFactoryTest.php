<?php

namespace service\KitAPI\Tests\Factory;

use service\KitAPI\Exception\Api\AccountDoesNotExistException;
use service\KitAPI\Exception\Api\ApiErrorException;
use service\KitAPI\Exception\Api\MissingCredentialsException;
use service\KitAPI\Exception\Api\MissingParameterException;
use service\KitAPI\Exception\Api\ValidationException;
use service\KitAPI\Factory\ApiExceptionFactory;
use service\KitAPI\Model\Response\ErrorResponse;
use service\KitAPI\Model\Response\SuccessResponse;
use service\KitAPI\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class ApiExceptionFactoryTest extends AbstractApiResourceGroupTestCase
{
    /** @var ApiExceptionFactory */
    private $factory;

    protected function setUp(): void
    {
        $this->factory = new ApiExceptionFactory();
    }

    public function testWrongOrEmptyResponse(): void
    {
        $exception = $this->factory->createException(new SuccessResponse(), 200);

        self::assertInstanceOf(ApiErrorException::class, $exception);
        self::assertEquals(200, $exception->getCode());
        self::assertEquals(200, $exception->getStatusCode());
        self::assertEquals('KIT API Error', $exception->getMessage());
        self::assertEmpty($exception->getErrorResponse()->errors);
        self::assertEmpty($exception->getErrorResponse()->errorMsg);
    }

    public function testNormalResponse(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = 'Произошла ошибка. Проверьте вводимые данные';

        $exception = $this->factory->createException($response, 200);

        self::assertInstanceOf(ValidationException::class, $exception);
        self::assertEquals(200, $exception->getCode());
        self::assertEquals(200, $exception->getStatusCode());
        self::assertEquals($response->errorMsg, $exception->getMessage());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
        self::assertEmpty($exception->getErrorResponse()->errors);
    }

    public function testEmptyErrorMsgResponse(): void
    {
        $response = new ErrorResponse();
        $response->errors = [
            'first',
            'second'
        ];

        $exception = $this->factory->createException($response, 400);

        self::assertInstanceOf(ApiErrorException::class, $exception);
        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals('first', $exception->getMessage());
        self::assertEmpty($exception->getErrorResponse()->errorMsg);
        self::assertCount(2, $exception->getErrorResponse()->errors);
    }

    public function testMissingParameter(): void
    {
        $response = new ErrorResponse();
        $response->errorMsg = "Parameter 'integrationModule' is missing";

        $exception = $this->factory->createException($response, 400);

        self::assertInstanceOf(MissingParameterException::class, $exception);
        self::assertEquals(400, $exception->getCode());
        self::assertEquals(400, $exception->getStatusCode());
        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
    }

//    public function testMissingApiKey(): void
//    {
//        $response = new ErrorResponse();
//        $response->errorMsg = "\"apiKey\" is missing.";
//
//        $exception = $this->factory->createException($response, 400);
//
//        self::assertInstanceOf(MissingCredentialsException::class, $exception);
//        self::assertEquals(400, $exception->getCode());
//        self::assertEquals(400, $exception->getStatusCode());
//        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
//    }
//
//    public function testValidationError(): void
//    {
//        $response = new ErrorResponse();
//        $response->errorMsg = "Errors in the entity format";
//        $response->errors = ["code" => "Code prefix must match integrationCode"];
//
//        $exception = $this->factory->createException($response, 400);
//
//        self::assertInstanceOf(ValidationException::class, $exception);
//        self::assertEquals(400, $exception->getCode());
//        self::assertEquals(400, $exception->getStatusCode());
//        self::assertEquals($response->errorMsg, $exception->getErrorResponse()->errorMsg);
//        self::assertStringContainsString($exception->getMessage(), (string) $exception);
//    }

}