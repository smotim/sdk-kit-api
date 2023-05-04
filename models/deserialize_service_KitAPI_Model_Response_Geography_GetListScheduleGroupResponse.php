<?php

function deserialize_service_KitAPI_Model_Response_Geography_GetListScheduleGroupResponse(array $jsonData): service\KitAPI\Model\Response\Geography\GetListScheduleGroupResponse
{
    
$model = new service\KitAPI\Model\Response\Geography\GetListScheduleGroupResponse();
if (isset($jsonData)) {
    $model->scheduleGroups = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->scheduleGroups[$index9] = new service\KitAPI\Model\Entity\Geography\ScheduleGroup();
if (isset($jsonData[$index9]['id'])) {
    $model->scheduleGroups[$index9]->id = $jsonData[$index9]['id'];

}
if (isset($jsonData[$index9]['name'])) {
    $model->scheduleGroups[$index9]->name = $jsonData[$index9]['name'];

}


}

}



    return $model;
}
