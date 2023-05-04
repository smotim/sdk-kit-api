<?php

function deserialize_service_KitAPI_Model_Entity_Order_Place(array $jsonData): service\KitAPI\Model\Entity\Order\Place
{
    
$model = new service\KitAPI\Model\Entity\Order\Place();
if (isset($jsonData['height'])) {
    $model->height = (float) $jsonData['height'];

}
if (isset($jsonData['width'])) {
    $model->width = (float) $jsonData['width'];

}
if (isset($jsonData['length'])) {
    $model->length = (float) $jsonData['length'];

}
if (isset($jsonData['count_place'])) {
    $model->count_place = $jsonData['count_place'];

}
if (isset($jsonData['weight'])) {
    $model->weight = $jsonData['weight'];

}
if (isset($jsonData['volume'])) {
    $model->volume = (float) $jsonData['volume'];

}
if (isset($jsonData['service'])) {
    $model->service = [];
foreach (array_keys($jsonData['service']) as $index20) {
    
$model->service[$index20] = new service\KitAPI\Model\Entity\Order\ServicePlace();
if (isset($jsonData['service'][$index20]['code'])) {
    $model->service[$index20]->code = $jsonData['service'][$index20]['code'];

}


}

}



    return $model;
}
