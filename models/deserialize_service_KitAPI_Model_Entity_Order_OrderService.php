<?php

function deserialize_service_KitAPI_Model_Entity_Order_OrderService(array $jsonData): service\KitAPI\Model\Entity\Order\OrderService
{
    
$model = new service\KitAPI\Model\Entity\Order\OrderService();
if (isset($jsonData['nds'])) {
    $model->nds = (float) $jsonData['nds'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['quantity'])) {
    $model->quantity = $jsonData['quantity'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['currency_code'])) {
    $model->currency_code = $jsonData['currency_code'];

}
if (isset($jsonData['payer_debitor'])) {
    $model->payer_debitor = $jsonData['payer_debitor'];

}
if (isset($jsonData['payer_short_name'])) {
    $model->payer_short_name = $jsonData['payer_short_name'];

}



    return $model;
}
