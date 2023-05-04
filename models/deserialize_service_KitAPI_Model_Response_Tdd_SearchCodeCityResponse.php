<?php

function deserialize_service_KitAPI_Model_Response_Tdd_SearchCodeCityResponse(array $jsonData): service\KitAPI\Model\Response\Tdd\SearchCodeCityResponse
{
    
$model = new service\KitAPI\Model\Response\Tdd\SearchCodeCityResponse();
if (isset($jsonData['code'])) {
    $model->code = $jsonData['code'];

}
if (isset($jsonData['kladr'])) {
    $model->kladr = $jsonData['kladr'];

}
if (isset($jsonData['type_kladr'])) {
    $model->type_kladr = $jsonData['type_kladr'];

}
if (isset($jsonData['name_kladr'])) {
    $model->name_kladr = $jsonData['name_kladr'];

}



    return $model;
}
