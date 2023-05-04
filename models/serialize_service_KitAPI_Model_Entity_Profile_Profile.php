<?php

function serialize_service_KitAPI_Model_Entity_Profile_Profile(service\KitAPI\Model\Entity\Profile\Profile $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->id) {
    $jsonData["id"] = $model->id;
}
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->debitor) {
    $jsonData["debitor"] = $model->debitor;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
