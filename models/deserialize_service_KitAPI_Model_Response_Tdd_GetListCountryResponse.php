<?php

function deserialize_service_KitAPI_Model_Response_Tdd_GetListCountryResponse(array $jsonData): service\KitAPI\Model\Response\Tdd\GetListCountryResponse
{
    
$model = new service\KitAPI\Model\Response\Tdd\GetListCountryResponse();
if (isset($jsonData)) {
    $model->countries = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->countries[$index9] = new service\KitAPI\Model\Entity\Tdd\Country();
if (isset($jsonData[$index9]['name'])) {
    $model->countries[$index9]->name = $jsonData[$index9]['name'];

}
if (isset($jsonData[$index9]['code'])) {
    $model->countries[$index9]->code = $jsonData[$index9]['code'];

}


}

}



    return $model;
}
