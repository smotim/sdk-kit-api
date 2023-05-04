<?php

function deserialize_service_KitAPI_Model_Response_Tdd_GetListRegionResponse(array $jsonData): service\KitAPI\Model\Response\Tdd\GetListRegionResponse
{
    
$model = new service\KitAPI\Model\Response\Tdd\GetListRegionResponse();
if (isset($jsonData)) {
    $model->regions = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->regions[$index9] = new service\KitAPI\Model\Entity\Tdd\Region();
if (isset($jsonData[$index9]['name'])) {
    $model->regions[$index9]->name = $jsonData[$index9]['name'];

}
if (isset($jsonData[$index9]['code'])) {
    $model->regions[$index9]->code = $jsonData[$index9]['code'];

}
if (isset($jsonData[$index9]['country_code'])) {
    $model->regions[$index9]->country_code = $jsonData[$index9]['country_code'];

}


}

}



    return $model;
}
