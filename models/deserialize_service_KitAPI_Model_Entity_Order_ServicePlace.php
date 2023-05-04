<?php

function deserialize_service_KitAPI_Model_Entity_Order_ServicePlace(array $jsonData): service\KitAPI\Model\Entity\Order\ServicePlace
{
    
$model = new service\KitAPI\Model\Entity\Order\ServicePlace();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}



    return $model;
}
