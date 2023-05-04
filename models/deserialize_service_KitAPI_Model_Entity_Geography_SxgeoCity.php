<?php

function deserialize_service_KitAPI_Model_Entity_Geography_SxgeoCity(array $jsonData): service\KitAPI\Model\Entity\Geography\SxgeoCity
{
    
$model = new service\KitAPI\Model\Entity\Geography\SxgeoCity();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['lat'])) {
    $model->lat = $jsonData['lat'];

}
if (isset($jsonData['lon'])) {
    $model->lon = $jsonData['lon'];

}



    return $model;
}
