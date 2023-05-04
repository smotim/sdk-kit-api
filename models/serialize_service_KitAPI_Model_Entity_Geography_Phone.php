<?php

function serialize_service_KitAPI_Model_Entity_Geography_Phone(service\KitAPI\Model\Entity\Geography\Phone $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->geography_city_id) {
    $jsonData["geography_city_id"] = $model->geography_city_id;
}
if (null !== $model->geography_address_id) {
    $jsonData["geography_address_id"] = $model->geography_address_id;
}
if (null !== $model->value) {
    $jsonData["value"] = $model->value;
}
if (null !== $model->comment) {
    $jsonData["comment"] = $model->comment;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
