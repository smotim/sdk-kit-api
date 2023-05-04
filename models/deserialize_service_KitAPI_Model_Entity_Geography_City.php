<?php

function deserialize_service_KitAPI_Model_Entity_Geography_City(array $jsonData): service\KitAPI\Model\Entity\Geography\City
{
    
$model = new service\KitAPI\Model\Entity\Geography\City();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['tdd_city_code'])) {
    $model->tdd_city_code = $jsonData['tdd_city_code'];

}
if (isset($jsonData['sxgeo_city_id'])) {
    $model->sxgeo_city_id = $jsonData['sxgeo_city_id'];

}
if (isset($jsonData['sxgeoCity'])) {
    
$model->sxgeoCity = new service\KitAPI\Model\Entity\Geography\SxgeoCity();
if (isset($jsonData['sxgeoCity']['id'])) {
    $model->sxgeoCity->id = $jsonData['sxgeoCity']['id'];

}
if (isset($jsonData['sxgeoCity']['lat'])) {
    $model->sxgeoCity->lat = $jsonData['sxgeoCity']['lat'];

}
if (isset($jsonData['sxgeoCity']['lon'])) {
    $model->sxgeoCity->lon = $jsonData['sxgeoCity']['lon'];

}


}



    return $model;
}
