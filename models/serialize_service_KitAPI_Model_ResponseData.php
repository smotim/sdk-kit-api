<?php

function serialize_service_KitAPI_Model_ResponseData(service\KitAPI\Model\ResponseData $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->baseUrl) {
    $jsonData["base_url"] = $model->baseUrl;
}
if (null !== $model->request) {
    $jsonData["request"] = $model->request;
}
if (null !== $model->response) {
    $jsonData["response"] = $model->response;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->custom) {
    $jsonData["custom"] = $model->custom;
}
if (null !== $model->responseModel) {
    $jsonData["response_model"] = $model->responseModel;
}
if (null !== $model->responseArray) {
    $jsonData["response_array"] = $model->responseArray;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
