<?php

function serialize_service_KitAPI_Model_Response_Geography_GetListAddressResponse(service\KitAPI\Model\Response\Geography\GetListAddressResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->addreses) {
    $index16Array = $model->addreses;
if ($model->addreses instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->addreses->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->addreses[$index16]->id) {
    $jsonData["hidden_array"][$index16]["id"] = $model->addreses[$index16]->id;
}
if (null !== $model->addreses[$index16]->geography_city_id) {
    $jsonData["hidden_array"][$index16]["geography_city_id"] = $model->addreses[$index16]->geography_city_id;
}
if (null !== $model->addreses[$index16]->lat) {
    $jsonData["hidden_array"][$index16]["lat"] = $model->addreses[$index16]->lat;
}
if (null !== $model->addreses[$index16]->lon) {
    $jsonData["hidden_array"][$index16]["lon"] = $model->addreses[$index16]->lon;
}
if (null !== $model->addreses[$index16]->address_code) {
    $jsonData["hidden_array"][$index16]["address_code"] = $model->addreses[$index16]->address_code;
}
if (null !== $model->addreses[$index16]->cityName) {
    $jsonData["hidden_array"][$index16]["cityName"] = $model->addreses[$index16]->cityName;
}
if (null !== $model->addreses[$index16]->phone) {
    $index35Array = $model->addreses[$index16]->phone;
if ($model->addreses[$index16]->phone instanceof \Doctrine\Common\Collections\Collection) {
    $index35Array = $model->addreses[$index16]->phone->toArray();
}
    
$jsonData["hidden_array"][$index16]["phone"] = [];
foreach (array_keys($index35Array) as $index35) {
    $jsonData["hidden_array"][$index16]["phone"][$index35] = [];
if (null !== $model->addreses[$index16]->phone[$index35]->geography_city_id) {
    $jsonData["hidden_array"][$index16]["phone"][$index35]["geography_city_id"] = $model->addreses[$index16]->phone[$index35]->geography_city_id;
}
if (null !== $model->addreses[$index16]->phone[$index35]->geography_address_id) {
    $jsonData["hidden_array"][$index16]["phone"][$index35]["geography_address_id"] = $model->addreses[$index16]->phone[$index35]->geography_address_id;
}
if (null !== $model->addreses[$index16]->phone[$index35]->value) {
    $jsonData["hidden_array"][$index16]["phone"][$index35]["value"] = $model->addreses[$index16]->phone[$index35]->value;
}
if (null !== $model->addreses[$index16]->phone[$index35]->comment) {
    $jsonData["hidden_array"][$index16]["phone"][$index35]["comment"] = $model->addreses[$index16]->phone[$index35]->comment;
}

if (0 === \count($jsonData["hidden_array"][$index16]["phone"][$index35])) {
    $jsonData["hidden_array"][$index16]["phone"][$index35] = $emptyObject;
}

}

}
if (null !== $model->addreses[$index16]->email) {
    $index35Array = $model->addreses[$index16]->email;
if ($model->addreses[$index16]->email instanceof \Doctrine\Common\Collections\Collection) {
    $index35Array = $model->addreses[$index16]->email->toArray();
}
    
$jsonData["hidden_array"][$index16]["email"] = [];
foreach (array_keys($index35Array) as $index35) {
    $jsonData["hidden_array"][$index16]["email"][$index35] = [];
if (null !== $model->addreses[$index16]->email[$index35]->geography_city_id) {
    $jsonData["hidden_array"][$index16]["email"][$index35]["geography_city_id"] = $model->addreses[$index16]->email[$index35]->geography_city_id;
}
if (null !== $model->addreses[$index16]->email[$index35]->geography_address_id) {
    $jsonData["hidden_array"][$index16]["email"][$index35]["geography_address_id"] = $model->addreses[$index16]->email[$index35]->geography_address_id;
}
if (null !== $model->addreses[$index16]->email[$index35]->value) {
    $jsonData["hidden_array"][$index16]["email"][$index35]["value"] = $model->addreses[$index16]->email[$index35]->value;
}
if (null !== $model->addreses[$index16]->email[$index35]->comment) {
    $jsonData["hidden_array"][$index16]["email"][$index35]["comment"] = $model->addreses[$index16]->email[$index35]->comment;
}

if (0 === \count($jsonData["hidden_array"][$index16]["email"][$index35])) {
    $jsonData["hidden_array"][$index16]["email"][$index35] = $emptyObject;
}

}

}
if (null !== $model->addreses[$index16]->value) {
    $jsonData["hidden_array"][$index16]["value"] = $model->addreses[$index16]->value;
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
