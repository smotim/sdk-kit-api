<?php

function deserialize_service_KitAPI_Model_Entity_Order_Currency(array $jsonData): service\KitAPI\Model\Entity\Order\Currency
{
    
$model = new service\KitAPI\Model\Entity\Order\Currency();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['short_name'])) {
    $model->short_name = $jsonData['short_name'];

}
if (isset($jsonData['country_code'])) {
    $model->country_code = $jsonData['country_code'];

}



    return $model;
}
