<?php

function deserialize_service_KitAPI_Model_Response_Order_CalculatePostResponse(array $jsonData): service\KitAPI\Model\Response\Order\CalculatePostResponse
{
    
$model = new service\KitAPI\Model\Response\Order\CalculatePostResponse();
if (isset($jsonData)) {
    $model->calculateResults = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->calculateResults[$index9] = new service\KitAPI\Model\Entity\Order\CalculatePost();
if (isset($jsonData[$index9])) {
    
$model->calculateResults[$index9]->calculate = new service\KitAPI\Model\Entity\Order\CalculatePostResult();
if (isset($jsonData[$index9]['XS'])) {
    
$model->calculateResults[$index9]->calculate->XS = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['XS']['name'])) {
    $model->calculateResults[$index9]->calculate->XS->name = $jsonData[$index9]['XS']['name'];

}
if (isset($jsonData[$index9]['XS']['cost'])) {
    $model->calculateResults[$index9]->calculate->XS->cost = $jsonData[$index9]['XS']['cost'];

}
if (isset($jsonData[$index9]['XS']['time'])) {
    $model->calculateResults[$index9]->calculate->XS->time = $jsonData[$index9]['XS']['time'];

}
if (isset($jsonData[$index9]['XS']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->XS->currency_code = $jsonData[$index9]['XS']['currency_code'];

}
if (isset($jsonData[$index9]['XS']['detail'])) {
    $model->calculateResults[$index9]->calculate->XS->detail = [];
foreach (array_keys($jsonData[$index9]['XS']['detail']) as $index34) {
    
$model->calculateResults[$index9]->calculate->XS->detail[$index34] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['XS']['detail'][$index34]['name'])) {
    $model->calculateResults[$index9]->calculate->XS->detail[$index34]->name = $jsonData[$index9]['XS']['detail'][$index34]['name'];

}
if (isset($jsonData[$index9]['XS']['detail'][$index34]['code'])) {
    $model->calculateResults[$index9]->calculate->XS->detail[$index34]->code = $jsonData[$index9]['XS']['detail'][$index34]['code'];

}
if (isset($jsonData[$index9]['XS']['detail'][$index34]['price'])) {
    $model->calculateResults[$index9]->calculate->XS->detail[$index34]->price = $jsonData[$index9]['XS']['detail'][$index34]['price'];

}


}

}


}
if (isset($jsonData[$index9]['S'])) {
    
$model->calculateResults[$index9]->calculate->S = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['S']['name'])) {
    $model->calculateResults[$index9]->calculate->S->name = $jsonData[$index9]['S']['name'];

}
if (isset($jsonData[$index9]['S']['cost'])) {
    $model->calculateResults[$index9]->calculate->S->cost = $jsonData[$index9]['S']['cost'];

}
if (isset($jsonData[$index9]['S']['time'])) {
    $model->calculateResults[$index9]->calculate->S->time = $jsonData[$index9]['S']['time'];

}
if (isset($jsonData[$index9]['S']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->S->currency_code = $jsonData[$index9]['S']['currency_code'];

}
if (isset($jsonData[$index9]['S']['detail'])) {
    $model->calculateResults[$index9]->calculate->S->detail = [];
foreach (array_keys($jsonData[$index9]['S']['detail']) as $index33) {
    
$model->calculateResults[$index9]->calculate->S->detail[$index33] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['S']['detail'][$index33]['name'])) {
    $model->calculateResults[$index9]->calculate->S->detail[$index33]->name = $jsonData[$index9]['S']['detail'][$index33]['name'];

}
if (isset($jsonData[$index9]['S']['detail'][$index33]['code'])) {
    $model->calculateResults[$index9]->calculate->S->detail[$index33]->code = $jsonData[$index9]['S']['detail'][$index33]['code'];

}
if (isset($jsonData[$index9]['S']['detail'][$index33]['price'])) {
    $model->calculateResults[$index9]->calculate->S->detail[$index33]->price = $jsonData[$index9]['S']['detail'][$index33]['price'];

}


}

}


}
if (isset($jsonData[$index9]['M'])) {
    
$model->calculateResults[$index9]->calculate->M = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['M']['name'])) {
    $model->calculateResults[$index9]->calculate->M->name = $jsonData[$index9]['M']['name'];

}
if (isset($jsonData[$index9]['M']['cost'])) {
    $model->calculateResults[$index9]->calculate->M->cost = $jsonData[$index9]['M']['cost'];

}
if (isset($jsonData[$index9]['M']['time'])) {
    $model->calculateResults[$index9]->calculate->M->time = $jsonData[$index9]['M']['time'];

}
if (isset($jsonData[$index9]['M']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->M->currency_code = $jsonData[$index9]['M']['currency_code'];

}
if (isset($jsonData[$index9]['M']['detail'])) {
    $model->calculateResults[$index9]->calculate->M->detail = [];
foreach (array_keys($jsonData[$index9]['M']['detail']) as $index33) {
    
$model->calculateResults[$index9]->calculate->M->detail[$index33] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['M']['detail'][$index33]['name'])) {
    $model->calculateResults[$index9]->calculate->M->detail[$index33]->name = $jsonData[$index9]['M']['detail'][$index33]['name'];

}
if (isset($jsonData[$index9]['M']['detail'][$index33]['code'])) {
    $model->calculateResults[$index9]->calculate->M->detail[$index33]->code = $jsonData[$index9]['M']['detail'][$index33]['code'];

}
if (isset($jsonData[$index9]['M']['detail'][$index33]['price'])) {
    $model->calculateResults[$index9]->calculate->M->detail[$index33]->price = $jsonData[$index9]['M']['detail'][$index33]['price'];

}


}

}


}
if (isset($jsonData[$index9]['L'])) {
    
$model->calculateResults[$index9]->calculate->L = new service\KitAPI\Model\Entity\Order\CalculateResultType();
if (isset($jsonData[$index9]['L']['name'])) {
    $model->calculateResults[$index9]->calculate->L->name = $jsonData[$index9]['L']['name'];

}
if (isset($jsonData[$index9]['L']['cost'])) {
    $model->calculateResults[$index9]->calculate->L->cost = $jsonData[$index9]['L']['cost'];

}
if (isset($jsonData[$index9]['L']['time'])) {
    $model->calculateResults[$index9]->calculate->L->time = $jsonData[$index9]['L']['time'];

}
if (isset($jsonData[$index9]['L']['currency_code'])) {
    $model->calculateResults[$index9]->calculate->L->currency_code = $jsonData[$index9]['L']['currency_code'];

}
if (isset($jsonData[$index9]['L']['detail'])) {
    $model->calculateResults[$index9]->calculate->L->detail = [];
foreach (array_keys($jsonData[$index9]['L']['detail']) as $index33) {
    
$model->calculateResults[$index9]->calculate->L->detail[$index33] = new service\KitAPI\Model\Entity\Order\CalculateService();
if (isset($jsonData[$index9]['L']['detail'][$index33]['name'])) {
    $model->calculateResults[$index9]->calculate->L->detail[$index33]->name = $jsonData[$index9]['L']['detail'][$index33]['name'];

}
if (isset($jsonData[$index9]['L']['detail'][$index33]['code'])) {
    $model->calculateResults[$index9]->calculate->L->detail[$index33]->code = $jsonData[$index9]['L']['detail'][$index33]['code'];

}
if (isset($jsonData[$index9]['L']['detail'][$index33]['price'])) {
    $model->calculateResults[$index9]->calculate->L->detail[$index33]->price = $jsonData[$index9]['L']['detail'][$index33]['price'];

}


}

}


}


}


}

}



    return $model;
}
