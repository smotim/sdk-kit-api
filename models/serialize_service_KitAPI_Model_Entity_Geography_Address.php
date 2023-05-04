<?php

function serialize_service_KitAPI_Model_Entity_Geography_Address(service\KitAPI\Model\Entity\Geography\Address $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->geography_city_id) {
    $jsonData["geography_city_id"] = $model->geography_city_id;
}
if (null !== $model->lat) {
    $jsonData["lat"] = $model->lat;
}
if (null !== $model->lon) {
    $jsonData["lon"] = $model->lon;
}
if (null !== $model->address_code) {
    $jsonData["address_code"] = $model->address_code;
}
if (null !== $model->cityName) {
    $jsonData["cityName"] = $model->cityName;
}
if (null !== $model->phone) {
    $index9Array = $model->phone;
if ($model->phone instanceof \Doctrine\Common\Collections\Collection) {
    $index9Array = $model->phone->toArray();
}
    
$jsonData["phone"] = [];
foreach (array_keys($index9Array) as $index9) {
    $jsonData["phone"][$index9] = [];
if (null !== $model->phone[$index9]->geography_city_id) {
    $jsonData["phone"][$index9]["geography_city_id"] = $model->phone[$index9]->geography_city_id;
}
if (null !== $model->phone[$index9]->geography_address_id) {
    $jsonData["phone"][$index9]["geography_address_id"] = $model->phone[$index9]->geography_address_id;
}
if (null !== $model->phone[$index9]->value) {
    $jsonData["phone"][$index9]["value"] = $model->phone[$index9]->value;
}
if (null !== $model->phone[$index9]->comment) {
    $jsonData["phone"][$index9]["comment"] = $model->phone[$index9]->comment;
}

if (0 === \count($jsonData["phone"][$index9])) {
    $jsonData["phone"][$index9] = $emptyObject;
}

}

}
if (null !== $model->email) {
    $index9Array = $model->email;
if ($model->email instanceof \Doctrine\Common\Collections\Collection) {
    $index9Array = $model->email->toArray();
}
    
$jsonData["email"] = [];
foreach (array_keys($index9Array) as $index9) {
    $jsonData["email"][$index9] = [];
if (null !== $model->email[$index9]->geography_city_id) {
    $jsonData["email"][$index9]["geography_city_id"] = $model->email[$index9]->geography_city_id;
}
if (null !== $model->email[$index9]->geography_address_id) {
    $jsonData["email"][$index9]["geography_address_id"] = $model->email[$index9]->geography_address_id;
}
if (null !== $model->email[$index9]->value) {
    $jsonData["email"][$index9]["value"] = $model->email[$index9]->value;
}
if (null !== $model->email[$index9]->comment) {
    $jsonData["email"][$index9]["comment"] = $model->email[$index9]->comment;
}

if (0 === \count($jsonData["email"][$index9])) {
    $jsonData["email"][$index9] = $emptyObject;
}

}

}
if (null !== $model->value) {
    $jsonData["value"] = $model->value;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
