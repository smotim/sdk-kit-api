<?php

function serialize_service_KitAPI_Model_Entity_Order_OrderResult(service\KitAPI\Model\Entity\Order\OrderResult $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
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
if (null !== $model->from) {
    $jsonData["from"] = [];
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
if (null !== $model->contact_from) {
    $jsonData["contact_from"] = [];
if (null !== $model->contact_from->locality) {
    $jsonData["contact_from"]["locality"] = $model->contact_from->locality;
}
if (null !== $model->contact_from->name) {
    $jsonData["contact_from"]["name"] = $model->contact_from->name;
}
if (null !== $model->contact_from->phone) {
    $jsonData["contact_from"]["phone"] = $model->contact_from->phone;
}
if (null !== $model->contact_from->time_work) {
    $jsonData["contact_from"]["time_work"] = $model->contact_from->time_work;
}

if (0 === \count($jsonData["contact_from"])) {
    $jsonData["contact_from"] = $emptyObject;
}

}
if (null !== $model->contact_to) {
    $jsonData["contact_to"] = [];
if (null !== $model->contact_to->locality) {
    $jsonData["contact_to"]["locality"] = $model->contact_to->locality;
}
if (null !== $model->contact_to->name) {
    $jsonData["contact_to"]["name"] = $model->contact_to->name;
}
if (null !== $model->contact_to->phone) {
    $jsonData["contact_to"]["phone"] = $model->contact_to->phone;
}
if (null !== $model->contact_to->time_work) {
    $jsonData["contact_to"]["time_work"] = $model->contact_to->time_work;
}

if (0 === \count($jsonData["contact_to"])) {
    $jsonData["contact_to"] = $emptyObject;
}

}
if (null !== $model->about_cargo) {
    $jsonData["about_cargo"] = [];
if (null !== $model->about_cargo->places) {
    $jsonData["about_cargo"]["places"] = $model->about_cargo->places;
}
if (null !== $model->about_cargo->weight) {
    $jsonData["about_cargo"]["weight"] = $model->about_cargo->weight;
}
if (null !== $model->about_cargo->weight_unit) {
    $jsonData["about_cargo"]["weight_unit"] = $model->about_cargo->weight_unit;
}
if (null !== $model->about_cargo->volume) {
    $jsonData["about_cargo"]["volume"] = $model->about_cargo->volume;
}
if (null !== $model->about_cargo->volume_unit) {
    $jsonData["about_cargo"]["volume_unit"] = $model->about_cargo->volume_unit;
}

if (0 === \count($jsonData["about_cargo"])) {
    $jsonData["about_cargo"] = $emptyObject;
}

}
if (null !== $model->total) {
    $jsonData["total"] = [];
if (null !== $model->total->nds) {
    $jsonData["total"]["nds"] = $model->total->nds;
}
if (null !== $model->total->price) {
    $jsonData["total"]["price"] = $model->total->price;
}
if (null !== $model->total->route) {
    $jsonData["total"]["route"] = $model->total->route;
}
if (null !== $model->total->comment) {
    $jsonData["total"]["comment"] = $model->total->comment;
}
if (null !== $model->total->cargo_number) {
    $jsonData["total"]["cargo_number"] = $model->total->cargo_number;
}

if (0 === \count($jsonData["total"])) {
    $jsonData["total"] = $emptyObject;
}

}
if (null !== $model->service) {
    $jsonData["service"] = [];
if (null !== $model->service->nds) {
    $jsonData["service"]["nds"] = $model->service->nds;
}
if (null !== $model->service->price) {
    $jsonData["service"]["price"] = $model->service->price;
}
if (null !== $model->service->quantity) {
    $jsonData["service"]["quantity"] = $model->service->quantity;
}
if (null !== $model->service->name) {
    $jsonData["service"]["name"] = $model->service->name;
}
if (null !== $model->service->currency_code) {
    $jsonData["service"]["currency_code"] = $model->service->currency_code;
}
if (null !== $model->service->payer_debitor) {
    $jsonData["service"]["payer_debitor"] = $model->service->payer_debitor;
}
if (null !== $model->service->payer_short_name) {
    $jsonData["service"]["payer_short_name"] = $model->service->payer_short_name;
}

if (0 === \count($jsonData["service"])) {
    $jsonData["service"] = $emptyObject;
}

}
if (null !== $model->status) {
    $jsonData["status"] = [];
if (null !== $model->status->date) {
    $jsonData["status"]["date"] = $model->status->date;
}
if (null !== $model->status->time) {
    $jsonData["status"]["time"] = $model->status->time;
}
if (null !== $model->status->name) {
    $jsonData["status"]["name"] = $model->status->name;
}
if (null !== $model->status->code) {
    $jsonData["status"]["code"] = $model->status->code;
}

if (0 === \count($jsonData["status"])) {
    $jsonData["status"] = $emptyObject;
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
if (null !== $model->pickup_address) {
    $jsonData["pickup_address"] = $model->pickup_address;
}
if (null !== $model->delivery_address) {
    $jsonData["delivery_address"] = $model->delivery_address;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
