<?php

function serialize_service_KitAPI_Model_Entity_Order_CalculateService(service\KitAPI\Model\Entity\Order\CalculateService $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
