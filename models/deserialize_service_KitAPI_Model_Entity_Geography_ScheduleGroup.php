<?php

function deserialize_service_KitAPI_Model_Entity_Geography_ScheduleGroup(array $jsonData): service\KitAPI\Model\Entity\Geography\ScheduleGroup
{
    
$model = new service\KitAPI\Model\Entity\Geography\ScheduleGroup();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
