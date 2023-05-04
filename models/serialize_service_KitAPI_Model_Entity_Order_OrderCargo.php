<?php

function serialize_service_KitAPI_Model_Entity_Order_OrderCargo(service\KitAPI\Model\Entity\Order\OrderCargo $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->places) {
    $jsonData["places"] = $model->places;
}
if (null !== $model->weight) {
    $jsonData["weight"] = $model->weight;
}
if (null !== $model->weight_unit) {
    $jsonData["weight_unit"] = $model->weight_unit;
}
if (null !== $model->volume) {
    $jsonData["volume"] = $model->volume;
}
if (null !== $model->volume_unit) {
    $jsonData["volume_unit"] = $model->volume_unit;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
