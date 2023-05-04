<?php

function serialize_service_KitAPI_Model_Response_Tdd_SearchByNameResponse(service\KitAPI\Model\Response\Tdd\SearchByNameResponse $model, bool $useStdClass = true)
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
if (null !== $model->cities[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->cities[$index16]->name;
}
if (null !== $model->cities[$index16]->type) {
    $jsonData["hidden_array"][$index16]["type"] = $model->cities[$index16]->type;
}
if (null !== $model->cities[$index16]->code) {
    $jsonData["hidden_array"][$index16]["code"] = $model->cities[$index16]->code;
}
if (null !== $model->cities[$index16]->kladr) {
    $jsonData["hidden_array"][$index16]["kladr"] = $model->cities[$index16]->kladr;
}
if (null !== $model->cities[$index16]->region_code) {
    $jsonData["hidden_array"][$index16]["region_code"] = $model->cities[$index16]->region_code;
}
if (null !== $model->cities[$index16]->country_code) {
    $jsonData["hidden_array"][$index16]["country_code"] = $model->cities[$index16]->country_code;
}
if (null !== $model->cities[$index16]->required_pickup) {
    $jsonData["hidden_array"][$index16]["required_pickup"] = $model->cities[$index16]->required_pickup;
}
if (null !== $model->cities[$index16]->required_delivery) {
    $jsonData["hidden_array"][$index16]["required_delivery"] = $model->cities[$index16]->required_delivery;
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
