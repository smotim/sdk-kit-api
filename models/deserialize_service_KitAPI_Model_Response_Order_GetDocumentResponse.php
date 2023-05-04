<?php

function deserialize_service_KitAPI_Model_Response_Order_GetDocumentResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetDocumentResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetDocumentResponse();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['data'])) {
    $model->data = $jsonData['data'];

}



    return $model;
}
