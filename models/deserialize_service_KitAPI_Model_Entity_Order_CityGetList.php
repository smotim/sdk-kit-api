<?php

function deserialize_service_KitAPI_Model_Entity_Order_CityGetList(array $jsonData): service\KitAPI\Model\Entity\Order\CityGetList
{
    
$model = new service\KitAPI\Model\Entity\Order\CityGetList();
if (isset($jsonData['country_code'])) {
    $model->country_code = $jsonData['country_code'];

}
if (isset($jsonData['region_code'])) {
    $model->region_code = $jsonData['region_code'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}



    return $model;
}
