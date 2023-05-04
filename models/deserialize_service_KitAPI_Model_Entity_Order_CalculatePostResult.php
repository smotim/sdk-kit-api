<?php

function deserialize_service_KitAPI_Model_Entity_Order_CalculatePostResult(array $jsonData): service\KitAPI\Model\Entity\Order\CalculatePostResult
{
    
$model = new service\KitAPI\Model\Entity\Order\CalculatePostResult();
if (isset($jsonData['XS'])) {
    
$model->XS = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['XS']['name'])) {
    $model->XS->name = $jsonData['XS']['name'];

}
if (isset($jsonData['XS']['cost'])) {
    $model->XS->cost = $jsonData['XS']['cost'];

}
if (isset($jsonData['XS']['time'])) {
    $model->XS->time = $jsonData['XS']['time'];

}
if (isset($jsonData['XS']['currency_code'])) {
    $model->XS->currency_code = $jsonData['XS']['currency_code'];

}
if (isset($jsonData['XS']['detail'])) {
    $model->XS->detail = [];
foreach (array_keys($jsonData['XS']['detail']) as $index25) {
    
$model->XS->detail[$index25] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['XS']['detail'][$index25]['name'])) {
    $model->XS->detail[$index25]->name = $jsonData['XS']['detail'][$index25]['name'];

}
if (isset($jsonData['XS']['detail'][$index25]['code'])) {
    $model->XS->detail[$index25]->code = $jsonData['XS']['detail'][$index25]['code'];

}
if (isset($jsonData['XS']['detail'][$index25]['price'])) {
    $model->XS->detail[$index25]->price = $jsonData['XS']['detail'][$index25]['price'];

}


}

}


}
if (isset($jsonData['S'])) {
    
$model->S = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['S']['name'])) {
    $model->S->name = $jsonData['S']['name'];

}
if (isset($jsonData['S']['cost'])) {
    $model->S->cost = $jsonData['S']['cost'];

}
if (isset($jsonData['S']['time'])) {
    $model->S->time = $jsonData['S']['time'];

}
if (isset($jsonData['S']['currency_code'])) {
    $model->S->currency_code = $jsonData['S']['currency_code'];

}
if (isset($jsonData['S']['detail'])) {
    $model->S->detail = [];
foreach (array_keys($jsonData['S']['detail']) as $index24) {
    
$model->S->detail[$index24] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['S']['detail'][$index24]['name'])) {
    $model->S->detail[$index24]->name = $jsonData['S']['detail'][$index24]['name'];

}
if (isset($jsonData['S']['detail'][$index24]['code'])) {
    $model->S->detail[$index24]->code = $jsonData['S']['detail'][$index24]['code'];

}
if (isset($jsonData['S']['detail'][$index24]['price'])) {
    $model->S->detail[$index24]->price = $jsonData['S']['detail'][$index24]['price'];

}


}

}


}
if (isset($jsonData['M'])) {
    
$model->M = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['M']['name'])) {
    $model->M->name = $jsonData['M']['name'];

}
if (isset($jsonData['M']['cost'])) {
    $model->M->cost = $jsonData['M']['cost'];

}
if (isset($jsonData['M']['time'])) {
    $model->M->time = $jsonData['M']['time'];

}
if (isset($jsonData['M']['currency_code'])) {
    $model->M->currency_code = $jsonData['M']['currency_code'];

}
if (isset($jsonData['M']['detail'])) {
    $model->M->detail = [];
foreach (array_keys($jsonData['M']['detail']) as $index24) {
    
$model->M->detail[$index24] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['M']['detail'][$index24]['name'])) {
    $model->M->detail[$index24]->name = $jsonData['M']['detail'][$index24]['name'];

}
if (isset($jsonData['M']['detail'][$index24]['code'])) {
    $model->M->detail[$index24]->code = $jsonData['M']['detail'][$index24]['code'];

}
if (isset($jsonData['M']['detail'][$index24]['price'])) {
    $model->M->detail[$index24]->price = $jsonData['M']['detail'][$index24]['price'];

}


}

}


}
if (isset($jsonData['L'])) {
    
$model->L = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['L']['name'])) {
    $model->L->name = $jsonData['L']['name'];

}
if (isset($jsonData['L']['cost'])) {
    $model->L->cost = $jsonData['L']['cost'];

}
if (isset($jsonData['L']['time'])) {
    $model->L->time = $jsonData['L']['time'];

}
if (isset($jsonData['L']['currency_code'])) {
    $model->L->currency_code = $jsonData['L']['currency_code'];

}
if (isset($jsonData['L']['detail'])) {
    $model->L->detail = [];
foreach (array_keys($jsonData['L']['detail']) as $index24) {
    
$model->L->detail[$index24] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['L']['detail'][$index24]['name'])) {
    $model->L->detail[$index24]->name = $jsonData['L']['detail'][$index24]['name'];

}
if (isset($jsonData['L']['detail'][$index24]['code'])) {
    $model->L->detail[$index24]->code = $jsonData['L']['detail'][$index24]['code'];

}
if (isset($jsonData['L']['detail'][$index24]['price'])) {
    $model->L->detail[$index24]->price = $jsonData['L']['detail'][$index24]['price'];

}


}

}


}



    return $model;
}
