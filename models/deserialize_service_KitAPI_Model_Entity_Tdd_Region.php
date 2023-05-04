<?php

function deserialize_service_KitAPI_Model_Entity_Tdd_Region(array $jsonData): service\KitAPI\Model\Entity\Tdd\Region
{
    
$model = new service\KitAPI\Model\Entity\Tdd\Region();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['country_code'])) {
    $model->country_code = $jsonData['country_code'];

}



    return $model;
}
