<?php

function deserialize_service_KitAPI_Model_Entity_Tdd_City(array $jsonData): service\KitAPI\Model\Entity\Tdd\City
{
    
$model = new service\KitAPI\Model\Entity\Tdd\City();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['type'])) {
    $model->type = $jsonData['type'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['kladr'])) {
    $model->kladr = $jsonData['kladr'];

}
if (isset($jsonData['region_code'])) {
    $model->region_code = $jsonData['region_code'];

}
if (isset($jsonData['country_code'])) {
    $model->country_code = $jsonData['country_code'];

}
if (isset($jsonData['required_pickup'])) {
    $model->required_pickup = $jsonData['required_pickup'];

}
if (isset($jsonData['required_delivery'])) {
    $model->required_delivery = $jsonData['required_delivery'];

}



    return $model;
}
