<?php

function serialize_service_KitAPI_Model_Response_Order_TimeDeliveryResponse(service\KitAPI\Model\Response\Order\TimeDeliveryResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->timestamp_result) {
    $jsonData["timestamp_result"] = $model->timestamp_result;
}
if (null !== $model->date) {
    $jsonData["date"] = $model->date->format('Y-m-d');;
}
if (null !== $model->time) {
    $jsonData["time"] = $model->time->format('H:i');;
}
if (null !== $model->days) {
    $jsonData["days"] = $model->days;
}
if (null !== $model->message) {
    $jsonData["message"] = $model->message;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
