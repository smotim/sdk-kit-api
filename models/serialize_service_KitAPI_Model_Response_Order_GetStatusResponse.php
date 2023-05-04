<?php

function serialize_service_KitAPI_Model_Response_Order_GetStatusResponse(service\KitAPI\Model\Response\Order\GetStatusResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->status) {
    $index10Array = $model->status;
if ($model->status instanceof \Doctrine\Common\Collections\Collection) {
    $index10Array = $model->status->toArray();
}
    
$jsonData["status"] = [];
foreach (array_keys($index10Array) as $index10) {
    $jsonData["status"][$index10] = [];
if (null !== $model->status[$index10]->date) {
    $jsonData["status"][$index10]["date"] = $model->status[$index10]->date;
}
if (null !== $model->status[$index10]->time) {
    $jsonData["status"][$index10]["time"] = $model->status[$index10]->time;
}
if (null !== $model->status[$index10]->name) {
    $jsonData["status"][$index10]["name"] = $model->status[$index10]->name;
}
if (null !== $model->status[$index10]->code) {
    $jsonData["status"][$index10]["code"] = $model->status[$index10]->code;
}

if (0 === \count($jsonData["status"][$index10])) {
    $jsonData["status"][$index10] = $emptyObject;
}

}

}
if (null !== $model->notice) {
    $jsonData["notice"] = $model->notice;
}
if (null !== $model->address) {
    $jsonData["address"] = $model->address;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->from) {
    $jsonData["from"] = $model->from;
}
if (null !== $model->to) {
    $jsonData["to"] = $model->to;
}
if (null !== $model->schedule) {
    $jsonData["schedule"] = $model->schedule;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
