<?php

function deserialize_service_KitAPI_Model_Response_Order_GetListOrderResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetListOrderResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetListOrderResponse();
if (isset($jsonData)) {
    $model->orders = [];
foreach (array_keys($jsonData) as $index9) {
    
$model->orders[$index9] = new service\KitAPI\Model\Entity\Order\OrderGetList();
if (isset($jsonData[$index9]['sale_number'])) {
    $model->orders[$index9]->sale_number = $jsonData[$index9]['sale_number'];

}
if (isset($jsonData[$index9]['cargo_number'])) {
    $model->orders[$index9]->cargo_number = $jsonData[$index9]['cargo_number'];

}
if (isset($jsonData[$index9]['date'])) {
    $model->orders[$index9]->date = $jsonData[$index9]['date'];

}
if (isset($jsonData[$index9]['time'])) {
    $model->orders[$index9]->time = $jsonData[$index9]['time'];

}
if (isset($jsonData[$index9]['price'])) {
    $model->orders[$index9]->price = $jsonData[$index9]['price'];

}
if (isset($jsonData[$index9]['currency_code'])) {
    $model->orders[$index9]->currency_code = $jsonData[$index9]['currency_code'];

}
if (isset($jsonData[$index9]['customer'])) {
    
$model->orders[$index9]->customer = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData[$index9]['customer']['debitor'])) {
    $model->orders[$index9]->customer->debitor = $jsonData[$index9]['customer']['debitor'];

}
if (isset($jsonData[$index9]['customer']['name'])) {
    $model->orders[$index9]->customer->name = $jsonData[$index9]['customer']['name'];

}
if (isset($jsonData[$index9]['customer']['short_name'])) {
    $model->orders[$index9]->customer->short_name = $jsonData[$index9]['customer']['short_name'];

}
if (isset($jsonData[$index9]['customer']['inn'])) {
    $model->orders[$index9]->customer->inn = $jsonData[$index9]['customer']['inn'];

}
if (isset($jsonData[$index9]['customer']['kpp'])) {
    $model->orders[$index9]->customer->kpp = $jsonData[$index9]['customer']['kpp'];

}
if (isset($jsonData[$index9]['customer']['status'])) {
    $model->orders[$index9]->customer->status = $jsonData[$index9]['customer']['status'];

}
if (isset($jsonData[$index9]['customer']['phone'])) {
    $model->orders[$index9]->customer->phone = $jsonData[$index9]['customer']['phone'];

}
if (isset($jsonData[$index9]['customer']['actual_address'])) {
    $model->orders[$index9]->customer->actual_address = $jsonData[$index9]['customer']['actual_address'];

}
if (isset($jsonData[$index9]['customer']['legal_address'])) {
    $model->orders[$index9]->customer->legal_address = $jsonData[$index9]['customer']['legal_address'];

}


}
if (isset($jsonData[$index9]['sender'])) {
    
$model->orders[$index9]->sender = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData[$index9]['sender']['debitor'])) {
    $model->orders[$index9]->sender->debitor = $jsonData[$index9]['sender']['debitor'];

}
if (isset($jsonData[$index9]['sender']['name'])) {
    $model->orders[$index9]->sender->name = $jsonData[$index9]['sender']['name'];

}
if (isset($jsonData[$index9]['sender']['short_name'])) {
    $model->orders[$index9]->sender->short_name = $jsonData[$index9]['sender']['short_name'];

}
if (isset($jsonData[$index9]['sender']['inn'])) {
    $model->orders[$index9]->sender->inn = $jsonData[$index9]['sender']['inn'];

}
if (isset($jsonData[$index9]['sender']['kpp'])) {
    $model->orders[$index9]->sender->kpp = $jsonData[$index9]['sender']['kpp'];

}
if (isset($jsonData[$index9]['sender']['status'])) {
    $model->orders[$index9]->sender->status = $jsonData[$index9]['sender']['status'];

}
if (isset($jsonData[$index9]['sender']['phone'])) {
    $model->orders[$index9]->sender->phone = $jsonData[$index9]['sender']['phone'];

}
if (isset($jsonData[$index9]['sender']['actual_address'])) {
    $model->orders[$index9]->sender->actual_address = $jsonData[$index9]['sender']['actual_address'];

}
if (isset($jsonData[$index9]['sender']['legal_address'])) {
    $model->orders[$index9]->sender->legal_address = $jsonData[$index9]['sender']['legal_address'];

}


}
if (isset($jsonData[$index9]['recipient'])) {
    
$model->orders[$index9]->recipient = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData[$index9]['recipient']['debitor'])) {
    $model->orders[$index9]->recipient->debitor = $jsonData[$index9]['recipient']['debitor'];

}
if (isset($jsonData[$index9]['recipient']['name'])) {
    $model->orders[$index9]->recipient->name = $jsonData[$index9]['recipient']['name'];

}
if (isset($jsonData[$index9]['recipient']['short_name'])) {
    $model->orders[$index9]->recipient->short_name = $jsonData[$index9]['recipient']['short_name'];

}
if (isset($jsonData[$index9]['recipient']['inn'])) {
    $model->orders[$index9]->recipient->inn = $jsonData[$index9]['recipient']['inn'];

}
if (isset($jsonData[$index9]['recipient']['kpp'])) {
    $model->orders[$index9]->recipient->kpp = $jsonData[$index9]['recipient']['kpp'];

}
if (isset($jsonData[$index9]['recipient']['status'])) {
    $model->orders[$index9]->recipient->status = $jsonData[$index9]['recipient']['status'];

}
if (isset($jsonData[$index9]['recipient']['phone'])) {
    $model->orders[$index9]->recipient->phone = $jsonData[$index9]['recipient']['phone'];

}
if (isset($jsonData[$index9]['recipient']['actual_address'])) {
    $model->orders[$index9]->recipient->actual_address = $jsonData[$index9]['recipient']['actual_address'];

}
if (isset($jsonData[$index9]['recipient']['legal_address'])) {
    $model->orders[$index9]->recipient->legal_address = $jsonData[$index9]['recipient']['legal_address'];

}


}
if (isset($jsonData[$index9]['payment'])) {
    
$model->orders[$index9]->payment = new service\KitAPI\Model\Entity\Order\Payment();
if (isset($jsonData[$index9]['payment']['code'])) {
    $model->orders[$index9]->payment->code = $jsonData[$index9]['payment']['code'];

}
if (isset($jsonData[$index9]['payment']['name'])) {
    $model->orders[$index9]->payment->name = $jsonData[$index9]['payment']['name'];

}


}
if (isset($jsonData[$index9]['from'])) {
    
$model->orders[$index9]->from = new service\KitAPI\Model\Entity\Order\CityGetList();
if (isset($jsonData[$index9]['from']['country_code'])) {
    $model->orders[$index9]->from->country_code = $jsonData[$index9]['from']['country_code'];

}
if (isset($jsonData[$index9]['from']['region_code'])) {
    $model->orders[$index9]->from->region_code = $jsonData[$index9]['from']['region_code'];

}
if (isset($jsonData[$index9]['from']['code'])) {
    $model->orders[$index9]->from->code = $jsonData[$index9]['from']['code'];

}
if (isset($jsonData[$index9]['from']['name'])) {
    $model->orders[$index9]->from->name = $jsonData[$index9]['from']['name'];

}
if (isset($jsonData[$index9]['from']['type'])) {
    $model->orders[$index9]->from->type = $jsonData[$index9]['from']['type'];

}


}
if (isset($jsonData[$index9]['to'])) {
    
$model->orders[$index9]->to = new service\KitAPI\Model\Entity\Order\CityGetList();
if (isset($jsonData[$index9]['to']['country_code'])) {
    $model->orders[$index9]->to->country_code = $jsonData[$index9]['to']['country_code'];

}
if (isset($jsonData[$index9]['to']['region_code'])) {
    $model->orders[$index9]->to->region_code = $jsonData[$index9]['to']['region_code'];

}
if (isset($jsonData[$index9]['to']['code'])) {
    $model->orders[$index9]->to->code = $jsonData[$index9]['to']['code'];

}
if (isset($jsonData[$index9]['to']['name'])) {
    $model->orders[$index9]->to->name = $jsonData[$index9]['to']['name'];

}
if (isset($jsonData[$index9]['to']['type'])) {
    $model->orders[$index9]->to->type = $jsonData[$index9]['to']['type'];

}


}
if (isset($jsonData[$index9]['status'])) {
    $model->orders[$index9]->status = [];
foreach (array_keys($jsonData[$index9]['status']) as $index28) {
    
$model->orders[$index9]->status[$index28] = new service\KitAPI\Model\Entity\Order\Status();
if (isset($jsonData[$index9]['status'][$index28]['date'])) {
    $model->orders[$index9]->status[$index28]->date = $jsonData[$index9]['status'][$index28]['date'];

}
if (isset($jsonData[$index9]['status'][$index28]['time'])) {
    $model->orders[$index9]->status[$index28]->time = $jsonData[$index9]['status'][$index28]['time'];

}
if (isset($jsonData[$index9]['status'][$index28]['name'])) {
    $model->orders[$index9]->status[$index28]->name = $jsonData[$index9]['status'][$index28]['name'];

}
if (isset($jsonData[$index9]['status'][$index28]['code'])) {
    $model->orders[$index9]->status[$index28]->code = $jsonData[$index9]['status'][$index28]['code'];

}


}

}


}

}



    return $model;
}
