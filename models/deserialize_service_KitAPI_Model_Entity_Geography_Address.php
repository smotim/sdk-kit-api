<?php

function deserialize_service_KitAPI_Model_Entity_Geography_Address(array $jsonData): service\KitAPI\Model\Entity\Geography\Address
{
    
$model = new service\KitAPI\Model\Entity\Geography\Address();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['geography_city_id'])) {
    $model->geography_city_id = $jsonData['geography_city_id'];

}
if (isset($jsonData['lat'])) {
    $model->lat = (float) $jsonData['lat'];

}
if (isset($jsonData['lon'])) {
    $model->lon = (float) $jsonData['lon'];

}
if (isset($jsonData['address_code'])) {
    $model->address_code = $jsonData['address_code'];

}
if (isset($jsonData['cityName'])) {
    $model->city_name = $jsonData['cityName'];

}
if (isset($jsonData['phone'])) {
    $model->phone = [];
foreach (array_keys($jsonData['phone']) as $index18) {
    
$model->phone[$index18] = new service\KitAPI\Model\Entity\Geography\Phone();
if (isset($jsonData['phone'][$index18]['geography_city_id'])) {
    $model->phone[$index18]->geography_city_id = $jsonData['phone'][$index18]['geography_city_id'];

}
if (isset($jsonData['phone'][$index18]['geography_address_id'])) {
    $model->phone[$index18]->geography_address_id = $jsonData['phone'][$index18]['geography_address_id'];

}
if (isset($jsonData['phone'][$index18]['value'])) {
    $model->phone[$index18]->value = $jsonData['phone'][$index18]['value'];

}
if (isset($jsonData['phone'][$index18]['comment'])) {
    $model->phone[$index18]->comment = $jsonData['phone'][$index18]['comment'];

}


}

}
if (isset($jsonData['email'])) {
    $model->email = [];
foreach (array_keys($jsonData['email']) as $index18) {
    
$model->email[$index18] = new service\KitAPI\Model\Entity\Geography\Email();
if (isset($jsonData['email'][$index18]['geography_city_id'])) {
    $model->email[$index18]->geography_city_id = $jsonData['email'][$index18]['geography_city_id'];

}
if (isset($jsonData['email'][$index18]['geography_address_id'])) {
    $model->email[$index18]->geography_address_id = $jsonData['email'][$index18]['geography_address_id'];

}
if (isset($jsonData['email'][$index18]['value'])) {
    $model->email[$index18]->value = $jsonData['email'][$index18]['value'];

}
if (isset($jsonData['email'][$index18]['comment'])) {
    $model->email[$index18]->comment = $jsonData['email'][$index18]['comment'];

}


}

}
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}



    return $model;
}
