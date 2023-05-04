<?php

function deserialize_service_KitAPI_Model_Entity_Order_Calculate(array $jsonData): service\KitAPI\Model\Entity\Order\Calculate
{
    
$model = new service\KitAPI\Model\Entity\Order\Calculate();
if (isset($jsonData)) {
    
$model->calculate = new service\KitAPI\Model\Entity\Order\CalculateResult();
if (isset($jsonData['standart'])) {
    
$model->calculate->standart = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['standart']['name'])) {
    $model->calculate->standart->name = $jsonData['standart']['name'];

}
if (isset($jsonData['standart']['cost'])) {
    $model->calculate->standart->cost = $jsonData['standart']['cost'];

}
if (isset($jsonData['standart']['time'])) {
    $model->calculate->standart->time = $jsonData['standart']['time'];

}
if (isset($jsonData['standart']['currency_code'])) {
    $model->calculate->standart->currency_code = $jsonData['standart']['currency_code'];

}
if (isset($jsonData['standart']['detail'])) {
    $model->calculate->standart->detail = [];
foreach (array_keys($jsonData['standart']['detail']) as $index31) {
    
$model->calculate->standart->detail[$index31] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['standart']['detail'][$index31]['name'])) {
    $model->calculate->standart->detail[$index31]->name = $jsonData['standart']['detail'][$index31]['name'];

}
if (isset($jsonData['standart']['detail'][$index31]['code'])) {
    $model->calculate->standart->detail[$index31]->code = $jsonData['standart']['detail'][$index31]['code'];

}
if (isset($jsonData['standart']['detail'][$index31]['price'])) {
    $model->calculate->standart->detail[$index31]->price = $jsonData['standart']['detail'][$index31]['price'];

}


}

}


}
if (isset($jsonData['economy'])) {
    
$model->calculate->economy = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['economy']['name'])) {
    $model->calculate->economy->name = $jsonData['economy']['name'];

}
if (isset($jsonData['economy']['cost'])) {
    $model->calculate->economy->cost = $jsonData['economy']['cost'];

}
if (isset($jsonData['economy']['time'])) {
    $model->calculate->economy->time = $jsonData['economy']['time'];

}
if (isset($jsonData['economy']['currency_code'])) {
    $model->calculate->economy->currency_code = $jsonData['economy']['currency_code'];

}
if (isset($jsonData['economy']['detail'])) {
    $model->calculate->economy->detail = [];
foreach (array_keys($jsonData['economy']['detail']) as $index30) {
    
$model->calculate->economy->detail[$index30] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['economy']['detail'][$index30]['name'])) {
    $model->calculate->economy->detail[$index30]->name = $jsonData['economy']['detail'][$index30]['name'];

}
if (isset($jsonData['economy']['detail'][$index30]['code'])) {
    $model->calculate->economy->detail[$index30]->code = $jsonData['economy']['detail'][$index30]['code'];

}
if (isset($jsonData['economy']['detail'][$index30]['price'])) {
    $model->calculate->economy->detail[$index30]->price = $jsonData['economy']['detail'][$index30]['price'];

}


}

}


}
if (isset($jsonData['express'])) {
    
$model->calculate->express = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['express']['name'])) {
    $model->calculate->express->name = $jsonData['express']['name'];

}
if (isset($jsonData['express']['cost'])) {
    $model->calculate->express->cost = $jsonData['express']['cost'];

}
if (isset($jsonData['express']['time'])) {
    $model->calculate->express->time = $jsonData['express']['time'];

}
if (isset($jsonData['express']['currency_code'])) {
    $model->calculate->express->currency_code = $jsonData['express']['currency_code'];

}
if (isset($jsonData['express']['detail'])) {
    $model->calculate->express->detail = [];
foreach (array_keys($jsonData['express']['detail']) as $index30) {
    
$model->calculate->express->detail[$index30] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['express']['detail'][$index30]['name'])) {
    $model->calculate->express->detail[$index30]->name = $jsonData['express']['detail'][$index30]['name'];

}
if (isset($jsonData['express']['detail'][$index30]['code'])) {
    $model->calculate->express->detail[$index30]->code = $jsonData['express']['detail'][$index30]['code'];

}
if (isset($jsonData['express']['detail'][$index30]['price'])) {
    $model->calculate->express->detail[$index30]->price = $jsonData['express']['detail'][$index30]['price'];

}


}

}


}
if (isset($jsonData['standard_courier'])) {
    
$model->calculate->standard_courier = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['standard_courier']['name'])) {
    $model->calculate->standard_courier->name = $jsonData['standard_courier']['name'];

}
if (isset($jsonData['standard_courier']['cost'])) {
    $model->calculate->standard_courier->cost = $jsonData['standard_courier']['cost'];

}
if (isset($jsonData['standard_courier']['time'])) {
    $model->calculate->standard_courier->time = $jsonData['standard_courier']['time'];

}
if (isset($jsonData['standard_courier']['currency_code'])) {
    $model->calculate->standard_courier->currency_code = $jsonData['standard_courier']['currency_code'];

}
if (isset($jsonData['standard_courier']['detail'])) {
    $model->calculate->standard_courier->detail = [];
foreach (array_keys($jsonData['standard_courier']['detail']) as $index39) {
    
$model->calculate->standard_courier->detail[$index39] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['standard_courier']['detail'][$index39]['name'])) {
    $model->calculate->standard_courier->detail[$index39]->name = $jsonData['standard_courier']['detail'][$index39]['name'];

}
if (isset($jsonData['standard_courier']['detail'][$index39]['code'])) {
    $model->calculate->standard_courier->detail[$index39]->code = $jsonData['standard_courier']['detail'][$index39]['code'];

}
if (isset($jsonData['standard_courier']['detail'][$index39]['price'])) {
    $model->calculate->standard_courier->detail[$index39]->price = $jsonData['standard_courier']['detail'][$index39]['price'];

}


}

}


}
if (isset($jsonData['express_courier'])) {
    
$model->calculate->express_courier = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['express_courier']['name'])) {
    $model->calculate->express_courier->name = $jsonData['express_courier']['name'];

}
if (isset($jsonData['express_courier']['cost'])) {
    $model->calculate->express_courier->cost = $jsonData['express_courier']['cost'];

}
if (isset($jsonData['express_courier']['time'])) {
    $model->calculate->express_courier->time = $jsonData['express_courier']['time'];

}
if (isset($jsonData['express_courier']['currency_code'])) {
    $model->calculate->express_courier->currency_code = $jsonData['express_courier']['currency_code'];

}
if (isset($jsonData['express_courier']['detail'])) {
    $model->calculate->express_courier->detail = [];
foreach (array_keys($jsonData['express_courier']['detail']) as $index38) {
    
$model->calculate->express_courier->detail[$index38] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['express_courier']['detail'][$index38]['name'])) {
    $model->calculate->express_courier->detail[$index38]->name = $jsonData['express_courier']['detail'][$index38]['name'];

}
if (isset($jsonData['express_courier']['detail'][$index38]['code'])) {
    $model->calculate->express_courier->detail[$index38]->code = $jsonData['express_courier']['detail'][$index38]['code'];

}
if (isset($jsonData['express_courier']['detail'][$index38]['price'])) {
    $model->calculate->express_courier->detail[$index38]->price = $jsonData['express_courier']['detail'][$index38]['price'];

}


}

}


}


}



    return $model;
}
