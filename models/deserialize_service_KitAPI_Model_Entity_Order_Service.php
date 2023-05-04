<?php

function deserialize_service_KitAPI_Model_Entity_Order_Service(array $jsonData): service\KitAPI\Model\Entity\Order\Service
{
    
$model = new service\KitAPI\Model\Entity\Order\Service();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
