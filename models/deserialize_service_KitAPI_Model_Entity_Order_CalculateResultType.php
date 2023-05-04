<?php

function deserialize_service_KitAPI_Model_Entity_Order_CalculateResultType(array $jsonData): service\KitAPI\Model\Entity\Order\CalculateResultType
{
    
$model = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['cost'])) {
    $model->cost = $jsonData['cost'];

}
if (isset($jsonData['time'])) {
    $model->time = $jsonData['time'];

}
if (isset($jsonData['currency_code'])) {
    $model->currency_code = $jsonData['currency_code'];

}
if (isset($jsonData['detail'])) {
    $model->detail = [];
foreach (array_keys($jsonData['detail']) as $index19) {
    
$model->detail[$index19] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['detail'][$index19]['name'])) {
    $model->detail[$index19]->name = $jsonData['detail'][$index19]['name'];

}
if (isset($jsonData['detail'][$index19]['code'])) {
    $model->detail[$index19]->code = $jsonData['detail'][$index19]['code'];

}
if (isset($jsonData['detail'][$index19]['price'])) {
    $model->detail[$index19]->price = $jsonData['detail'][$index19]['price'];

}


}

}



    return $model;
}
