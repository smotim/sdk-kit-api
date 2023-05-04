<?php

function deserialize_service_KitAPI_Model_Response_Profile_ProfileGetList(array $jsonData): service\KitAPI\Model\Response\Profile\ProfileGetList
{
    
$model = new service\KitAPI\Model\Response\Profile\ProfileGetList();
if (isset($jsonData)) {
    $model->profiles = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->profiles[$index9] = new service\KitAPI\Model\Entity\Profile\Profile();
if (isset($jsonData[$index9]['id'])) {
    $model->profiles[$index9]->id = $jsonData[$index9]['id'];

}
if (isset($jsonData[$index9]['name'])) {
    $model->profiles[$index9]->name = $jsonData[$index9]['name'];

}
if (isset($jsonData[$index9]['debitor'])) {
    $model->profiles[$index9]->debitor = $jsonData[$index9]['debitor'];

}


}

}



    return $model;
}
