<?php

function deserialize_service_KitAPI_Model_Entity_Order_CalculateService(array $jsonData): service\KitAPI\Model\Entity\Order\CalculateService
{
    
$model = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['price'])) {
    $model->price = $jsonData['price'];

}



    return $model;
}
