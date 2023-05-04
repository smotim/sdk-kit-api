<?php

function deserialize_service_KitAPI_Model_Entity_Order_OrderCargo(array $jsonData): service\KitAPI\Model\Entity\Order\OrderCargo
{
    
$model = new service\KitAPI\Model\Entity\Order\OrderCargo();
if (isset($jsonData['places'])) {
    $model->places = $jsonData['places'];

}
if (isset($jsonData['weight'])) {
    $model->weight = (float) $jsonData['weight'];

}
if (isset($jsonData['weight_unit'])) {
    $model->weight_unit = $jsonData['weight_unit'];

}
if (isset($jsonData['volume'])) {
    $model->volume = (float) $jsonData['volume'];

}
if (isset($jsonData['volume_unit'])) {
    $model->volume_unit = $jsonData['volume_unit'];

}



    return $model;
}
