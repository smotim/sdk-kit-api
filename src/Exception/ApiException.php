<?php

namespace service\KitAPI\Exception;

use service\KitAPI\Interfaces\ApiExceptionInterface;
use service\KitAPI\Interfaces\ResponseInterface;
use service\KitAPI\Model\Response\ErrorResponse;

class ApiException extends \Exception implements ApiExceptionInterface
{

    /** @var ErrorResponse */
    private $response;

    /**
     * @param ResponseInterface $errorResponse
     * @param int $statusCode
     * @param \Throwable|null $previous
     */
    public function __construct(ResponseInterface $errorResponse, int $statusCode = 0, \Throwable $previous = null)
    {
        $this->response = $errorResponse instanceof ErrorResponse ? $errorResponse : new ErrorResponse();

        parent::__construct(static::getErrorMessage($this->response), $statusCode, $previous);
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->code;
    }

    /**
     * @return ErrorResponse
     */
    public function getErrorResponse(): ErrorResponse
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $base = sprintf(
            "API Exception in %s:%d\nResponse status code: %d\n",
            $this->getFile(),
            $this->getLine(),
            $this->getStatusCode()
        );

        $errorsList = $this->getErrorResponse()->errors;

        if ($errorsList !== null && count($errorsList) > 0) {
            $errors = [];

            $base .= json_encode($this->getErrorResponse()->errors, JSON_PRETTY_PRINT + JSON_UNESCAPED_UNICODE) . "\n";

//            foreach ($this->getErrorResponse()->errors as $key => $error) {
//                $errors[] = sprintf(' - %s: %s', $key, $error);
//            }
//
//            $base .= sprintf("Errors:\n%s\n", implode(PHP_EOL, $errors));
        } elseif ($this->getErrorResponse()->errorMsg) {
            $base .= $this->getErrorResponse()->errorMsg . "\n";
        }

        return trim($base . sprintf("Stacktrace: %s", $this->getTraceAsString()));
    }


    /**
     * @param ErrorResponse $errorResponse
     * @return string
     */
    private static function getErrorMessage(ErrorResponse $errorResponse): string
    {
        if (!empty($errorResponse->errorMsg)) {
            return $errorResponse->errorMsg;
        }

        if (!empty($errorResponse->errors)) {
            return (string) reset($errorResponse->errors);
        }

        return 'KIT API Error';
    }
}