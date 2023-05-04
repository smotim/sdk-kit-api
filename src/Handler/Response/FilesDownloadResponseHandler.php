<?php

namespace service\KitAPI\Handler\Response;

use service\KitAPI\Event\SuccessRequestEvent;
use service\KitAPI\Model\Response\FileDownloadResponse;
use service\KitAPI\Model\ResponseData;

class FilesDownloadResponseHandler extends AbstractResponseHandler
{
    protected function handleResponse(ResponseData $responseData)
    {
        if (!static::isFileRequest($responseData->request->getUri()->getPath())) {
            $this->next($responseData);

            return;
        }

        $responseData->responseModel = new FileDownloadResponse(
            static::fileNameFromDisposition($responseData->response->getHeader('Content-Disposition')),
            $responseData->response->getBody()
        );

        $this->dispatch(new SuccessRequestEvent(
            $responseData->baseUrl,
            $responseData->request,
            $responseData->response,
            $responseData->responseModel,
        ));
    }


    private static function isFileRequest(string $path): bool
    {
        $filePatterns = [
            '#^/1.0/order/document/get$#'
        ];

        foreach ($filePatterns as $pattern) {
            if (preg_match($pattern, $path)) {
                return true;
            }
        }
        return false;
    }

    private function fileNameFromDisposition(array $headerValues): string
    {
        $fileName = '';

        foreach ($headerValues as $value) {
            $value = trim($value);

            if (false === strpos($value, ';')) {
                continue;
            }

            $parts      = explode(';', $value, 2)[1];
            $parts      = explode(';', $parts);
            $attributes = [];

            foreach ($parts as $part) {
                if (false === strpos($part, '=')) {
                    continue;
                }

                [$key, $value]          = explode('=', $part, 2);
                $attributes[trim($key)] = trim($value);
            }

            if (empty($attributes['filename'])) {
                continue;
            }

            $fileName = trim($attributes['filename']);

            if (('' !== $fileName) && '"' === $fileName[0] && $fileName[strlen($fileName) - 1] === '"') {
                $fileName = substr($fileName, 1, -1);
            }
        }

        return $fileName;
    }

}