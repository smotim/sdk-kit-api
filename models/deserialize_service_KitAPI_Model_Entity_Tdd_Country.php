<?php

function deserialize_service_KitAPI_Model_Entity_Tdd_Country(array $jsonData): service\KitAPI\Model\Entity\Tdd\Country
{
    
$model = new service\KitAPI\Model\Entity\Tdd\Country();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
