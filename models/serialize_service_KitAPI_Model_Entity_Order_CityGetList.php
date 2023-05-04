<?php

function serialize_service_KitAPI_Model_Entity_Order_CityGetList(service\KitAPI\Model\Entity\Order\CityGetList $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->country_code) {
    $jsonData["country_code"] = $model->country_code;
}
if (null !== $model->region_code) {
    $jsonData["region_code"] = $model->region_code;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->type) {
    $jsonData["type"] = $model->type;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
