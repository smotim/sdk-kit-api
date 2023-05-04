<?php

function deserialize_service_KitAPI_Model_Entity_Order_Debitor(array $jsonData): service\KitAPI\Model\Entity\Order\Debitor
{
    
$model = new service\KitAPI\Model\Entity\Order\Debitor();
if (isset($jsonData['debitor'])) {
    $model->debitor = $jsonData['debitor'];

}
if (isset($jsonData['debitor_type'])) {
    $model->debitor_type = $jsonData['debitor_type'];

}
if (isset($jsonData['country_code'])) {
    $model->country_code = $jsonData['country_code'];

}
if (isset($jsonData['real_country'])) {
    $model->real_country = $jsonData['real_country'];

}
if (isset($jsonData['real_city'])) {
    $model->real_city = $jsonData['real_city'];

}
if (isset($jsonData['real_street'])) {
    $model->real_street = $jsonData['real_street'];

}
if (isset($jsonData['real_house'])) {
    $model->real_housee = $jsonData['real_house'];

}
if (isset($jsonData['real_supp'])) {
    $model->real_supp = $jsonData['real_supp'];

}
if (isset($jsonData['real_room'])) {
    $model->real_room = $jsonData['real_room'];

}
if (isset($jsonData['real_contact_name'])) {
    $model->real_contact_name = $jsonData['real_contact_name'];

}
if (isset($jsonData['real_contact_phone'])) {
    $model->real_contact_phone = $jsonData['real_contact_phone'];

}
if (isset($jsonData['name_ip'])) {
    $model->name_ip = $jsonData['name_ip'];

}
if (isset($jsonData['organization_name_ip'])) {
    $model->organization_name_ip = $jsonData['organization_name_ip'];

}
if (isset($jsonData['organization_phone_ip'])) {
    $model->organization_phone_ip = $jsonData['organization_phone_ip'];

}
if (isset($jsonData['phone_ip'])) {
    $model->phone_ip = $jsonData['phone_ip'];

}
if (isset($jsonData['inn_ip'])) {
    $model->inn_ip = $jsonData['inn_ip'];

}
if (isset($jsonData['unp_ip'])) {
    $model->unp_ip = $jsonData['unp_ip'];

}
if (isset($jsonData['legal_country'])) {
    $model->legal_country = $jsonData['legal_country'];

}
if (isset($jsonData['legal_city'])) {
    $model->legal_city = $jsonData['legal_city'];

}
if (isset($jsonData['legal_street'])) {
    $model->legal_street = $jsonData['legal_street'];

}
if (isset($jsonData['legal_house'])) {
    $model->legal_house = $jsonData['legal_house'];

}
if (isset($jsonData['legal_supp'])) {
    $model->legal_supp = $jsonData['legal_supp'];

}
if (isset($jsonData['legal_room'])) {
    $model->legal_room = $jsonData['legal_room'];

}
if (isset($jsonData['iin'])) {
    $model->iin = $jsonData['iin'];

}
if (isset($jsonData['kpp'])) {
    $model->kpp = $jsonData['kpp'];

}
if (isset($jsonData['name_ur'])) {
    $model->name_ur = $jsonData['name_ur'];

}
if (isset($jsonData['organization_name_ur'])) {
    $model->organization_name_ur = $jsonData['organization_name_ur'];

}
if (isset($jsonData['organization_phone_ur'])) {
    $model->organization_phone_ur = $jsonData['organization_phone_ur'];

}
if (isset($jsonData['phone_ur'])) {
    $model->phone_ur = $jsonData['phone_ur'];

}
if (isset($jsonData['unp_ur'])) {
    $model->unp_ur = $jsonData['unp_ur'];

}
if (isset($jsonData['inn_ur'])) {
    $model->inn_ur = $jsonData['inn_ur'];

}
if (isset($jsonData['bin'])) {
    $model->bin = $jsonData['bin'];

}



    return $model;
}
