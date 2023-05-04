<?php

function deserialize_service_KitAPI_Model_Entity_Order_Payment(array $jsonData): service\KitAPI\Model\Entity\Order\Payment
{
    
$model = new service\KitAPI\Model\Entity\Order\Payment();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}



    return $model;
}
