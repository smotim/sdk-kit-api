<?php

function serialize_service_KitAPI_Model_Response_Geography_GetListScheduleResponse(service\KitAPI\Model\Response\Geography\GetListScheduleResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->schedules) {
    $index16Array = $model->schedules;
if ($model->schedules instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->schedules->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->schedules[$index16]->geography_city_id) {
    $jsonData["hidden_array"][$index16]["geography_city_id"] = $model->schedules[$index16]->geography_city_id;
}
if (null !== $model->schedules[$index16]->geography_address_id) {
    $jsonData["hidden_array"][$index16]["geography_address_id"] = $model->schedules[$index16]->geography_address_id;
}
if (null !== $model->schedules[$index16]->group_id) {
    $jsonData["hidden_array"][$index16]["group_id"] = $model->schedules[$index16]->group_id;
}
if (null !== $model->schedules[$index16]->day) {
    $jsonData["hidden_array"][$index16]["day"] = $model->schedules[$index16]->day;
}
if (null !== $model->schedules[$index16]->all_day) {
    $jsonData["hidden_array"][$index16]["all_day"] = $model->schedules[$index16]->all_day;
}
if (null !== $model->schedules[$index16]->freeday) {
    $jsonData["hidden_array"][$index16]["freeday"] = $model->schedules[$index16]->freeday;
}
if (null !== $model->schedules[$index16]->from) {
    $jsonData["hidden_array"][$index16]["from"] = $model->schedules[$index16]->from;
}
if (null !== $model->schedules[$index16]->to) {
    $jsonData["hidden_array"][$index16]["to"] = $model->schedules[$index16]->to;
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
