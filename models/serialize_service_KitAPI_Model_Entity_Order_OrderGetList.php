<?php

function serialize_service_KitAPI_Model_Entity_Order_OrderGetList(service\KitAPI\Model\Entity\Order\OrderGetList $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->sale_number) {
    $jsonData["sale_number"] = $model->sale_number;
}
if (null !== $model->cargo_number) {
    $jsonData["cargo_number"] = $model->cargo_number;
}
if (null !== $model->date) {
    $jsonData["date"] = $model->date;
}
if (null !== $model->time) {
    $jsonData["time"] = $model->time;
}
if (null !== $model->price) {
    $jsonData["price"] = $model->price;
}
if (null !== $model->currency_code) {
    $jsonData["currency_code"] = $model->currency_code;
}
if (null !== $model->customer) {
    $jsonData["customer"] = [];
if (null !== $model->customer->debitor) {
    $jsonData["customer"]["debitor"] = $model->customer->debitor;
}
if (null !== $model->customer->name) {
    $jsonData["customer"]["name"] = $model->customer->name;
}
if (null !== $model->customer->short_name) {
    $jsonData["customer"]["short_name"] = $model->customer->short_name;
}
if (null !== $model->customer->inn) {
    $jsonData["customer"]["inn"] = $model->customer->inn;
}
if (null !== $model->customer->kpp) {
    $jsonData["customer"]["kpp"] = $model->customer->kpp;
}
if (null !== $model->customer->status) {
    $jsonData["customer"]["status"] = $model->customer->status;
}
if (null !== $model->customer->phone) {
    $jsonData["customer"]["phone"] = $model->customer->phone;
}
if (null !== $model->customer->actual_address) {
    $jsonData["customer"]["actual_address"] = $model->customer->actual_address;
}
if (null !== $model->customer->legal_address) {
    $jsonData["customer"]["legal_address"] = $model->customer->legal_address;
}

if (0 === \count($jsonData["customer"])) {
    $jsonData["customer"] = $emptyObject;
}

}
if (null !== $model->sender) {
    $jsonData["sender"] = [];
if (null !== $model->sender->debitor) {
    $jsonData["sender"]["debitor"] = $model->sender->debitor;
}
if (null !== $model->sender->name) {
    $jsonData["sender"]["name"] = $model->sender->name;
}
if (null !== $model->sender->short_name) {
    $jsonData["sender"]["short_name"] = $model->sender->short_name;
}
if (null !== $model->sender->inn) {
    $jsonData["sender"]["inn"] = $model->sender->inn;
}
if (null !== $model->sender->kpp) {
    $jsonData["sender"]["kpp"] = $model->sender->kpp;
}
if (null !== $model->sender->status) {
    $jsonData["sender"]["status"] = $model->sender->status;
}
if (null !== $model->sender->phone) {
    $jsonData["sender"]["phone"] = $model->sender->phone;
}
if (null !== $model->sender->actual_address) {
    $jsonData["sender"]["actual_address"] = $model->sender->actual_address;
}
if (null !== $model->sender->legal_address) {
    $jsonData["sender"]["legal_address"] = $model->sender->legal_address;
}

if (0 === \count($jsonData["sender"])) {
    $jsonData["sender"] = $emptyObject;
}

}
if (null !== $model->recipient) {
    $jsonData["recipient"] = [];
if (null !== $model->recipient->debitor) {
    $jsonData["recipient"]["debitor"] = $model->recipient->debitor;
}
if (null !== $model->recipient->name) {
    $jsonData["recipient"]["name"] = $model->recipient->name;
}
if (null !== $model->recipient->short_name) {
    $jsonData["recipient"]["short_name"] = $model->recipient->short_name;
}
if (null !== $model->recipient->inn) {
    $jsonData["recipient"]["inn"] = $model->recipient->inn;
}
if (null !== $model->recipient->kpp) {
    $jsonData["recipient"]["kpp"] = $model->recipient->kpp;
}
if (null !== $model->recipient->status) {
    $jsonData["recipient"]["status"] = $model->recipient->status;
}
if (null !== $model->recipient->phone) {
    $jsonData["recipient"]["phone"] = $model->recipient->phone;
}
if (null !== $model->recipient->actual_address) {
    $jsonData["recipient"]["actual_address"] = $model->recipient->actual_address;
}
if (null !== $model->recipient->legal_address) {
    $jsonData["recipient"]["legal_address"] = $model->recipient->legal_address;
}

if (0 === \count($jsonData["recipient"])) {
    $jsonData["recipient"] = $emptyObject;
}

}
if (null !== $model->payment) {
    $jsonData["payment"] = [];
if (null !== $model->payment->code) {
    $jsonData["payment"]["code"] = $model->payment->code;
}
if (null !== $model->payment->name) {
    $jsonData["payment"]["name"] = $model->payment->name;
}

if (0 === \count($jsonData["payment"])) {
    $jsonData["payment"] = $emptyObject;
}

}
if (null !== $model->from) {
    $jsonData["from"] = [];
if (null !== $model->from->country_code) {
    $jsonData["from"]["country_code"] = $model->from->country_code;
}
if (null !== $model->from->region_code) {
    $jsonData["from"]["region_code"] = $model->from->region_code;
}
if (null !== $model->from->code) {
    $jsonData["from"]["code"] = $model->from->code;
}
if (null !== $model->from->name) {
    $jsonData["from"]["name"] = $model->from->name;
}
if (null !== $model->from->type) {
    $jsonData["from"]["type"] = $model->from->type;
}

if (0 === \count($jsonData["from"])) {
    $jsonData["from"] = $emptyObject;
}

}
if (null !== $model->to) {
    $jsonData["to"] = [];
if (null !== $model->to->country_code) {
    $jsonData["to"]["country_code"] = $model->to->country_code;
}
if (null !== $model->to->region_code) {
    $jsonData["to"]["region_code"] = $model->to->region_code;
}
if (null !== $model->to->code) {
    $jsonData["to"]["code"] = $model->to->code;
}
if (null !== $model->to->name) {
    $jsonData["to"]["name"] = $model->to->name;
}
if (null !== $model->to->type) {
    $jsonData["to"]["type"] = $model->to->type;
}

if (0 === \count($jsonData["to"])) {
    $jsonData["to"] = $emptyObject;
}

}
if (null !== $model->status) {
    $index10Array = $model->status;
if ($model->status instanceof \Doctrine\Common\Collections\Collection) {
    $index10Array = $model->status->toArray();
}
    
$jsonData["status"] = [];
foreach (array_keys($index10Array) as $index10) {
    $jsonData["status"][$index10] = [];
if (null !== $model->status[$index10]->date) {
    $jsonData["status"][$index10]["date"] = $model->status[$index10]->date;
}
if (null !== $model->status[$index10]->time) {
    $jsonData["status"][$index10]["time"] = $model->status[$index10]->time;
}
if (null !== $model->status[$index10]->name) {
    $jsonData["status"][$index10]["name"] = $model->status[$index10]->name;
}
if (null !== $model->status[$index10]->code) {
    $jsonData["status"][$index10]["code"] = $model->status[$index10]->code;
}

if (0 === \count($jsonData["status"][$index10])) {
    $jsonData["status"][$index10] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
