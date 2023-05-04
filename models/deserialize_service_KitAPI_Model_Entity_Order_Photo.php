<?php

function deserialize_service_KitAPI_Model_Entity_Order_Photo(array $jsonData): service\KitAPI\Model\Entity\Order\Photo
{
    
$model = new service\KitAPI\Model\Entity\Order\Photo();
if (isset($jsonData['data'])) {
    $model->data = $jsonData['data'];

}



    return $model;
}
