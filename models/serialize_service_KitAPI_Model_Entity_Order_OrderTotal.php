<?php

function serialize_service_KitAPI_Model_Entity_Order_OrderTotal(service\KitAPI\Model\Entity\Order\OrderTotal $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->nds) {
    $jsonData["nds"] = $model->nds;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->route) {
    $jsonData["route"] = $model->route;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}
if (null !== $model->cargo_number) {
    $jsonData["cargo_number"] = $model->cargo_number;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
