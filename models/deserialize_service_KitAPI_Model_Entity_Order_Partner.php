<?php

function deserialize_service_KitAPI_Model_Entity_Order_Partner(array $jsonData): service\KitAPI\Model\Entity\Order\Partner
{
    
$model = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData['debitor'])) {
    $model->debitor = $jsonData['debitor'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['short_name'])) {
    $model->short_name = $jsonData['short_name'];

}
if (isset($jsonData['inn'])) {
    $model->inn = $jsonData['inn'];

}
if (isset($jsonData['kpp'])) {
    $model->kpp = $jsonData['kpp'];

}
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['phone'])) {
    $model->phone = $jsonData['phone'];

}
if (isset($jsonData['actual_address'])) {
    $model->actual_address = $jsonData['actual_address'];

}
if (isset($jsonData['legal_address'])) {
    $model->legal_address = $jsonData['legal_address'];

}



    return $model;
}
