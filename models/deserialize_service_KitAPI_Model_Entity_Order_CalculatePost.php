<?php

function deserialize_service_KitAPI_Model_Entity_Order_CalculatePost(array $jsonData): service\KitAPI\Model\Entity\Order\CalculatePost
{
    
$model = new service\KitAPI\Model\Entity\Order\CalculatePost();
if (isset($jsonData)) {
    
$model->calculate = new service\KitAPI\Model\Entity\Order\CalculatePostResult();
if (isset($jsonData['XS'])) {
    
$model->calculate->XS = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['XS']['name'])) {
    $model->calculate->XS->name = $jsonData['XS']['name'];

}
if (isset($jsonData['XS']['cost'])) {
    $model->calculate->XS->cost = $jsonData['XS']['cost'];

}
if (isset($jsonData['XS']['time'])) {
    $model->calculate->XS->time = $jsonData['XS']['time'];

}
if (isset($jsonData['XS']['currency_code'])) {
    $model->calculate->XS->currency_code = $jsonData['XS']['currency_code'];

}
if (isset($jsonData['XS']['detail'])) {
    $model->calculate->XS->detail = [];
foreach (array_keys($jsonData['XS']['detail']) as $index25) {
    
$model->calculate->XS->detail[$index25] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['XS']['detail'][$index25]['name'])) {
    $model->calculate->XS->detail[$index25]->name = $jsonData['XS']['detail'][$index25]['name'];

}
if (isset($jsonData['XS']['detail'][$index25]['code'])) {
    $model->calculate->XS->detail[$index25]->code = $jsonData['XS']['detail'][$index25]['code'];

}
if (isset($jsonData['XS']['detail'][$index25]['price'])) {
    $model->calculate->XS->detail[$index25]->price = $jsonData['XS']['detail'][$index25]['price'];

}


}

}


}
if (isset($jsonData['S'])) {
    
$model->calculate->S = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['S']['name'])) {
    $model->calculate->S->name = $jsonData['S']['name'];

}
if (isset($jsonData['S']['cost'])) {
    $model->calculate->S->cost = $jsonData['S']['cost'];

}
if (isset($jsonData['S']['time'])) {
    $model->calculate->S->time = $jsonData['S']['time'];

}
if (isset($jsonData['S']['currency_code'])) {
    $model->calculate->S->currency_code = $jsonData['S']['currency_code'];

}
if (isset($jsonData['S']['detail'])) {
    $model->calculate->S->detail = [];
foreach (array_keys($jsonData['S']['detail']) as $index24) {
    
$model->calculate->S->detail[$index24] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['S']['detail'][$index24]['name'])) {
    $model->calculate->S->detail[$index24]->name = $jsonData['S']['detail'][$index24]['name'];

}
if (isset($jsonData['S']['detail'][$index24]['code'])) {
    $model->calculate->S->detail[$index24]->code = $jsonData['S']['detail'][$index24]['code'];

}
if (isset($jsonData['S']['detail'][$index24]['price'])) {
    $model->calculate->S->detail[$index24]->price = $jsonData['S']['detail'][$index24]['price'];

}


}

}


}
if (isset($jsonData['M'])) {
    
$model->calculate->M = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['M']['name'])) {
    $model->calculate->M->name = $jsonData['M']['name'];

}
if (isset($jsonData['M']['cost'])) {
    $model->calculate->M->cost = $jsonData['M']['cost'];

}
if (isset($jsonData['M']['time'])) {
    $model->calculate->M->time = $jsonData['M']['time'];

}
if (isset($jsonData['M']['currency_code'])) {
    $model->calculate->M->currency_code = $jsonData['M']['currency_code'];

}
if (isset($jsonData['M']['detail'])) {
    $model->calculate->M->detail = [];
foreach (array_keys($jsonData['M']['detail']) as $index24) {
    
$model->calculate->M->detail[$index24] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['M']['detail'][$index24]['name'])) {
    $model->calculate->M->detail[$index24]->name = $jsonData['M']['detail'][$index24]['name'];

}
if (isset($jsonData['M']['detail'][$index24]['code'])) {
    $model->calculate->M->detail[$index24]->code = $jsonData['M']['detail'][$index24]['code'];

}
if (isset($jsonData['M']['detail'][$index24]['price'])) {
    $model->calculate->M->detail[$index24]->price = $jsonData['M']['detail'][$index24]['price'];

}


}

}


}
if (isset($jsonData['L'])) {
    
$model->calculate->L = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData['L']['name'])) {
    $model->calculate->L->name = $jsonData['L']['name'];

}
if (isset($jsonData['L']['cost'])) {
    $model->calculate->L->cost = $jsonData['L']['cost'];

}
if (isset($jsonData['L']['time'])) {
    $model->calculate->L->time = $jsonData['L']['time'];

}
if (isset($jsonData['L']['currency_code'])) {
    $model->calculate->L->currency_code = $jsonData['L']['currency_code'];

}
if (isset($jsonData['L']['detail'])) {
    $model->calculate->L->detail = [];
foreach (array_keys($jsonData['L']['detail']) as $index24) {
    
$model->calculate->L->detail[$index24] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData['L']['detail'][$index24]['name'])) {
    $model->calculate->L->detail[$index24]->name = $jsonData['L']['detail'][$index24]['name'];

}
if (isset($jsonData['L']['detail'][$index24]['code'])) {
    $model->calculate->L->detail[$index24]->code = $jsonData['L']['detail'][$index24]['code'];

}
if (isset($jsonData['L']['detail'][$index24]['price'])) {
    $model->calculate->L->detail[$index24]->price = $jsonData['L']['detail'][$index24]['price'];

}


}

}


}


}



    return $model;
}
