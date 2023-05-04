<?php

function deserialize_service_KitAPI_Model_Response_Geography_GetListScheduleResponse(array $jsonData): service\KitAPI\Model\Response\Geography\GetListScheduleResponse
{
    
$model = new service\KitAPI\Model\Response\Geography\GetListScheduleResponse();
if (isset($jsonData)) {
    $model->schedules = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->schedules[$index9] = new service\KitAPI\Model\Entity\Geography\Schedule();
if (isset($jsonData[$index9]['geography_city_id'])) {
    $model->schedules[$index9]->geography_city_id = $jsonData[$index9]['geography_city_id'];

}
if (isset($jsonData[$index9]['geography_address_id'])) {
    $model->schedules[$index9]->geography_address_id = $jsonData[$index9]['geography_address_id'];

}
if (isset($jsonData[$index9]['group_id'])) {
    $model->schedules[$index9]->group_id = $jsonData[$index9]['group_id'];

}
if (isset($jsonData[$index9]['day'])) {
    $model->schedules[$index9]->day = $jsonData[$index9]['day'];

}
if (isset($jsonData[$index9]['all_day'])) {
    $model->schedules[$index9]->all_day = $jsonData[$index9]['all_day'];

}
if (isset($jsonData[$index9]['freeday'])) {
    $model->schedules[$index9]->freeday = $jsonData[$index9]['freeday'];

}
if (isset($jsonData[$index9]['from'])) {
    $model->schedules[$index9]->from = $jsonData[$index9]['from'];

}
if (isset($jsonData[$index9]['to'])) {
    $model->schedules[$index9]->to = $jsonData[$index9]['to'];

}


}

}



    return $model;
}
