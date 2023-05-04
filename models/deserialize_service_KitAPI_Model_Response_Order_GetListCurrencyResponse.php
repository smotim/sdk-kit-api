<?php

function deserialize_service_KitAPI_Model_Response_Order_GetListCurrencyResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetListCurrencyResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetListCurrencyResponse();
if (isset($jsonData)) {
    $model->currencies = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->currencies[$index9] = new service\KitAPI\Model\Entity\Order\Currency();
if (isset($jsonData[$index9]['code'])) {
    $model->currencies[$index9]->code = $jsonData[$index9]['code'];

}
if (isset($jsonData[$index9]['name'])) {
    $model->currencies[$index9]->name = $jsonData[$index9]['name'];

}
if (isset($jsonData[$index9]['short_name'])) {
    $model->currencies[$index9]->short_name = $jsonData[$index9]['short_name'];

}
if (isset($jsonData[$index9]['country_code'])) {
    $model->currencies[$index9]->country_code = $jsonData[$index9]['country_code'];

}


}

}



    return $model;
}
