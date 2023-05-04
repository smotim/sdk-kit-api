<?php

function deserialize_service_KitAPI_Model_Response_Order_CalculateResponse(array $jsonData): service\KitAPI\Model\Response\Order\CalculateResponse
{
    
$model = new service\KitAPI\Model\Response\Order\CalculateResponse();
if (isset($jsonData)) {
    $model->calculateResults = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->calculateResults[$index9] = new service\KitAPI\Model\Entity\Order\Calculate();
if (isset($jsonData[$index9])) {
    
$model->calculateResults[$index9]->calculate = new service\KitAPI\Model\Entity\Order\CalculateResult();
if (isset($jsonData[$index9]['standart'])) {
    
$model->calculateResults[$index9]->calculate->standart = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['standart']['name'])) {
    $model->calculateResults[$index9]->calculate->standart->name = $jsonData[$index9]['standart']['name'];

}
if (isset($jsonData[$index9]['standart']['cost'])) {
    $model->calculateResults[$index9]->calculate->standart->cost = $jsonData[$index9]['standart']['cost'];

}
if (isset($jsonData[$index9]['standart']['time'])) {
    $model->calculateResults[$index9]->calculate->standart->time = $jsonData[$index9]['standart']['time'];

}
if (isset($jsonData[$index9]['standart']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->standart->currency_code = $jsonData[$index9]['standart']['currency_code'];

}
if (isset($jsonData[$index9]['standart']['detail'])) {
    $model->calculateResults[$index9]->calculate->standart->detail = [];
foreach (array_keys($jsonData[$index9]['standart']['detail']) as $index40) {
    
$model->calculateResults[$index9]->calculate->standart->detail[$index40] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['standart']['detail'][$index40]['name'])) {
    $model->calculateResults[$index9]->calculate->standart->detail[$index40]->name = $jsonData[$index9]['standart']['detail'][$index40]['name'];

}
if (isset($jsonData[$index9]['standart']['detail'][$index40]['code'])) {
    $model->calculateResults[$index9]->calculate->standart->detail[$index40]->code = $jsonData[$index9]['standart']['detail'][$index40]['code'];

}
if (isset($jsonData[$index9]['standart']['detail'][$index40]['price'])) {
    $model->calculateResults[$index9]->calculate->standart->detail[$index40]->price = $jsonData[$index9]['standart']['detail'][$index40]['price'];

}


}

}


}
if (isset($jsonData[$index9]['economy'])) {
    
$model->calculateResults[$index9]->calculate->economy = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['economy']['name'])) {
    $model->calculateResults[$index9]->calculate->economy->name = $jsonData[$index9]['economy']['name'];

}
if (isset($jsonData[$index9]['economy']['cost'])) {
    $model->calculateResults[$index9]->calculate->economy->cost = $jsonData[$index9]['economy']['cost'];

}
if (isset($jsonData[$index9]['economy']['time'])) {
    $model->calculateResults[$index9]->calculate->economy->time = $jsonData[$index9]['economy']['time'];

}
if (isset($jsonData[$index9]['economy']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->economy->currency_code = $jsonData[$index9]['economy']['currency_code'];

}
if (isset($jsonData[$index9]['economy']['detail'])) {
    $model->calculateResults[$index9]->calculate->economy->detail = [];
foreach (array_keys($jsonData[$index9]['economy']['detail']) as $index39) {
    
$model->calculateResults[$index9]->calculate->economy->detail[$index39] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['economy']['detail'][$index39]['name'])) {
    $model->calculateResults[$index9]->calculate->economy->detail[$index39]->name = $jsonData[$index9]['economy']['detail'][$index39]['name'];

}
if (isset($jsonData[$index9]['economy']['detail'][$index39]['code'])) {
    $model->calculateResults[$index9]->calculate->economy->detail[$index39]->code = $jsonData[$index9]['economy']['detail'][$index39]['code'];

}
if (isset($jsonData[$index9]['economy']['detail'][$index39]['price'])) {
    $model->calculateResults[$index9]->calculate->economy->detail[$index39]->price = $jsonData[$index9]['economy']['detail'][$index39]['price'];

}


}

}


}
if (isset($jsonData[$index9]['express'])) {
    
$model->calculateResults[$index9]->calculate->express = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['express']['name'])) {
    $model->calculateResults[$index9]->calculate->express->name = $jsonData[$index9]['express']['name'];

}
if (isset($jsonData[$index9]['express']['cost'])) {
    $model->calculateResults[$index9]->calculate->express->cost = $jsonData[$index9]['express']['cost'];

}
if (isset($jsonData[$index9]['express']['time'])) {
    $model->calculateResults[$index9]->calculate->express->time = $jsonData[$index9]['express']['time'];

}
if (isset($jsonData[$index9]['express']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->express->currency_code = $jsonData[$index9]['express']['currency_code'];

}
if (isset($jsonData[$index9]['express']['detail'])) {
    $model->calculateResults[$index9]->calculate->express->detail = [];
foreach (array_keys($jsonData[$index9]['express']['detail']) as $index39) {
    
$model->calculateResults[$index9]->calculate->express->detail[$index39] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['express']['detail'][$index39]['name'])) {
    $model->calculateResults[$index9]->calculate->express->detail[$index39]->name = $jsonData[$index9]['express']['detail'][$index39]['name'];

}
if (isset($jsonData[$index9]['express']['detail'][$index39]['code'])) {
    $model->calculateResults[$index9]->calculate->express->detail[$index39]->code = $jsonData[$index9]['express']['detail'][$index39]['code'];

}
if (isset($jsonData[$index9]['express']['detail'][$index39]['price'])) {
    $model->calculateResults[$index9]->calculate->express->detail[$index39]->price = $jsonData[$index9]['express']['detail'][$index39]['price'];

}


}

}


}
if (isset($jsonData[$index9]['standard_courier'])) {
    
$model->calculateResults[$index9]->calculate->standard_courier = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['standard_courier']['name'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->name = $jsonData[$index9]['standard_courier']['name'];

}
if (isset($jsonData[$index9]['standard_courier']['cost'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->cost = $jsonData[$index9]['standard_courier']['cost'];

}
if (isset($jsonData[$index9]['standard_courier']['time'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->time = $jsonData[$index9]['standard_courier']['time'];

}
if (isset($jsonData[$index9]['standard_courier']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->currency_code = $jsonData[$index9]['standard_courier']['currency_code'];

}
if (isset($jsonData[$index9]['standard_courier']['detail'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->detail = [];
foreach (array_keys($jsonData[$index9]['standard_courier']['detail']) as $index48) {
    
$model->calculateResults[$index9]->calculate->standard_courier->detail[$index48] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['standard_courier']['detail'][$index48]['name'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->detail[$index48]->name = $jsonData[$index9]['standard_courier']['detail'][$index48]['name'];

}
if (isset($jsonData[$index9]['standard_courier']['detail'][$index48]['code'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->detail[$index48]->code = $jsonData[$index9]['standard_courier']['detail'][$index48]['code'];

}
if (isset($jsonData[$index9]['standard_courier']['detail'][$index48]['price'])) {
    $model->calculateResults[$index9]->calculate->standard_courier->detail[$index48]->price = $jsonData[$index9]['standard_courier']['detail'][$index48]['price'];

}


}

}


}
if (isset($jsonData[$index9]['express_courier'])) {
    
$model->calculateResults[$index9]->calculate->express_courier = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['express_courier']['name'])) {
    $model->calculateResults[$index9]->calculate->express_courier->name = $jsonData[$index9]['express_courier']['name'];

}
if (isset($jsonData[$index9]['express_courier']['cost'])) {
    $model->calculateResults[$index9]->calculate->express_courier->cost = $jsonData[$index9]['express_courier']['cost'];

}
if (isset($jsonData[$index9]['express_courier']['time'])) {
    $model->calculateResults[$index9]->calculate->express_courier->time = $jsonData[$index9]['express_courier']['time'];

}
if (isset($jsonData[$index9]['express_courier']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->express_courier->currency_code = $jsonData[$index9]['express_courier']['currency_code'];

}
if (isset($jsonData[$index9]['express_courier']['detail'])) {
    $model->calculateResults[$index9]->calculate->express_courier->detail = [];
foreach (array_keys($jsonData[$index9]['express_courier']['detail']) as $index47) {
    
$model->calculateResults[$index9]->calculate->express_courier->detail[$index47] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['express_courier']['detail'][$index47]['name'])) {
    $model->calculateResults[$index9]->calculate->express_courier->detail[$index47]->name = $jsonData[$index9]['express_courier']['detail'][$index47]['name'];

}
if (isset($jsonData[$index9]['express_courier']['detail'][$index47]['code'])) {
    $model->calculateResults[$index9]->calculate->express_courier->detail[$index47]->code = $jsonData[$index9]['express_courier']['detail'][$index47]['code'];

}
if (isset($jsonData[$index9]['express_courier']['detail'][$index47]['price'])) {
    $model->calculateResults[$index9]->calculate->express_courier->detail[$index47]->price = $jsonData[$index9]['express_courier']['detail'][$index47]['price'];

}


}

}


}


}


}

}



    return $model;
}
