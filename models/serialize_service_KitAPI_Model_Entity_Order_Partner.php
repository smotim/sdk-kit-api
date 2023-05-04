<?php

function serialize_service_KitAPI_Model_Entity_Order_Partner(service\KitAPI\Model\Entity\Order\Partner $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->debitor) {
    $jsonData["debitor"] = $model->debitor;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->short_name) {
    $jsonData["short_name"] = $model->short_name;
}
if (null !== $model->inn) {
    $jsonData["inn"] = $model->inn;
}
if (null !== $model->kpp) {
    $jsonData["kpp"] = $model->kpp;
}
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->phone) {
    $jsonData["phone"] = $model->phone;
}
if (null !== $model->actual_address) {
    $jsonData["actual_address"] = $model->actual_address;
}
if (null !== $model->legal_address) {
    $jsonData["legal_address"] = $model->legal_address;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
