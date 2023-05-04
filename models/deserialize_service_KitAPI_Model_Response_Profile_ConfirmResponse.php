<?php

function deserialize_service_KitAPI_Model_Response_Profile_ConfirmResponse(array $jsonData): service\KitAPI\Model\Response\Profile\ConfirmResponse
{
    
$model = new service\KitAPI\Model\Response\Profile\ConfirmResponse();
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}



    return $model;
}
