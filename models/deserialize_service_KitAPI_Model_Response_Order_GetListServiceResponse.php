<?php

function deserialize_service_KitAPI_Model_Response_Order_GetListServiceResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetListServiceResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetListServiceResponse();
if (isset($jsonData)) {
    $model->services = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->services[$index9] = new service\KitAPI\Model\Entity\Order\Service();
if (isset($jsonData[$index9]['code'])) {
    $model->services[$index9]->code = $jsonData[$index9]['code'];

}
if (isset($jsonData[$index9]['name'])) {
    $model->services[$index9]->name = $jsonData[$index9]['name'];

}


}

}



    return $model;
}
