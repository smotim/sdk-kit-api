<?php

function serialize_service_KitAPI_Model_Response_Order_GetListOrderResponse(service\KitAPI\Model\Response\Order\GetListOrderResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->orders) {
    $index16Array = $model->orders;
if ($model->orders instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->orders->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->orders[$index16]->sale_number) {
    $jsonData["hidden_array"][$index16]["sale_number"] = $model->orders[$index16]->sale_number;
}
if (null !== $model->orders[$index16]->cargo_number) {
    $jsonData["hidden_array"][$index16]["cargo_number"] = $model->orders[$index16]->cargo_number;
}
if (null !== $model->orders[$index16]->date) {
    $jsonData["hidden_array"][$index16]["date"] = $model->orders[$index16]->date;
}
if (null !== $model->orders[$index16]->time) {
    $jsonData["hidden_array"][$index16]["time"] = $model->orders[$index16]->time;
}
if (null !== $model->orders[$index16]->price) {
    $jsonData["hidden_array"][$index16]["price"] = $model->orders[$index16]->price;
}
if (null !== $model->orders[$index16]->currency_code) {
    $jsonData["hidden_array"][$index16]["currency_code"] = $model->orders[$index16]->currency_code;
}
if (null !== $model->orders[$index16]->customer) {
    $jsonData["hidden_array"][$index16]["customer"] = [];
if (null !== $model->orders[$index16]->customer->debitor) {
    $jsonData["hidden_array"][$index16]["customer"]["debitor"] = $model->orders[$index16]->customer->debitor;
}
if (null !== $model->orders[$index16]->customer->name) {
    $jsonData["hidden_array"][$index16]["customer"]["name"] = $model->orders[$index16]->customer->name;
}
if (null !== $model->orders[$index16]->customer->short_name) {
    $jsonData["hidden_array"][$index16]["customer"]["short_name"] = $model->orders[$index16]->customer->short_name;
}
if (null !== $model->orders[$index16]->customer->inn) {
    $jsonData["hidden_array"][$index16]["customer"]["inn"] = $model->orders[$index16]->customer->inn;
}
if (null !== $model->orders[$index16]->customer->kpp) {
    $jsonData["hidden_array"][$index16]["customer"]["kpp"] = $model->orders[$index16]->customer->kpp;
}
if (null !== $model->orders[$index16]->customer->status) {
    $jsonData["hidden_array"][$index16]["customer"]["status"] = $model->orders[$index16]->customer->status;
}
if (null !== $model->orders[$index16]->customer->phone) {
    $jsonData["hidden_array"][$index16]["customer"]["phone"] = $model->orders[$index16]->customer->phone;
}
if (null !== $model->orders[$index16]->customer->actual_address) {
    $jsonData["hidden_array"][$index16]["customer"]["actual_address"] = $model->orders[$index16]->customer->actual_address;
}
if (null !== $model->orders[$index16]->customer->legal_address) {
    $jsonData["hidden_array"][$index16]["customer"]["legal_address"] = $model->orders[$index16]->customer->legal_address;
}

if (0 === \count($jsonData["hidden_array"][$index16]["customer"])) {
    $jsonData["hidden_array"][$index16]["customer"] = $emptyObject;
}

}
if (null !== $model->orders[$index16]->sender) {
    $jsonData["hidden_array"][$index16]["sender"] = [];
if (null !== $model->orders[$index16]->sender->debitor) {
    $jsonData["hidden_array"][$index16]["sender"]["debitor"] = $model->orders[$index16]->sender->debitor;
}
if (null !== $model->orders[$index16]->sender->name) {
    $jsonData["hidden_array"][$index16]["sender"]["name"] = $model->orders[$index16]->sender->name;
}
if (null !== $model->orders[$index16]->sender->short_name) {
    $jsonData["hidden_array"][$index16]["sender"]["short_name"] = $model->orders[$index16]->sender->short_name;
}
if (null !== $model->orders[$index16]->sender->inn) {
    $jsonData["hidden_array"][$index16]["sender"]["inn"] = $model->orders[$index16]->sender->inn;
}
if (null !== $model->orders[$index16]->sender->kpp) {
    $jsonData["hidden_array"][$index16]["sender"]["kpp"] = $model->orders[$index16]->sender->kpp;
}
if (null !== $model->orders[$index16]->sender->status) {
    $jsonData["hidden_array"][$index16]["sender"]["status"] = $model->orders[$index16]->sender->status;
}
if (null !== $model->orders[$index16]->sender->phone) {
    $jsonData["hidden_array"][$index16]["sender"]["phone"] = $model->orders[$index16]->sender->phone;
}
if (null !== $model->orders[$index16]->sender->actual_address) {
    $jsonData["hidden_array"][$index16]["sender"]["actual_address"] = $model->orders[$index16]->sender->actual_address;
}
if (null !== $model->orders[$index16]->sender->legal_address) {
    $jsonData["hidden_array"][$index16]["sender"]["legal_address"] = $model->orders[$index16]->sender->legal_address;
}

if (0 === \count($jsonData["hidden_array"][$index16]["sender"])) {
    $jsonData["hidden_array"][$index16]["sender"] = $emptyObject;
}

}
if (null !== $model->orders[$index16]->recipient) {
    $jsonData["hidden_array"][$index16]["recipient"] = [];
if (null !== $model->orders[$index16]->recipient->debitor) {
    $jsonData["hidden_array"][$index16]["recipient"]["debitor"] = $model->orders[$index16]->recipient->debitor;
}
if (null !== $model->orders[$index16]->recipient->name) {
    $jsonData["hidden_array"][$index16]["recipient"]["name"] = $model->orders[$index16]->recipient->name;
}
if (null !== $model->orders[$index16]->recipient->short_name) {
    $jsonData["hidden_array"][$index16]["recipient"]["short_name"] = $model->orders[$index16]->recipient->short_name;
}
if (null !== $model->orders[$index16]->recipient->inn) {
    $jsonData["hidden_array"][$index16]["recipient"]["inn"] = $model->orders[$index16]->recipient->inn;
}
if (null !== $model->orders[$index16]->recipient->kpp) {
    $jsonData["hidden_array"][$index16]["recipient"]["kpp"] = $model->orders[$index16]->recipient->kpp;
}
if (null !== $model->orders[$index16]->recipient->status) {
    $jsonData["hidden_array"][$index16]["recipient"]["status"] = $model->orders[$index16]->recipient->status;
}
if (null !== $model->orders[$index16]->recipient->phone) {
    $jsonData["hidden_array"][$index16]["recipient"]["phone"] = $model->orders[$index16]->recipient->phone;
}
if (null !== $model->orders[$index16]->recipient->actual_address) {
    $jsonData["hidden_array"][$index16]["recipient"]["actual_address"] = $model->orders[$index16]->recipient->actual_address;
}
if (null !== $model->orders[$index16]->recipient->legal_address) {
    $jsonData["hidden_array"][$index16]["recipient"]["legal_address"] = $model->orders[$index16]->recipient->legal_address;
}

if (0 === \count($jsonData["hidden_array"][$index16]["recipient"])) {
    $jsonData["hidden_array"][$index16]["recipient"] = $emptyObject;
}

}
if (null !== $model->orders[$index16]->payment) {
    $jsonData["hidden_array"][$index16]["payment"] = [];
if (null !== $model->orders[$index16]->payment->code) {
    $jsonData["hidden_array"][$index16]["payment"]["code"] = $model->orders[$index16]->payment->code;
}
if (null !== $model->orders[$index16]->payment->name) {
    $jsonData["hidden_array"][$index16]["payment"]["name"] = $model->orders[$index16]->payment->name;
}

if (0 === \count($jsonData["hidden_array"][$index16]["payment"])) {
    $jsonData["hidden_array"][$index16]["payment"] = $emptyObject;
}

}
if (null !== $model->orders[$index16]->from) {
    $jsonData["hidden_array"][$index16]["from"] = [];
if (null !== $model->orders[$index16]->from->country_code) {
    $jsonData["hidden_array"][$index16]["from"]["country_code"] = $model->orders[$index16]->from->country_code;
}
if (null !== $model->orders[$index16]->from->region_code) {
    $jsonData["hidden_array"][$index16]["from"]["region_code"] = $model->orders[$index16]->from->region_code;
}
if (null !== $model->orders[$index16]->from->code) {
    $jsonData["hidden_array"][$index16]["from"]["code"] = $model->orders[$index16]->from->code;
}
if (null !== $model->orders[$index16]->from->name) {
    $jsonData["hidden_array"][$index16]["from"]["name"] = $model->orders[$index16]->from->name;
}
if (null !== $model->orders[$index16]->from->type) {
    $jsonData["hidden_array"][$index16]["from"]["type"] = $model->orders[$index16]->from->type;
}

if (0 === \count($jsonData["hidden_array"][$index16]["from"])) {
    $jsonData["hidden_array"][$index16]["from"] = $emptyObject;
}

}
if (null !== $model->orders[$index16]->to) {
    $jsonData["hidden_array"][$index16]["to"] = [];
if (null !== $model->orders[$index16]->to->country_code) {
    $jsonData["hidden_array"][$index16]["to"]["country_code"] = $model->orders[$index16]->to->country_code;
}
if (null !== $model->orders[$index16]->to->region_code) {
    $jsonData["hidden_array"][$index16]["to"]["region_code"] = $model->orders[$index16]->to->region_code;
}
if (null !== $model->orders[$index16]->to->code) {
    $jsonData["hidden_array"][$index16]["to"]["code"] = $model->orders[$index16]->to->code;
}
if (null !== $model->orders[$index16]->to->name) {
    $jsonData["hidden_array"][$index16]["to"]["name"] = $model->orders[$index16]->to->name;
}
if (null !== $model->orders[$index16]->to->type) {
    $jsonData["hidden_array"][$index16]["to"]["type"] = $model->orders[$index16]->to->type;
}

if (0 === \count($jsonData["hidden_array"][$index16]["to"])) {
    $jsonData["hidden_array"][$index16]["to"] = $emptyObject;
}

}
if (null !== $model->orders[$index16]->status) {
    $index36Array = $model->orders[$index16]->status;
if ($model->orders[$index16]->status instanceof \Doctrine\Common\Collections\Collection) {
    $index36Array = $model->orders[$index16]->status->toArray();
}
    
$jsonData["hidden_array"][$index16]["status"] = [];
foreach (array_keys($index36Array) as $index36) {
    $jsonData["hidden_array"][$index16]["status"][$index36] = [];
if (null !== $model->orders[$index16]->status[$index36]->date) {
    $jsonData["hidden_array"][$index16]["status"][$index36]["date"] = $model->orders[$index16]->status[$index36]->date;
}
if (null !== $model->orders[$index16]->status[$index36]->time) {
    $jsonData["hidden_array"][$index16]["status"][$index36]["time"] = $model->orders[$index16]->status[$index36]->time;
}
if (null !== $model->orders[$index16]->status[$index36]->name) {
    $jsonData["hidden_array"][$index16]["status"][$index36]["name"] = $model->orders[$index16]->status[$index36]->name;
}
if (null !== $model->orders[$index16]->status[$index36]->code) {
    $jsonData["hidden_array"][$index16]["status"][$index36]["code"] = $model->orders[$index16]->status[$index36]->code;
}

if (0 === \count($jsonData["hidden_array"][$index16]["status"][$index36])) {
    $jsonData["hidden_array"][$index16]["status"][$index36] = $emptyObject;
}

}

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
