<?php

function deserialize_service_KitAPI_Model_Response_ErrorResponse(array $jsonData): service\KitAPI\Model\Response\ErrorResponse
{
    
$model = new service\KitAPI\Model\Response\ErrorResponse();
if (isset($jsonData)) {
    $model->errors = [];
foreach (array_keys($jsonData) as $index9) {
    $model->errors[$index9] = $jsonData[$index9];

}

}
if (isset($jsonData['string'])) {
    $model->errorMsg = $jsonData['string'];

}



    return $model;
}
