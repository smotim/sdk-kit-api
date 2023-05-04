<?php

function serialize_service_KitAPI_Model_Entity_Order_CalculateResultType(service\KitAPI\Model\Entity\Order\CalculateResultType $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->cost) {
    $jsonData["cost"] = $model->cost;
}
if (null !== $model->time) {
    $jsonData["time"] = $model->time;
}
if (null !== $model->currency_code) {
    $jsonData["currency_code"] = $model->currency_code;
}
if (null !== $model->detail) {
    $index10Array = $model->detail;
if ($model->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index10Array = $model->detail->toArray();
}
    
$jsonData["detail"] = [];
foreach (array_keys($index10Array) as $index10) {
    $jsonData["detail"][$index10] = [];
if (null !== $model->detail[$index10]->name) {
    $jsonData["detail"][$index10]["name"] = $model->detail[$index10]->name;
}
if (null !== $model->detail[$index10]->code) {
    $jsonData["detail"][$index10]["code"] = $model->detail[$index10]->code;
}
if (null !== $model->detail[$index10]->price) {
    $jsonData["detail"][$index10]["price"] = $model->detail[$index10]->price;
}

if (0 === \count($jsonData["detail"][$index10])) {
    $jsonData["detail"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
