<?php

function deserialize_service_KitAPI_Model_Response_Geography_GetListEmailResponse(array $jsonData): service\KitAPI\Model\Response\Geography\GetListEmailResponse
{
    
$model = new service\KitAPI\Model\Response\Geography\GetListEmailResponse();
if (isset($jsonData)) {
    $model->emails = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->emails[$index9] = new service\KitAPI\Model\Entity\Geography\Email();
if (isset($jsonData[$index9]['geography_city_id'])) {
    $model->emails[$index9]->geography_city_id = $jsonData[$index9]['geography_city_id'];

}
if (isset($jsonData[$index9]['geography_address_id'])) {
    $model->emails[$index9]->geography_address_id = $jsonData[$index9]['geography_address_id'];

}
if (isset($jsonData[$index9]['value'])) {
    $model->emails[$index9]->value = $jsonData[$index9]['value'];

}
if (isset($jsonData[$index9]['comment'])) {
    $model->emails[$index9]->comment = $jsonData[$index9]['comment'];

}


}

}



    return $model;
}
