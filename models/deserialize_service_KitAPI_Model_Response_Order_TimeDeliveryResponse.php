<?php

function deserialize_service_KitAPI_Model_Response_Order_TimeDeliveryResponse(array $jsonData): service\KitAPI\Model\Response\Order\TimeDeliveryResponse
{
    
$model = new service\KitAPI\Model\Response\Order\TimeDeliveryResponse();
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['timestamp_result'])) {
    $model->timestamp_result = $jsonData['timestamp_result'];

}
if (isset($jsonData['date'])) {
    $model->date = \DateTime::createFromFormat('Y-m-d', $jsonData['date']);

}
if (isset($jsonData['time'])) {
    $model->time = \DateTime::createFromFormat('H:i', $jsonData['time']);

}
if (isset($jsonData['days'])) {
    $model->days = $jsonData['days'];

}
if (isset($jsonData['message'])) {
    $model->message = $jsonData['message'];

}



    return $model;
}
