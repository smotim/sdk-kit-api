<?php

function deserialize_service_KitAPI_Model_Response_Geography_GetListCityResponse(array $jsonData): service\KitAPI\Model\Response\Geography\GetListCityResponse
{
    
$model = new service\KitAPI\Model\Response\Geography\GetListCityResponse();
if (isset($jsonData)) {
    $model->cities = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->cities[$index9] = new service\KitAPI\Model\Entity\Geography\City();
if (isset($jsonData[$index9]['id'])) {
    $model->cities[$index9]->id = $jsonData[$index9]['id'];

}
if (isset($jsonData[$index9]['tdd_city_code'])) {
    $model->cities[$index9]->tdd_city_code = $jsonData[$index9]['tdd_city_code'];

}
if (isset($jsonData[$index9]['sxgeo_city_id'])) {
    $model->cities[$index9]->sxgeo_city_id = $jsonData[$index9]['sxgeo_city_id'];

}
if (isset($jsonData[$index9]['sxgeoCity'])) {
    
$model->cities[$index9]->sxgeoCity = new service\KitAPI\Model\Entity\Geography\SxgeoCity();
if (isset($jsonData[$index9]['sxgeoCity']['id'])) {
    $model->cities[$index9]->sxgeoCity->id = $jsonData[$index9]['sxgeoCity']['id'];

}
if (isset($jsonData[$index9]['sxgeoCity']['lat'])) {
    $model->cities[$index9]->sxgeoCity->lat = $jsonData[$index9]['sxgeoCity']['lat'];

}
if (isset($jsonData[$index9]['sxgeoCity']['lon'])) {
    $model->cities[$index9]->sxgeoCity->lon = $jsonData[$index9]['sxgeoCity']['lon'];

}


}


}

}



    return $model;
}
