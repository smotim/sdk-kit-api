<?php

function deserialize_service_KitAPI_Model_Entity_Order_Status(array $jsonData): service\KitAPI\Model\Entity\Order\Status
{
    
$model = new service\KitAPI\Model\Entity\Order\Status();
if (isset($jsonData['date'])) {
    $model->date = $jsonData['date'];

}
if (isset($jsonData['time'])) {
    $model->time = $jsonData['time'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
