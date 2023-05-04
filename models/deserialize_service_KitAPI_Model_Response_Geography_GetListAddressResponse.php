<?php

function deserialize_service_KitAPI_Model_Response_Geography_GetListAddressResponse(array $jsonData): service\KitAPI\Model\Response\Geography\GetListAddressResponse
{
    
$model = new service\KitAPI\Model\Response\Geography\GetListAddressResponse();
if (isset($jsonData)) {
    $model->addreses = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->addreses[$index9] = new service\KitAPI\Model\Entity\Geography\Address();
if (isset($jsonData[$index9]['id'])) {
    $model->addreses[$index9]->id = $jsonData[$index9]['id'];

}
if (isset($jsonData[$index9]['geography_city_id'])) {
    $model->addreses[$index9]->geography_city_id = $jsonData[$index9]['geography_city_id'];

}
if (isset($jsonData[$index9]['lat'])) {
    $model->addreses[$index9]->lat = (float) $jsonData[$index9]['lat'];

}
if (isset($jsonData[$index9]['lon'])) {
    $model->addreses[$index9]->lon = (float) $jsonData[$index9]['lon'];

}
if (isset($jsonData[$index9]['address_code'])) {
    $model->addreses[$index9]->address_code = $jsonData[$index9]['address_code'];

}
if (isset($jsonData[$index9]['cityName'])) {
    $model->addreses[$index9]->cityName = $jsonData[$index9]['cityName'];

}
if (isset($jsonData[$index9]['phone'])) {
    $model->addreses[$index9]->phone = [];
foreach (array_keys($jsonData[$index9]['phone']) as $index27) {
    
$model->addreses[$index9]->phone[$index27] = new service\KitAPI\Model\Entity\Geography\Phone();
if (isset($jsonData[$index9]['phone'][$index27]['geography_city_id'])) {
    $model->addreses[$index9]->phone[$index27]->geography_city_id = $jsonData[$index9]['phone'][$index27]['geography_city_id'];

}
if (isset($jsonData[$index9]['phone'][$index27]['geography_address_id'])) {
    $model->addreses[$index9]->phone[$index27]->geography_address_id = $jsonData[$index9]['phone'][$index27]['geography_address_id'];

}
if (isset($jsonData[$index9]['phone'][$index27]['value'])) {
    $model->addreses[$index9]->phone[$index27]->value = $jsonData[$index9]['phone'][$index27]['value'];

}
if (isset($jsonData[$index9]['phone'][$index27]['comment'])) {
    $model->addreses[$index9]->phone[$index27]->comment = $jsonData[$index9]['phone'][$index27]['comment'];

}


}

}
if (isset($jsonData[$index9]['email'])) {
    $model->addreses[$index9]->email = [];
foreach (array_keys($jsonData[$index9]['email']) as $index27) {
    
$model->addreses[$index9]->email[$index27] = new service\KitAPI\Model\Entity\Geography\Email();
if (isset($jsonData[$index9]['email'][$index27]['geography_city_id'])) {
    $model->addreses[$index9]->email[$index27]->geography_city_id = $jsonData[$index9]['email'][$index27]['geography_city_id'];

}
if (isset($jsonData[$index9]['email'][$index27]['geography_address_id'])) {
    $model->addreses[$index9]->email[$index27]->geography_address_id = $jsonData[$index9]['email'][$index27]['geography_address_id'];

}
if (isset($jsonData[$index9]['email'][$index27]['value'])) {
    $model->addreses[$index9]->email[$index27]->value = $jsonData[$index9]['email'][$index27]['value'];

}
if (isset($jsonData[$index9]['email'][$index27]['comment'])) {
    $model->addreses[$index9]->email[$index27]->comment = $jsonData[$index9]['email'][$index27]['comment'];

}


}

}
if (isset($jsonData[$index9]['value'])) {
    $model->addreses[$index9]->value = $jsonData[$index9]['value'];

}


}

}



    return $model;
}
