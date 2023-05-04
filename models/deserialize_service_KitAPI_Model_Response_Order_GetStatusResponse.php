<?php

function deserialize_service_KitAPI_Model_Response_Order_GetStatusResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetStatusResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetStatusResponse();
if (isset($jsonData['status'])) {
    $model->status = [];
foreach (array_keys($jsonData['status']) as $index19) {
    
$model->status[$index19] = new service\KitAPI\Model\Entity\Order\Status();
if (isset($jsonData['status'][$index19]['date'])) {
    $model->status[$index19]->date = $jsonData['status'][$index19]['date'];

}
if (isset($jsonData['status'][$index19]['time'])) {
    $model->status[$index19]->time = $jsonData['status'][$index19]['time'];

}
if (isset($jsonData['status'][$index19]['name'])) {
    $model->status[$index19]->name = $jsonData['status'][$index19]['name'];

}
if (isset($jsonData['status'][$index19]['code'])) {
    $model->status[$index19]->code = $jsonData['status'][$index19]['code'];

}


}

}
if (isset($jsonData['notice'])) {
    $model->notice = $jsonData['notice'];

}
if (isset($jsonData['address'])) {
    $model->address = $jsonData['address'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['from'])) {
    $model->from = $jsonData['from'];

}
if (isset($jsonData['to'])) {
    $model->to = $jsonData['to'];

}
if (isset($jsonData['schedule'])) {
    $model->schedule = $jsonData['schedule'];

}



    return $model;
}
