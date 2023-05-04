<?php

function serialize_service_KitAPI_Model_Entity_Order_Status(service\KitAPI\Model\Entity\Order\Status $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->date) {
    $jsonData["date"] = $model->date;
}
if (null !== $model->time) {
    $jsonData["time"] = $model->time;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
