<?php

function serialize_service_KitAPI_Model_Entity_Order_Place(service\KitAPI\Model\Entity\Order\Place $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->height) {
    $jsonData["height"] = $model->height;
}
if (null !== $model->width) {
    $jsonData["width"] = $model->width;
}
if (null !== $model->length) {
    $jsonData["length"] = $model->length;
}
if (null !== $model->count_place) {
    $jsonData["count_place"] = $model->count_place;
}
if (null !== $model->weight) {
    $jsonData["weight"] = $model->weight;
}
if (null !== $model->volume) {
    $jsonData["volume"] = $model->volume;
}
if (null !== $model->service) {
    $index11Array = $model->service;
if ($model->service instanceof \Doctrine\Common\Collections\Collection) {
    $index11Array = $model->service->toArray();
}
    
$jsonData["service"] = [];
foreach (array_keys($index11Array) as $index11) {
    $jsonData["service"][$index11] = [];
if (null !== $model->service[$index11]->code) {
    $jsonData["service"][$index11]["code"] = $model->service[$index11]->code;
}

if (0 === \count($jsonData["service"][$index11])) {
    $jsonData["service"][$index11] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
