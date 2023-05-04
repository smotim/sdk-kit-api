<?php

function deserialize_service_KitAPI_Model_Entity_Order_TimeDelivery(array $jsonData): service\KitAPI\Model\Entity\Order\TimeDelivery
{
    
$model = new service\KitAPI\Model\Entity\Order\TimeDelivery();
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y:m:d', $jsonData['date']);

}
if (isset($jsonData['days'])) {
    $model->days = $jsonData['days'];

}
if (isset($jsonData['time'])) {
    $model->time = \DateTime::createFromFormat('H:i', $jsonData['time']);

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['message'])) {
    $model->message = $jsonData['message'];

}
if (isset($jsonData['timestamp_result'])) {
    $model->timestamp_result = $jsonData['timestamp_result'];

}



    return $model;
}
