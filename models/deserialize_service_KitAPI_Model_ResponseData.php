<?php

function deserialize_service_KitAPI_Model_ResponseData(array $jsonData): service\KitAPI\Model\ResponseData
{
    
$model = new service\KitAPI\Model\ResponseData();
if (isset($jsonData['base_url'])) {
    $model->baseUrl = $jsonData['base_url'];

}
if (isset($jsonData['request'])) {
    $model->request = $jsonData['request'];

}
if (isset($jsonData['response'])) {
    $model->response = $jsonData['response'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['custom'])) {
    $model->custom = $jsonData['custom'];

}
if (isset($jsonData['response_model'])) {
    $model->responseModel = $jsonData['response_model'];

}
if (isset($jsonData['response_array'])) {
    $model->responseArray = $jsonData['response_array'];

}



    return $model;
}
