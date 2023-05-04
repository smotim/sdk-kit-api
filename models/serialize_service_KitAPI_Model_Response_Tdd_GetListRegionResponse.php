<?php

function serialize_service_KitAPI_Model_Response_Tdd_GetListRegionResponse(service\KitAPI\Model\Response\Tdd\GetListRegionResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->regions) {
    $index16Array = $model->regions;
if ($model->regions instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->regions->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->regions[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->regions[$index16]->name;
}
if (null !== $model->regions[$index16]->code) {
    $jsonData["hidden_array"][$index16]["code"] = $model->regions[$index16]->code;
}
if (null !== $model->regions[$index16]->country_code) {
    $jsonData["hidden_array"][$index16]["country_code"] = $model->regions[$index16]->country_code;
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
