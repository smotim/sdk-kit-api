<?php

function serialize_service_KitAPI_Model_Entity_Order_Currency(service\KitAPI\Model\Entity\Order\Currency $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->short_name) {
    $jsonData["short_name"] = $model->short_name;
}
if (null !== $model->country_code) {
    $jsonData["country_code"] = $model->country_code;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
