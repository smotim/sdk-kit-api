<?php

function serialize_service_KitAPI_Model_Entity_Tdd_City(service\KitAPI\Model\Entity\Tdd\City $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->kladr) {
    $jsonData["kladr"] = $model->kladr;
}
if (null !== $model->region_code) {
    $jsonData["region_code"] = $model->region_code;
}
if (null !== $model->country_code) {
    $jsonData["country_code"] = $model->country_code;
}
if (null !== $model->required_pickup) {
    $jsonData["required_pickup"] = $model->required_pickup;
}
if (null !== $model->required_delivery) {
    $jsonData["required_delivery"] = $model->required_delivery;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
