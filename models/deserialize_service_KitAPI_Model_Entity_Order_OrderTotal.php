<?php

function deserialize_service_KitAPI_Model_Entity_Order_OrderTotal(array $jsonData): service\KitAPI\Model\Entity\Order\OrderTotal
{
    
$model = new service\KitAPI\Model\Entity\Order\OrderTotal();
if (isset($jsonData['nds'])) {
    $model->nds = (float) $jsonData['nds'];

}
if (isset($jsonData['price'])) {
    $model->price = (float) $jsonData['price'];

}
if (isset($jsonData['route'])) {
    $model->route = $jsonData['route'];

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}
if (isset($jsonData['cargo_number'])) {
    $model->cargo_number = $jsonData['cargo_number'];

}



    return $model;
}
