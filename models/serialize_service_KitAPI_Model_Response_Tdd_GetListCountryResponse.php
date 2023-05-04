<?php

function serialize_service_KitAPI_Model_Response_Tdd_GetListCountryResponse(service\KitAPI\Model\Response\Tdd\GetListCountryResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->countries) {
    $index16Array = $model->countries;
if ($model->countries instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->countries->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->countries[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->countries[$index16]->name;
}
if (null !== $model->countries[$index16]->code) {
    $jsonData["hidden_array"][$index16]["code"] = $model->countries[$index16]->code;
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
