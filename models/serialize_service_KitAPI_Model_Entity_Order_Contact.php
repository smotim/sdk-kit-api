<?php

function serialize_service_KitAPI_Model_Entity_Order_Contact(service\KitAPI\Model\Entity\Order\Contact $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->locality) {
    $jsonData["locality"] = $model->locality;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->time_work) {
    $jsonData["time_work"] = $model->time_work;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
