<?php

function deserialize_service_KitAPI_Model_Response_Order_GetOrderResponse(array $jsonData): service\KitAPI\Model\Response\Order\GetOrderResponse
{
    
$model = new service\KitAPI\Model\Response\Order\GetOrderResponse();
if (isset($jsonData['customer'])) {
    
$model->customer = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData['customer']['debitor'])) {
    $model->customer->debitor = $jsonData['customer']['debitor'];

}
if (isset($jsonData['customer']['name'])) {
    $model->customer->name = $jsonData['customer']['name'];

}
if (isset($jsonData['customer']['short_name'])) {
    $model->customer->short_name = $jsonData['customer']['short_name'];

}
if (isset($jsonData['customer']['inn'])) {
    $model->customer->inn = $jsonData['customer']['inn'];

}
if (isset($jsonData['customer']['kpp'])) {
    $model->customer->kpp = $jsonData['customer']['kpp'];

}
if (isset($jsonData['customer']['status'])) {
    $model->customer->status = $jsonData['customer']['status'];

}
if (isset($jsonData['customer']['phone'])) {
    $model->customer->phone = $jsonData['customer']['phone'];

}
if (isset($jsonData['customer']['actual_address'])) {
    $model->customer->actual_address = $jsonData['customer']['actual_address'];

}
if (isset($jsonData['customer']['legal_address'])) {
    $model->customer->legal_address = $jsonData['customer']['legal_address'];

}


}
if (isset($jsonData['sender'])) {
    
$model->sender = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData['sender']['debitor'])) {
    $model->sender->debitor = $jsonData['sender']['debitor'];

}
if (isset($jsonData['sender']['name'])) {
    $model->sender->name = $jsonData['sender']['name'];

}
if (isset($jsonData['sender']['short_name'])) {
    $model->sender->short_name = $jsonData['sender']['short_name'];

}
if (isset($jsonData['sender']['inn'])) {
    $model->sender->inn = $jsonData['sender']['inn'];

}
if (isset($jsonData['sender']['kpp'])) {
    $model->sender->kpp = $jsonData['sender']['kpp'];

}
if (isset($jsonData['sender']['status'])) {
    $model->sender->status = $jsonData['sender']['status'];

}
if (isset($jsonData['sender']['phone'])) {
    $model->sender->phone = $jsonData['sender']['phone'];

}
if (isset($jsonData['sender']['actual_address'])) {
    $model->sender->actual_address = $jsonData['sender']['actual_address'];

}
if (isset($jsonData['sender']['legal_address'])) {
    $model->sender->legal_address = $jsonData['sender']['legal_address'];

}


}
if (isset($jsonData['recipient'])) {
    
$model->recipient = new service\KitAPI\Model\Entity\Order\Partner();
if (isset($jsonData['recipient']['debitor'])) {
    $model->recipient->debitor = $jsonData['recipient']['debitor'];

}
if (isset($jsonData['recipient']['name'])) {
    $model->recipient->name = $jsonData['recipient']['name'];

}
if (isset($jsonData['recipient']['short_name'])) {
    $model->recipient->short_name = $jsonData['recipient']['short_name'];

}
if (isset($jsonData['recipient']['inn'])) {
    $model->recipient->inn = $jsonData['recipient']['inn'];

}
if (isset($jsonData['recipient']['kpp'])) {
    $model->recipient->kpp = $jsonData['recipient']['kpp'];

}
if (isset($jsonData['recipient']['status'])) {
    $model->recipient->status = $jsonData['recipient']['status'];

}
if (isset($jsonData['recipient']['phone'])) {
    $model->recipient->phone = $jsonData['recipient']['phone'];

}
if (isset($jsonData['recipient']['actual_address'])) {
    $model->recipient->actual_address = $jsonData['recipient']['actual_address'];

}
if (isset($jsonData['recipient']['legal_address'])) {
    $model->recipient->legal_address = $jsonData['recipient']['legal_address'];

}


}
if (isset($jsonData['from'])) {
    
$model->from = new service\KitAPI\Model\Entity\Order\CityGetList();
if (isset($jsonData['from']['country_code'])) {
    $model->from->country_code = $jsonData['from']['country_code'];

}
if (isset($jsonData['from']['region_code'])) {
    $model->from->region_code = $jsonData['from']['region_code'];

}
if (isset($jsonData['from']['code'])) {
    $model->from->code = $jsonData['from']['code'];

}
if (isset($jsonData['from']['name'])) {
    $model->from->name = $jsonData['from']['name'];

}
if (isset($jsonData['from']['type'])) {
    $model->from->type = $jsonData['from']['type'];

}


}
if (isset($jsonData['to'])) {
    
$model->to = new service\KitAPI\Model\Entity\Order\CityGetList();
if (isset($jsonData['to']['country_code'])) {
    $model->to->country_code = $jsonData['to']['country_code'];

}
if (isset($jsonData['to']['region_code'])) {
    $model->to->region_code = $jsonData['to']['region_code'];

}
if (isset($jsonData['to']['code'])) {
    $model->to->code = $jsonData['to']['code'];

}
if (isset($jsonData['to']['name'])) {
    $model->to->name = $jsonData['to']['name'];

}
if (isset($jsonData['to']['type'])) {
    $model->to->type = $jsonData['to']['type'];

}


}
if (isset($jsonData['contact_from'])) {
    
$model->contact_from = new service\KitAPI\Model\Entity\Order\Contact();
if (isset($jsonData['contact_from']['locality'])) {
    $model->contact_from->locality = $jsonData['contact_from']['locality'];

}
if (isset($jsonData['contact_from']['name'])) {
    $model->contact_from->name = $jsonData['contact_from']['name'];

}
if (isset($jsonData['contact_from']['phone'])) {
    $model->contact_from->phone = $jsonData['contact_from']['phone'];

}
if (isset($jsonData['contact_from']['time_work'])) {
    $model->contact_from->time_work = $jsonData['contact_from']['time_work'];

}


}
if (isset($jsonData['contact_to'])) {
    
$model->contact_to = new service\KitAPI\Model\Entity\Order\Contact();
if (isset($jsonData['contact_to']['locality'])) {
    $model->contact_to->locality = $jsonData['contact_to']['locality'];

}
if (isset($jsonData['contact_to']['name'])) {
    $model->contact_to->name = $jsonData['contact_to']['name'];

}
if (isset($jsonData['contact_to']['phone'])) {
    $model->contact_to->phone = $jsonData['contact_to']['phone'];

}
if (isset($jsonData['contact_to']['time_work'])) {
    $model->contact_to->time_work = $jsonData['contact_to']['time_work'];

}


}
if (isset($jsonData['about_cargo'])) {
    
$model->about_cargo = new service\KitAPI\Model\Entity\Order\OrderCargo();
if (isset($jsonData['about_cargo']['places'])) {
    $model->about_cargo->places = $jsonData['about_cargo']['places'];

}
if (isset($jsonData['about_cargo']['weight'])) {
    $model->about_cargo->weight = (float) $jsonData['about_cargo']['weight'];

}
if (isset($jsonData['about_cargo']['weight_unit'])) {
    $model->about_cargo->weight_unit = $jsonData['about_cargo']['weight_unit'];

}
if (isset($jsonData['about_cargo']['volume'])) {
    $model->about_cargo->volume = (float) $jsonData['about_cargo']['volume'];

}
if (isset($jsonData['about_cargo']['volume_unit'])) {
    $model->about_cargo->volume_unit = $jsonData['about_cargo']['volume_unit'];

}


}
if (isset($jsonData['total'])) {
    
$model->total = new service\KitAPI\Model\Entity\Order\OrderTotal();
if (isset($jsonData['total']['nds'])) {
    $model->total->nds = (float) $jsonData['total']['nds'];

}
if (isset($jsonData['total']['price'])) {
    $model->total->price = (float) $jsonData['total']['price'];

}
if (isset($jsonData['total']['route'])) {
    $model->total->route = $jsonData['total']['route'];

}
if (isset($jsonData['total']['comment'])) {
    $model->total->comment = $jsonData['total']['comment'];

}
if (isset($jsonData['total']['cargo_number'])) {
    $model->total->cargo_number = $jsonData['total']['cargo_number'];

}


}
if (isset($jsonData['payment'])) {
    
$model->payment = new service\KitAPI\Model\Entity\Order\Payment();
if (isset($jsonData['payment']['code'])) {
    $model->payment->code = $jsonData['payment']['code'];

}
if (isset($jsonData['payment']['name'])) {
    $model->payment->name = $jsonData['payment']['name'];

}


}
if (isset($jsonData['pickup_address'])) {
    $model->pickup_address = $jsonData['pickup_address'];

}
if (isset($jsonData['delivery_address'])) {
    $model->delivery_address = $jsonData['delivery_address'];

}
if (isset($jsonData['service'])) {
    $model->service = [];
foreach (array_keys($jsonData['service']) as $index20) {
    
$model->service[$index20] = new service\KitAPI\Model\Entity\Order\OrderService();
if (isset($jsonData['service'][$index20]['nds'])) {
    $model->service[$index20]->nds = (float) $jsonData['service'][$index20]['nds'];

}
if (isset($jsonData['service'][$index20]['price'])) {
    $model->service[$index20]->price = (float) $jsonData['service'][$index20]['price'];

}
if (isset($jsonData['service'][$index20]['quantity'])) {
    $model->service[$index20]->quantity = $jsonData['service'][$index20]['quantity'];

}
if (isset($jsonData['service'][$index20]['name'])) {
    $model->service[$index20]->name = $jsonData['service'][$index20]['name'];

}
if (isset($jsonData['service'][$index20]['currency_code'])) {
    $model->service[$index20]->currency_code = $jsonData['service'][$index20]['currency_code'];

}
if (isset($jsonData['service'][$index20]['payer_debitor'])) {
    $model->service[$index20]->payer_debitor = $jsonData['service'][$index20]['payer_debitor'];

}
if (isset($jsonData['service'][$index20]['payer_short_name'])) {
    $model->service[$index20]->payer_short_name = $jsonData['service'][$index20]['payer_short_name'];

}


}

}
if (isset($jsonData['status'])) {
    $model->status = [];
foreach (array_keys($jsonData['status']) as $index19) {
    
$model->status[$index19] = new service\KitAPI\Model\Entity\Order\Status();
if (isset($jsonData['status'][$index19]['date'])) {
    $model->status[$index19]->date = $jsonData['status'][$index19]['date'];

}
if (isset($jsonData['status'][$index19]['time'])) {
    $model->status[$index19]->time = $jsonData['status'][$index19]['time'];

}
if (isset($jsonData['status'][$index19]['name'])) {
    $model->status[$index19]->name = $jsonData['status'][$index19]['name'];

}
if (isset($jsonData['status'][$index19]['code'])) {
    $model->status[$index19]->code = $jsonData['status'][$index19]['code'];

}


}

}



    return $model;
}
