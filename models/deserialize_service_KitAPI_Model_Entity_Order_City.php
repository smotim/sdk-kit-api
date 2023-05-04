<?php

function deserialize_service_KitAPI_Model_Entity_Order_City(array $jsonData): service\KitAPI\Model\Entity\Order\City
{
    
$model = new service\KitAPI\Model\Entity\Order\City();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}



    return $model;
}
