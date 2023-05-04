<?php

function deserialize_service_KitAPI_Model_Entity_Order_Result(array $jsonData): service\KitAPI\Model\Entity\Order\Result
{
    
$model = new service\KitAPI\Model\Entity\Order\Result();
if (isset($jsonData['sale_number'])) {
    $model->sale_number = $jsonData['sale_number'];

}
if (isset($jsonData['cargo_number'])) {
    $model->cargo_number = $jsonData['cargo_number'];

}



    return $model;
}
