<?php

function serialize_service_KitAPI_Model_Response_Order_GetListServiceResponse(service\KitAPI\Model\Response\Order\GetListServiceResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->services) {
    $index16Array = $model->services;
if ($model->services instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->services->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->services[$index16]->code) {
    $jsonData["hidden_array"][$index16]["code"] = $model->services[$index16]->code;
}
if (null !== $model->services[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->services[$index16]->name;
}

if (0 === \count($jsonData["hidden_array"][$index16])) {
    $jsonData["hidden_array"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
