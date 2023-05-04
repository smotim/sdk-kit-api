<?php

namespace service\KitAPI\Handler\Response;

use Psr\Http\Message\ResponseInterface;
use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Event\FailureRequestEvent;
use service\KitAPI\Model\Response\ErrorResponse;
use service\KitAPI\Model\ResponseData;

class AccountNotFoundHandler extends AbstractResponseHandler
{

    /**
     * @param ResponseData $responseData
     * @return mixed|null
     * @throws \Exception
     */
    protected function handleResponse(ResponseData $responseData)
    {
        if (
            $responseData->response->getStatusCode() === 405 &&
            static::isContentType($responseData->response, 'text/html') &&
            RequestMethod::GET !== strtoupper($responseData->request->getMethod())
        ) {
            $errorResponse = new ErrorResponse();
            $errorResponse->errorMsg = 'Account does not exist.';
            $errorResponse->errors = [];

            $event = new FailureRequestEvent(
                $responseData->baseUrl,
                $responseData->request,
                $responseData->response,
                new \Exception($errorResponse, $responseData->response->getStatusCode())
            );

            $this->dispatch($event);

            if (!$event->shouldSuppressThrow()) {
                throw $event->getException();
            }
        }

        return $this->next($responseData);
    }


    /**
     * @param ResponseInterface $response
     * @param string $mime
     * @return bool
     */
    private static function isContentType(ResponseInterface $response, string $mime): bool
    {
        $contentTypeHeader = $response->getHeader('Content-Type');

        foreach ($contentTypeHeader as $contentType) {
            if (stripos($contentType, $mime) !== false) {
                return true;
            }
        }
        return false;
    }


}