<?php

function deserialize_service_KitAPI_Model_Response_Geography_GetListPhoneResponse(array $jsonData): service\KitAPI\Model\Response\Geography\GetListPhoneResponse
{
    
$model = new service\KitAPI\Model\Response\Geography\GetListPhoneResponse();
if (isset($jsonData)) {
    $model->phones = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->phones[$index9] = new service\KitAPI\Model\Entity\Geography\Phone();
if (isset($jsonData[$index9]['geography_city_id'])) {
    $model->phones[$index9]->geography_city_id = $jsonData[$index9]['geography_city_id'];

}
if (isset($jsonData[$index9]['geography_address_id'])) {
    $model->phones[$index9]->geography_address_id = $jsonData[$index9]['geography_address_id'];

}
if (isset($jsonData[$index9]['value'])) {
    $model->phones[$index9]->value = $jsonData[$index9]['value'];

}
if (isset($jsonData[$index9]['comment'])) {
    $model->phones[$index9]->comment = $jsonData[$index9]['comment'];

}


}

}



    return $model;
}
