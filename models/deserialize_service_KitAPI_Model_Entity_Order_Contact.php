<?php

function deserialize_service_KitAPI_Model_Entity_Order_Contact(array $jsonData): service\KitAPI\Model\Entity\Order\Contact
{
    
$model = new service\KitAPI\Model\Entity\Order\Contact();
if (isset($jsonData['locality'])) {
    $model->locality = $jsonData['locality'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['time_work'])) {
    $model->time_work = $jsonData['time_work'];

}



    return $model;
}
