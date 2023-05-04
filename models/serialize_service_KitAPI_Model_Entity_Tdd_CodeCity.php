<?php

function serialize_service_KitAPI_Model_Entity_Tdd_CodeCity(service\KitAPI\Model\Entity\Tdd\CodeCity $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->code) {
    $jsonData["code"] = $model->code;
}
if (null !== $model->kladr) {
    $jsonData["kladr"] = $model->kladr;
}
if (null !== $model->type_kladr) {
    $jsonData["type_kladr"] = $model->type_kladr;
}
if (null !== $model->name_kladr) {
    $jsonData["name_kladr"] = $model->name_kladr;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
