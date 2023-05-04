<?php

function deserialize_service_KitAPI_Model_Response_Tdd_SearchByNameResponse(array $jsonData): service\KitAPI\Model\Response\Tdd\SearchByNameResponse
{
    
$model = new service\KitAPI\Model\Response\Tdd\SearchByNameResponse();
if (isset($jsonData)) {
    $model->cities = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->cities[$index9] = new service\KitAPI\Model\Entity\Tdd\City();
if (isset($jsonData[$index9]['name'])) {
    $model->cities[$index9]->name = $jsonData[$index9]['name'];

}
if (isset($jsonData[$index9]['type'])) {
    $model->cities[$index9]->type = $jsonData[$index9]['type'];

}
if (isset($jsonData[$index9]['code'])) {
    $model->cities[$index9]->code = $jsonData[$index9]['code'];

}
if (isset($jsonData[$index9]['kladr'])) {
    $model->cities[$index9]->kladr = $jsonData[$index9]['kladr'];

}
if (isset($jsonData[$index9]['region_code'])) {
    $model->cities[$index9]->region_code = $jsonData[$index9]['region_code'];

}
if (isset($jsonData[$index9]['country_code'])) {
    $model->cities[$index9]->country_code = $jsonData[$index9]['country_code'];

}
if (isset($jsonData[$index9]['required_pickup'])) {
    $model->cities[$index9]->required_pickup = $jsonData[$index9]['required_pickup'];

}
if (isset($jsonData[$index9]['required_delivery'])) {
    $model->cities[$index9]->required_delivery = $jsonData[$index9]['required_delivery'];

}


}

}



    return $model;
}
