<?php

function deserialize_service_KitAPI_Model_Response_Order_GetPhotoResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetPhotoResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetPhotoResponse();
if (isset($jsonData)) {
    $model->photos = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->photos[$index9] = new service\KitAPI\Model\Entity\Order\Photo();
if (isset($jsonData[$index9]['data'])) {
    $model->photos[$index9]->data = $jsonData[$index9]['data'];

}


}

}



    return $model;
}
