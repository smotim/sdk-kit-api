<?php

namespace service\KitAPI\Handler\Response;

use service\KitAPI\Component\Utils;
use service\KitAPI\Event\FailureRequestEvent;
use service\KitAPI\Interfaces\ResponseInterface;
use service\KitAPI\Model\Response\ErrorResponse;
use service\KitAPI\Model\ResponseData;
use Psr\Http\Message\ResponseInterface as PsrResponseInterface;

class ErrorResponseHandler extends AbstractResponseHandler
{
    // В дальнейшем от этого нужно уйти
    private static $messageErrors = [
        'Произошла ошибка. Проверьте вводимые данные',
        'Сервис временно недоступен.'
    ];

    private static $keysErrors = [
        'validate'
    ];

    /**
     * @param ResponseData $responseData
     * @return mixed|void
     * @throws \Exception
     */
    protected function handleResponse(ResponseData $responseData)
    {
        $contentResponse = Utils::getBodyContents($responseData->response->getBody());
        if ($responseData->response->getStatusCode() >= 400
            || $this->responseWithError($contentResponse)
        ) {
            $event = new FailureRequestEvent(
                $responseData->baseUrl,
                $responseData->request,
                $responseData->response,
                $this->apiExceptionFactory->createException(
                    $this->unmarshalBodyError($responseData->response, ErrorResponse::class),
                    $responseData->response->getStatusCode()
                )
            );

            $this->dispatch($event);

            if (!$event->shouldSuppressThrow()) {
                throw $event->getException();
            }
        }
        $this->next($responseData);
    }

    /**
     * @param PsrResponseInterface $response
     * @param string $type
     * @return ResponseInterface
     */
    public function unmarshalBodyError(PsrResponseInterface $response, string $type): ResponseInterface
    {
        /** @var ErrorResponse $responseData */
        $responseData = new $type();
        $contentResponse = json_decode(Utils::getBodyContents($response->getBody()), true);
        $typeDecodeData = gettype($contentResponse);
        if ($typeDecodeData === 'string') {
            $responseData->errorMsg = $contentResponse;
        } elseif ($typeDecodeData === 'array') {
            $responseData->errors = $contentResponse;
        }
        return $responseData;
    }

    /**
     * @param string $response
     * @return bool
     */
    private function responseWithError(string $response): bool
    {
        $response = json_decode($response, true);
        $type = gettype($response);
        if ($type === 'array') {
            foreach (static::$keysErrors as $key) {
                if (array_key_exists($key, $response)) {
                    return true;
                }
            }
        }
        if ($type === 'string' && in_array($response, static::$messageErrors)) {
            return true;
        }
        return false;
    }
}