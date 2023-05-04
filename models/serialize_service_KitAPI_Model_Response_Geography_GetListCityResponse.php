<?php

function serialize_service_KitAPI_Model_Response_Geography_GetListCityResponse(service\KitAPI\Model\Response\Geography\GetListCityResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->cities) {
    $index16Array = $model->cities;
if ($model->cities instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->cities->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->cities[$index16]->id) {
    $jsonData["hidden_array"][$index16]["id"] = $model->cities[$index16]->id;
}
if (null !== $model->cities[$index16]->tdd_city_code) {
    $jsonData["hidden_array"][$index16]["tdd_city_code"] = $model->cities[$index16]->tdd_city_code;
}
if (null !== $model->cities[$index16]->sxgeo_city_id) {
    $jsonData["hidden_array"][$index16]["sxgeo_city_id"] = $model->cities[$index16]->sxgeo_city_id;
}
if (null !== $model->cities[$index16]->sxgeoCity) {
    $jsonData["hidden_array"][$index16]["sxgeoCity"] = [];
if (null !== $model->cities[$index16]->sxgeoCity->id) {
    $jsonData["hidden_array"][$index16]["sxgeoCity"]["id"] = $model->cities[$index16]->sxgeoCity->id;
}
if (null !== $model->cities[$index16]->sxgeoCity->lat) {
    $jsonData["hidden_array"][$index16]["sxgeoCity"]["lat"] = $model->cities[$index16]->sxgeoCity->lat;
}
if (null !== $model->cities[$index16]->sxgeoCity->lon) {
    $jsonData["hidden_array"][$index16]["sxgeoCity"]["lon"] = $model->cities[$index16]->sxgeoCity->lon;
}

if (0 === \count($jsonData["hidden_array"][$index16]["sxgeoCity"])) {
    $jsonData["hidden_array"][$index16]["sxgeoCity"] = $emptyObject;
}

}

if (0 === \count($jsonData["hidden_array"][$index16])) {
    $jsonData["hidden_array"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
