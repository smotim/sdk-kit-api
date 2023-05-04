<?php

function deserialize_service_KitAPI_Model_Response_Profile_AddResponse(array $jsonData): service\KitAPI\Model\Response\Profile\AddResponse
{
    
$model = new service\KitAPI\Model\Response\Profile\AddResponse();
if (isset($jsonData['message'])) {
    $model->message = $jsonData['message'];

}
if (isset($jsonData['client_id'])) {
    $model->client_id = $jsonData['client_id'];

}
if (isset($jsonData['debitor_id'])) {
    $model->debitor_id = $jsonData['debitor_id'];

}



    return $model;
}
