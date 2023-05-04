<?php

function deserialize_service_KitAPI_Model_Entity_Geography_Schedule(array $jsonData): service\KitAPI\Model\Entity\Geography\Schedule
{
    
$model = new service\KitAPI\Model\Entity\Geography\Schedule();
if (isset($jsonData['geography_city_id'])) {
    $model->geography_city_id = $jsonData['geography_city_id'];

}
if (isset($jsonData['geography_address_id'])) {
    $model->geography_address_id = $jsonData['geography_address_id'];

}
if (isset($jsonData['group_id'])) {
    $model->group_id = $jsonData['group_id'];

}
if (isset($jsonData['day'])) {
    $model->day = $jsonData['day'];

}
if (isset($jsonData['all_day'])) {
    $model->all_day = $jsonData['all_day'];

}
if (isset($jsonData['freeday'])) {
    $model->freeday = $jsonData['freeday'];

}
if (isset($jsonData['from'])) {
    $model->from = $jsonData['from'];

}
if (isset($jsonData['to'])) {
    $model->to = $jsonData['to'];

}



    return $model;
}
