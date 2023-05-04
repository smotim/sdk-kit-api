<?php

function serialize_service_KitAPI_Model_Response_Geography_GetListScheduleGroupResponse(service\KitAPI\Model\Response\Geography\GetListScheduleGroupResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->scheduleGroups) {
    $index16Array = $model->scheduleGroups;
if ($model->scheduleGroups instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->scheduleGroups->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->scheduleGroups[$index16]->id) {
    $jsonData["hidden_array"][$index16]["id"] = $model->scheduleGroups[$index16]->id;
}
if (null !== $model->scheduleGroups[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->scheduleGroups[$index16]->name;
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
