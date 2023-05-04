<?php

function serialize_service_KitAPI_Model_Entity_Geography_Schedule(service\KitAPI\Model\Entity\Geography\Schedule $model, bool $useStdClass = true)
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
if (null !== $model->group_id) {
    $jsonData["group_id"] = $model->group_id;
}
if (null !== $model->day) {
    $jsonData["day"] = $model->day;
}
if (null !== $model->all_day) {
    $jsonData["all_day"] = $model->all_day;
}
if (null !== $model->freeday) {
    $jsonData["freeday"] = $model->freeday;
}
if (null !== $model->from) {
    $jsonData["from"] = $model->from;
}
if (null !== $model->to) {
    $jsonData["to"] = $model->to;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
