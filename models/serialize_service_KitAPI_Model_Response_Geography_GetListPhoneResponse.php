<?php

function serialize_service_KitAPI_Model_Response_Geography_GetListPhoneResponse(service\KitAPI\Model\Response\Geography\GetListPhoneResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->phones) {
    $index16Array = $model->phones;
if ($model->phones instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->phones->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->phones[$index16]->geography_city_id) {
    $jsonData["hidden_array"][$index16]["geography_city_id"] = $model->phones[$index16]->geography_city_id;
}
if (null !== $model->phones[$index16]->geography_address_id) {
    $jsonData["hidden_array"][$index16]["geography_address_id"] = $model->phones[$index16]->geography_address_id;
}
if (null !== $model->phones[$index16]->value) {
    $jsonData["hidden_array"][$index16]["value"] = $model->phones[$index16]->value;
}
if (null !== $model->phones[$index16]->comment) {
    $jsonData["hidden_array"][$index16]["comment"] = $model->phones[$index16]->comment;
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
