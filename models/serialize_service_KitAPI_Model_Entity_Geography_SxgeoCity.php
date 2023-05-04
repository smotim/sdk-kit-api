<?php

function serialize_service_KitAPI_Model_Entity_Geography_SxgeoCity(service\KitAPI\Model\Entity\Geography\SxgeoCity $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->lat) {
    $jsonData["lat"] = $model->lat;
}
if (null !== $model->lon) {
    $jsonData["lon"] = $model->lon;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
