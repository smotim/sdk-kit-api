<?php

function deserialize_service_KitAPI_Model_Entity_Profile_Profile(array $jsonData): service\KitAPI\Model\Entity\Profile\Profile
{
    
$model = new service\KitAPI\Model\Entity\Profile\Profile();
if (isset($jsonData['id'])) {
    $model->id = $jsonData['id'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['debitor'])) {
    $model->debitor = $jsonData['debitor'];

}



    return $model;
}
