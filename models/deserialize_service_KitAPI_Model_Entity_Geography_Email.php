<?php

function deserialize_service_KitAPI_Model_Entity_Geography_Email(array $jsonData): service\KitAPI\Model\Entity\Geography\Email
{
    
$model = new service\KitAPI\Model\Entity\Geography\Email();
if (isset($jsonData['geography_city_id'])) {
    $model->geography_city_id = $jsonData['geography_city_id'];

}
if (isset($jsonData['geography_address_id'])) {
    $model->geography_address_id = $jsonData['geography_address_id'];

}
if (isset($jsonData['value'])) {
    $model->value = $jsonData['value'];

}
if (isset($jsonData['comment'])) {
    $model->comment = $jsonData['comment'];

}



    return $model;
}
