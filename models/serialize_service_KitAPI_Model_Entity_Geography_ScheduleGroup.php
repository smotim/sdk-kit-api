<?php

function serialize_service_KitAPI_Model_Entity_Geography_ScheduleGroup(service\KitAPI\Model\Entity\Geography\ScheduleGroup $model, bool $useStdClass = true)
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

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
