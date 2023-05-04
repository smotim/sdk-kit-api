<?php

require 'vendor/autoload.php';

//$client = \service\KitAPI\Factory\SimpleClientFactory::createClient('https://capi.tk-kit.com', 'K-Jay_E05v5w-EYw7snvmSNqQiZez-1M');
//$client = \service\KitAPI\Factory\SimpleClientFactory::createClient('https://capi.tk-kit.com', 'EOmSf-vWobu5aDK2fIZag-crnjYEIRq3');

$encoder = (new \service\KitAPI\Builder\FormEncoderBuilder())->build();

$client = (new \service\KitAPI\Builder\ClientBuilder())
    ->setApiUrl('https://capi.tk-kit.com')
    ->setAuthenticatorHandler(new \service\KitAPI\Handler\Request\HeaderAuthenticatorHandler('cL2Jgn11nJjw5EGsniUFuAj8JnD5q5Zy'))
    ->setFormEncoder($encoder)
    ->build();


$response = $client->profile->getList();


//$client->tdd->getListCity();
//$client->tdd->getListCountry();
//
//$request = new \service\KitAPI\Model\Request\Order\CreateRequest();
//
//$request->city_pickup_code = '7700000000';
//$request->city_delivery_code = "390000100000";
//$customer = new \service\KitAPI\Model\Entity\Order\Debitor();
//$customer->debitor = "0001012964";
//$sender = new \service\KitAPI\Model\Entity\Order\Debitor();
//$sender->debitor = "0001012964";
//$receiver = new \service\KitAPI\Model\Entity\Order\Debitor();
//$receiver->debitor_type = 3;
//$receiver->kpp = "390601001";
//$receiver->name_ur = "Станислав безфамилии безотчества";
//$receiver->organization_name_ur = "РОЯЛ КАРС ООО";
//$receiver->organization_phone_ur = "79673549732";
//$receiver->inn_ur = "3906318623";
//$receiver->phone_ur = "79673549732";
//$receiver->country_code = 'RU';
//
//$request->customer = $customer;
//$request->sender = $sender;
//$request->receiver = $receiver;
//$request->additional_payment_pickup = "SE";
//$request->additional_payment_shipping = "SE";
//$request->additional_payment_delivery = "SE";
//$request->type = 1;
//$request->declared_price = 17816;
//
//$place = new \service\KitAPI\Model\Entity\Order\Place();
//$place->count_place = 8;
//$place->weight = 73;
//$place->volume = 0.464;
//$service = ['S089'];
//$place->service = $service;
//
//$request->places[] = $place;
//$request->pick_up = 1;
//$request->pickup_date = "2023-03-20";
//$request->pickup_time_start = "12:00";
//$request->pickup_time_end = "16:00";
//$request->deliver = 0;
//$request->insurance = 0;
//$request->inner_track_number = 'F9062650';
//
//$request->confirmation_price = 1;
//$request->post_type = "02";
//$request->currency_code[] = 'RUB';
//
////$service = new \service\KitAPI\Model\Entity\Order\ServicePlace();
////$service->code = "S089";
////$place->service = [$service];
//
////$request->region_code = "66";
//
//
//
//$response = $client->order->create($request);

//foreach ($response->currencies as $currency) {
//    print_r($currency);
//}

print_r($response);

