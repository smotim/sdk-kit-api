<?php

function serialize_service_KitAPI_Model_Entity_Order_Debitor(service\KitAPI\Model\Entity\Order\Debitor $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->debitor) {
    $jsonData["debitor"] = $model->debitor;
}
if (null !== $model->debitor_type) {
    $jsonData["debitor_type"] = $model->debitor_type;
}
if (null !== $model->country_code) {
    $jsonData["country_code"] = $model->country_code;
}
if (null !== $model->real_country) {
    $jsonData["real_country"] = $model->real_country;
}
if (null !== $model->real_city) {
    $jsonData["real_city"] = $model->real_city;
}
if (null !== $model->real_street) {
    $jsonData["real_street"] = $model->real_street;
}
if (null !== $model->real_housee) {
    $jsonData["real_house"] = $model->real_housee;
}
if (null !== $model->real_supp) {
    $jsonData["real_supp"] = $model->real_supp;
}
if (null !== $model->real_room) {
    $jsonData["real_room"] = $model->real_room;
}
if (null !== $model->real_contact_name) {
    $jsonData["real_contact_name"] = $model->real_contact_name;
}
if (null !== $model->real_contact_phone) {
    $jsonData["real_contact_phone"] = $model->real_contact_phone;
}
if (null !== $model->name_ip) {
    $jsonData["name_ip"] = $model->name_ip;
}
if (null !== $model->organization_name_ip) {
    $jsonData["organization_name_ip"] = $model->organization_name_ip;
}
if (null !== $model->organization_phone_ip) {
    $jsonData["organization_phone_ip"] = $model->organization_phone_ip;
}
if (null !== $model->phone_ip) {
    $jsonData["phone_ip"] = $model->phone_ip;
}
if (null !== $model->inn_ip) {
    $jsonData["inn_ip"] = $model->inn_ip;
}
if (null !== $model->unp_ip) {
    $jsonData["unp_ip"] = $model->unp_ip;
}
if (null !== $model->legal_country) {
    $jsonData["legal_country"] = $model->legal_country;
}
if (null !== $model->legal_city) {
    $jsonData["legal_city"] = $model->legal_city;
}
if (null !== $model->legal_street) {
    $jsonData["legal_street"] = $model->legal_street;
}
if (null !== $model->legal_house) {
    $jsonData["legal_house"] = $model->legal_house;
}
if (null !== $model->legal_supp) {
    $jsonData["legal_supp"] = $model->legal_supp;
}
if (null !== $model->legal_room) {
    $jsonData["legal_room"] = $model->legal_room;
}
if (null !== $model->iin) {
    $jsonData["iin"] = $model->iin;
}
if (null !== $model->kpp) {
    $jsonData["kpp"] = $model->kpp;
}
if (null !== $model->name_ur) {
    $jsonData["name_ur"] = $model->name_ur;
}
if (null !== $model->organization_name_ur) {
    $jsonData["organization_name_ur"] = $model->organization_name_ur;
}
if (null !== $model->organization_phone_ur) {
    $jsonData["organization_phone_ur"] = $model->organization_phone_ur;
}
if (null !== $model->phone_ur) {
    $jsonData["phone_ur"] = $model->phone_ur;
}
if (null !== $model->unp_ur) {
    $jsonData["unp_ur"] = $model->unp_ur;
}
if (null !== $model->inn_ur) {
    $jsonData["inn_ur"] = $model->inn_ur;
}
if (null !== $model->bin) {
    $jsonData["bin"] = $model->bin;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
