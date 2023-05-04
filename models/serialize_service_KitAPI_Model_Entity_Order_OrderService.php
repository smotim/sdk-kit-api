<?php

function serialize_service_KitAPI_Model_Entity_Order_OrderService(service\KitAPI\Model\Entity\Order\OrderService $model, bool $useStdClass = true)
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
if (null !== $model->quantity) {
    $jsonData["quantity"] = $model->quantity;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->currency_code) {
    $jsonData["currency_code"] = $model->currency_code;
}
if (null !== $model->payer_debitor) {
    $jsonData["payer_debitor"] = $model->payer_debitor;
}
if (null !== $model->payer_short_name) {
    $jsonData["payer_short_name"] = $model->payer_short_name;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
