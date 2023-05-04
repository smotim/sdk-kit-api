<?php

function serialize_service_KitAPI_Model_Entity_Geography_City(service\KitAPI\Model\Entity\Geography\City $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->tdd_city_code) {
    $jsonData["tdd_city_code"] = $model->tdd_city_code;
}
if (null !== $model->sxgeo_city_id) {
    $jsonData["sxgeo_city_id"] = $model->sxgeo_city_id;
}
if (null !== $model->sxgeoCity) {
    $jsonData["sxgeoCity"] = [];
if (null !== $model->sxgeoCity->id) {
    $jsonData["sxgeoCity"]["id"] = $model->sxgeoCity->id;
}
if (null !== $model->sxgeoCity->lat) {
    $jsonData["sxgeoCity"]["lat"] = $model->sxgeoCity->lat;
}
if (null !== $model->sxgeoCity->lon) {
    $jsonData["sxgeoCity"]["lon"] = $model->sxgeoCity->lon;
}

if (0 === \count($jsonData["sxgeoCity"])) {
    $jsonData["sxgeoCity"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
