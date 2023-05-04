<?php

namespace service\KitAPI\Factory;

use service\KitAPI\Exception\Api\AccessDeniedException;
use service\KitAPI\Exception\Api\AccountDoesNotExistException;
use service\KitAPI\Exception\Api\ApiErrorException;
use service\KitAPI\Exception\Api\InvalidCredentialsException;
use service\KitAPI\Exception\Api\MissingCredentialsException;
use service\KitAPI\Exception\Api\MissingParameterException;
use service\KitAPI\Exception\Api\ValidationException;
use service\KitAPI\Exception\ApiException;
use service\KitAPI\Interfaces\ResponseInterface;
use service\KitAPI\Model\Response\ErrorResponse;

class ApiExceptionFactory
{

    /** @var string[]  */
    private static $errorTypesMapping = [
        'Произошла ошибка. Проверьте вводимые данные' => ValidationException::class,
        'Сервис временно недоступен.' => ValidationException::class,
        ];


    /**
     * @param ResponseInterface $errorResponse
     * @param int $statusCode
     * @param \Throwable|null $previous
     * @return ApiException
     */
    public function createException(
        ResponseInterface $errorResponse,
        int $statusCode = 0,
        \Throwable $previous = null
    ): ApiException
    {
        $response = $errorResponse instanceof ErrorResponse ? $errorResponse : new ErrorResponse();
        $response->errorMsg = $response->errorMsg ?? '';
        $response->errors = $response->errors ?? [];
        $errorFqn = self::getErrorClassByMessage($response->errorMsg ?? '');

        if (class_exists($errorFqn) && is_subclass_of($errorFqn, ApiException::class)) {
            return new $errorFqn($response, $statusCode, $previous);
        }

        return new ApiErrorException($response, $statusCode, $previous);
    }

    /**
     * @param string $message
     * @return string
     */
    private function getErrorClassByMessage(string $message): string
    {
        if (array_key_exists($message, self::$errorTypesMapping)) {
            return self::$errorTypesMapping[$message];
        }

        if (preg_match('/^Parameter \'[\w\]\[\_\-]+\' is missing$/', $message)) {
            return MissingParameterException::class;
        }

        return ApiErrorException::class;
    }
}