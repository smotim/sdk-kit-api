<?php

function deserialize_service_KitAPI_Model_Entity_Order_CalculateResult(array $jsonData): service\KitAPI\Model\Entity\Order\CalculateResult
{
    
$model = new service\KitAPI\Model\Entity\Order\CalculateResult();
if (isset($jsonData['standart'])) {
    
$model->standart = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['standart']['name'])) {
    $model->standart->name = $jsonData['standart']['name'];

}
if (isset($jsonData['standart']['cost'])) {
    $model->standart->cost = $jsonData['standart']['cost'];

}
if (isset($jsonData['standart']['time'])) {
    $model->standart->time = $jsonData['standart']['time'];

}
if (isset($jsonData['standart']['currency_code'])) {
    $model->standart->currency_code = $jsonData['standart']['currency_code'];

}
if (isset($jsonData['standart']['detail'])) {
    $model->standart->detail = [];
foreach (array_keys($jsonData['standart']['detail']) as $index31) {
    
$model->standart->detail[$index31] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['standart']['detail'][$index31]['name'])) {
    $model->standart->detail[$index31]->name = $jsonData['standart']['detail'][$index31]['name'];

}
if (isset($jsonData['standart']['detail'][$index31]['code'])) {
    $model->standart->detail[$index31]->code = $jsonData['standart']['detail'][$index31]['code'];

}
if (isset($jsonData['standart']['detail'][$index31]['price'])) {
    $model->standart->detail[$index31]->price = $jsonData['standart']['detail'][$index31]['price'];

}


}

}


}
if (isset($jsonData['economy'])) {
    
$model->economy = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['economy']['name'])) {
    $model->economy->name = $jsonData['economy']['name'];

}
if (isset($jsonData['economy']['cost'])) {
    $model->economy->cost = $jsonData['economy']['cost'];

}
if (isset($jsonData['economy']['time'])) {
    $model->economy->time = $jsonData['economy']['time'];

}
if (isset($jsonData['economy']['currency_code'])) {
    $model->economy->currency_code = $jsonData['economy']['currency_code'];

}
if (isset($jsonData['economy']['detail'])) {
    $model->economy->detail = [];
foreach (array_keys($jsonData['economy']['detail']) as $index30) {
    
$model->economy->detail[$index30] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['economy']['detail'][$index30]['name'])) {
    $model->economy->detail[$index30]->name = $jsonData['economy']['detail'][$index30]['name'];

}
if (isset($jsonData['economy']['detail'][$index30]['code'])) {
    $model->economy->detail[$index30]->code = $jsonData['economy']['detail'][$index30]['code'];

}
if (isset($jsonData['economy']['detail'][$index30]['price'])) {
    $model->economy->detail[$index30]->price = $jsonData['economy']['detail'][$index30]['price'];

}


}

}


}
if (isset($jsonData['express'])) {
    
$model->express = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['express']['name'])) {
    $model->express->name = $jsonData['express']['name'];

}
if (isset($jsonData['express']['cost'])) {
    $model->express->cost = $jsonData['express']['cost'];

}
if (isset($jsonData['express']['time'])) {
    $model->express->time = $jsonData['express']['time'];

}
if (isset($jsonData['express']['currency_code'])) {
    $model->express->currency_code = $jsonData['express']['currency_code'];

}
if (isset($jsonData['express']['detail'])) {
    $model->express->detail = [];
foreach (array_keys($jsonData['express']['detail']) as $index30) {
    
$model->express->detail[$index30] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['express']['detail'][$index30]['name'])) {
    $model->express->detail[$index30]->name = $jsonData['express']['detail'][$index30]['name'];

}
if (isset($jsonData['express']['detail'][$index30]['code'])) {
    $model->express->detail[$index30]->code = $jsonData['express']['detail'][$index30]['code'];

}
if (isset($jsonData['express']['detail'][$index30]['price'])) {
    $model->express->detail[$index30]->price = $jsonData['express']['detail'][$index30]['price'];

}


}

}


}
if (isset($jsonData['standard_courier'])) {
    
$model->standard_courier = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['standard_courier']['name'])) {
    $model->standard_courier->name = $jsonData['standard_courier']['name'];

}
if (isset($jsonData['standard_courier']['cost'])) {
    $model->standard_courier->cost = $jsonData['standard_courier']['cost'];

}
if (isset($jsonData['standard_courier']['time'])) {
    $model->standard_courier->time = $jsonData['standard_courier']['time'];

}
if (isset($jsonData['standard_courier']['currency_code'])) {
    $model->standard_courier->currency_code = $jsonData['standard_courier']['currency_code'];

}
if (isset($jsonData['standard_courier']['detail'])) {
    $model->standard_courier->detail = [];
foreach (array_keys($jsonData['standard_courier']['detail']) as $index39) {
    
$model->standard_courier->detail[$index39] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['standard_courier']['detail'][$index39]['name'])) {
    $model->standard_courier->detail[$index39]->name = $jsonData['standard_courier']['detail'][$index39]['name'];

}
if (isset($jsonData['standard_courier']['detail'][$index39]['code'])) {
    $model->standard_courier->detail[$index39]->code = $jsonData['standard_courier']['detail'][$index39]['code'];

}
if (isset($jsonData['standard_courier']['detail'][$index39]['price'])) {
    $model->standard_courier->detail[$index39]->price = $jsonData['standard_courier']['detail'][$index39]['price'];

}


}

}


}
if (isset($jsonData['express_courier'])) {
    
$model->express_courier = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['express_courier']['name'])) {
    $model->express_courier->name = $jsonData['express_courier']['name'];

}
if (isset($jsonData['express_courier']['cost'])) {
    $model->express_courier->cost = $jsonData['express_courier']['cost'];

}
if (isset($jsonData['express_courier']['time'])) {
    $model->express_courier->time = $jsonData['express_courier']['time'];

}
if (isset($jsonData['express_courier']['currency_code'])) {
    $model->express_courier->currency_code = $jsonData['express_courier']['currency_code'];

}
if (isset($jsonData['express_courier']['detail'])) {
    $model->express_courier->detail = [];
foreach (array_keys($jsonData['express_courier']['detail']) as $index38) {
    
$model->express_courier->detail[$index38] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['express_courier']['detail'][$index38]['name'])) {
    $model->express_courier->detail[$index38]->name = $jsonData['express_courier']['detail'][$index38]['name'];

}
if (isset($jsonData['express_courier']['detail'][$index38]['code'])) {
    $model->express_courier->detail[$index38]->code = $jsonData['express_courier']['detail'][$index38]['code'];

}
if (isset($jsonData['express_courier']['detail'][$index38]['price'])) {
    $model->express_courier->detail[$index38]->price = $jsonData['express_courier']['detail'][$index38]['price'];

}


}

}


}



    return $model;
}
