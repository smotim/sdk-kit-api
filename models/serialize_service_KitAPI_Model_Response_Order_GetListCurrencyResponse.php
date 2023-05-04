<?php

function serialize_service_KitAPI_Model_Response_Order_GetListCurrencyResponse(service\KitAPI\Model\Response\Order\GetListCurrencyResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->currencies) {
    $index16Array = $model->currencies;
if ($model->currencies instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->currencies->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->currencies[$index16]->code) {
    $jsonData["hidden_array"][$index16]["code"] = $model->currencies[$index16]->code;
}
if (null !== $model->currencies[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->currencies[$index16]->name;
}
if (null !== $model->currencies[$index16]->short_name) {
    $jsonData["hidden_array"][$index16]["short_name"] = $model->currencies[$index16]->short_name;
}
if (null !== $model->currencies[$index16]->country_code) {
    $jsonData["hidden_array"][$index16]["country_code"] = $model->currencies[$index16]->country_code;
}

if (0 === \count($jsonData["hidden_array"][$index16])) {
    $jsonData["hidden_array"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
