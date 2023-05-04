<?php

namespace service\KitAPI\Handler\Response;

use service\KitAPI\Event\SuccessRequestEvent;
use service\KitAPI\Model\ResponseData;

class UnmarshalResponseHandler extends AbstractResponseHandler
{

    /**
     * @param ResponseData $responseData
     * @return mixed|void
     * @throws \Exception
     */
    protected function handleResponse(ResponseData $responseData)
    {
        if ($responseData->custom) {
            $responseData->responseArray = $this->unmarshalBodyArray($responseData->response);
        } else {
            $responseData->responseModel = $this->unmarshalBody($responseData->response, $responseData->type);
        }

        $this->dispatch(new SuccessRequestEvent(
            $responseData->baseUrl,
            $responseData->request,
            $responseData->response,
            $responseData->responseModel,
            $responseData->responseArray ?? [],
        ));
    }


}