<?php

function serialize_service_KitAPI_Model_Entity_Order_TimeDelivery(service\KitAPI\Model\Entity\Order\TimeDelivery $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->date) {
    $jsonData["date"] = $model->date->format('Y:m:d');;
}
if (null !== $model->days) {
    $jsonData["days"] = $model->days;
}
if (null !== $model->time) {
    $jsonData["time"] = $model->time->format('H:i');;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->message) {
    $jsonData["message"] = $model->message;
}
if (null !== $model->timestamp_result) {
    $jsonData["timestamp_result"] = $model->timestamp_result;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
