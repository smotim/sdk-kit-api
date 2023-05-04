<?php

function deserialize_service_KitAPI_Model_Entity_Order_Document(array $jsonData): service\KitAPI\Model\Entity\Order\Document
{
    
$model = new service\KitAPI\Model\Entity\Order\Document();
if (isset($jsonData['name'])) {
    $model->name = $jsonData['name'];

}
if (isset($jsonData['data'])) {
    $model->data = $jsonData['data'];

}



    return $model;
}
