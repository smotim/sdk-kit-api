<?php

namespace service\KitAPI\Tests\ResourceGroup;

use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Model\Entity\Order\Debitor;
use service\KitAPI\Model\Request\Order\CalculatePostRequest;
use service\KitAPI\Model\Request\Order\CalculateRequest;
use service\KitAPI\Model\Request\Order\CreatePostRequest;
use service\KitAPI\Model\Request\Order\CreateRequest;
use service\KitAPI\Model\Request\Order\GetDocumentRequest;
use service\KitAPI\Model\Request\Order\GetListOrderRequest;
use service\KitAPI\Model\Request\Order\GetOrderRequest;
use service\KitAPI\Model\Request\Order\GetPhotoRequest;
use service\KitAPI\Model\Request\Order\GetStatusRequest;
use service\KitAPI\Model\Request\Order\TimeDeliveryRequest;
use service\KitAPI\Model\Request\Tdd\SearchCodeCityRequest;
use service\KitAPI\TestUtils\Factory\TestClientFactory;
use service\KitAPI\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class OrderTest extends AbstractApiResourceGroupTestCase
{

    public function testGetListCurrency()
    {
        $json = <<<'EOF'
[
    {
        "code": "RUB",
        "name": "Российский Рубль",
        "short_name": "руб.",
        "country_code": "RU"
    },
    {
        "code": "KZT",
        "name": "Казахстанский тенге",
        "short_name": "тенге",
        "country_code": "KZ"
    },
    {
        "code": "BYN",
        "name": "Белорусский Рубль",
        "short_name": "бел. руб.",
        "country_code": "BY"
    },
    {
        "code": "AMD",
        "name": "Армянский драм",
        "short_name": "драм",
        "country_code": "AM"
    },
    {
        "code": "KGS",
        "name": "Киргизский сом",
        "short_name": "сом",
        "country_code": "KG"
    },
    {
        "code": "RUB",
        "name": "Российский Рубль",
        "short_name": "руб.",
        "country_code": "AB"
    }
]
EOF;

//        $request = new SearchCodeCityRequest('910200000400');
//        $request->code_city = '910200000400';
//        $request->kladr = '9100200000400';

        $mock = static::createApiMockBuilder('1.0/order/currency/get-list');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getListCurrency();

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testGetListService()
    {
        $json = <<<'EOF'
[
    {
        "code": "S026",
        "name": "Пломбирование"
    },
    {
        "code": "S036",
        "name": "Предоставление поддона"
    },
    {
        "code": "S037",
        "name": "Стрейчевание"
    },
    {
        "code": "S072",
        "name": "Подтверждение получения груза"
    },
    {
        "code": "S082",
        "name": "Растентовка при доставке"
    },
    {
        "code": "S083",
        "name": "Растентовка при заборе"
    },
    {
        "code": "S087",
        "name": "Упаковка в секьюрити пак"
    },
    {
        "code": "S089",
        "name": "Упаковка в сборный паллетный борт"
    },
    {
        "code": "S109",
        "name": "Упаковка в воздушно-пузырьковую пленку"
    },
    {
        "code": "T001",
        "name": "Жесткая доупаковка груза"
    },
    {
        "code": "T002",
        "name": "Паллетирование (прозр. пленка)"
    },
    {
        "code": "T003",
        "name": "Паллетирование (черн. пленка)"
    }
]
EOF;

//        $request = new SearchCodeCityRequest('910200000400');
//        $request->code_city = '910200000400';
//        $request->kladr = '9100200000400';

        $mock = static::createApiMockBuilder('1.0/order/service/get-list');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getListService();

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testTimeDelivery()
    {
        $json = <<<'EOF'
{
    "status": 1,
    "timestamp_result": "20230403110000",
    "date": "2023-04-03",
    "time": "11:00",
    "days": 8,
    "message": ""
}
EOF;

        $request = new TimeDeliveryRequest('518', '733', '2023-03-25 15:00:00', true, true, false);
        $request->delivery = 1;
        $request->pickup = 1;
        $request->hardpack = 0;

        $mock = static::createApiMockBuilder('1.0/order/time-delivery');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getTimeDelivery($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testGetOrder()
    {
        $json = <<<'EOF'
{
    "customer": {
        "debitor": "0001125813",
        "name": "Общество с ограниченной ответственностью \"Мосавтошина\"",
        "short_name": "Мосавтошина ООО",
        "inn": "7716761626",
        "kpp": "771501001",
        "status": "1",
        "phone": "+74959891412",
        "actual_address": "-",
        "legal_address": "-"
    },
    "sender": {
        "debitor": "0001125813",
        "name": "Общество с ограниченной ответственностью \"Мосавтошина\"",
        "short_name": "Мосавтошина ООО",
        "inn": "7716761626",
        "kpp": "771501001",
        "status": "1",
        "phone": "+74959891412",
        "actual_address": "-",
        "legal_address": "-"
    },
    "recipient": {
        "debitor": "0002471443",
        "name": "Дудник Николай Юрьевич",
        "short_name": "Дудник Николай Юрьевич",
        "inn": "",
        "kpp": "",
        "status": "2",
        "phone": "+79228743867",
        "actual_address": "-",
        "legal_address": "-"
    },
    "from": {
        "code": "770000000000",
        "name": "Москва",
        "type": "Город"
    },
    "to": {
        "code": "560000100000",
        "name": "Оренбург",
        "type": "Город"
    },
    "contact_from": {
        "locality": "Россия, г. Москва, Москва",
        "name": "",
        "phone": "+74959891412",
        "time_work": ""
    },
    "contact_to": {
        "locality": "г.Оренбург",
        "name": "",
        "phone": "+79228743867",
        "time_work": ""
    },
    "about_cargo": {
        "places": "8.0",
        "weight": "80.0",
        "weight_unit": "кг",
        "volume": "0.802",
        "volume_unit": "куб.м."
    },
    "total": {
        "nds": "476.84",
        "price": "2911.0",
        "route": "Москва-Оренбург",
        "comment": "",
        "cargo_number": "МСКОРБ0110815020"
    },
    "payment": {
        "name": "Не оплачено",
        "code": "2"
    },
    "pickup_address": "ул Бусиновская Горка",
    "delivery_address": "ул Братьев Башиловых, дом № 1",
    "service": [
        {
            "name": "Перевозка груза: Москва-Оренбург",
            "quantity": "8.0",
            "price": "352.63",
            "currency_code": "RUB",
            "payer_debitor": "0002471443",
            "payer_short_name": "Дудник Николай Юрьевич",
            "nds": "20.00"
        },
        {
            "name": "Возмещение страхования груза по объяв.ст",
            "quantity": "1.0",
            "price": "50.0",
            "currency_code": "RUB",
            "payer_debitor": "0002471443",
            "payer_short_name": "Дудник Николай Юрьевич",
            "nds": "0.00"
        },
        {
            "name": "Маркировка",
            "quantity": "8.0",
            "price": "5.0",
            "currency_code": "RUB",
            "payer_debitor": "0002471443",
            "payer_short_name": "Дудник Николай Юрьевич",
            "nds": "20.00"
        }
    ],
    "status": [
        {
            "date": "2023-03-01",
            "time": "13:25:30",
            "code": "00",
            "name": "Новый заказ"
        },
        {
            "date": "2023-03-02",
            "time": "13:21:20",
            "code": "01",
            "name": "Груз принят"
        },
        {
            "date": "2023-03-04",
            "time": "21:00:56",
            "code": "02",
            "name": "Отправлен"
        },
        {
            "date": "2023-03-07",
            "time": "10:14:46",
            "code": "03",
            "name": "Прибыл"
        },
        {
            "date": "2023-03-09",
            "time": "16:40:56",
            "code": "04",
            "name": "Выдан"
        }
    ]
}
EOF;

        $request = new GetOrderRequest('1130715045');
        $request->profile_id = 14;

        $mock = static::createApiMockBuilder('1.0/order/get');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getOrder($request);

        self::assertModelEqualsToResponse($json, $response);
    }


    public function testGetStatus()
    {
        $json = <<<'EOF'
{
    "status": [
        {
            "date": "2023-03-01",
            "time": "13:25:30",
            "code": "00",
            "name": "Новый заказ"
        },
        {
            "date": "2023-03-02",
            "time": "13:21:20",
            "code": "01",
            "name": "Груз принят"
        },
        {
            "date": "2023-03-04",
            "time": "21:00:56",
            "code": "02",
            "name": "Отправлен"
        },
        {
            "date": "2023-03-07",
            "time": "10:14:46",
            "code": "03",
            "name": "Прибыл"
        },
        {
            "date": "2023-03-09",
            "time": "16:40:56",
            "code": "04",
            "name": "Выдан"
        },
        {
            "date": "2023-03-09",
            "time": "16:40:56",
            "code": "04",
            "name": "Выдан"
        }
    ],
    "notice": "Можно получить c 2023-03-07",
    "address": "Город Оренбург, Улица Братьев Башиловых, д. 1",
    "phone": [
        "+73532486580"
    ],
    "from": "770000000000",
    "to": "560000100000",
    "schedule": "Пн-Пт – 09:00-19:00; Сб – 10:00-16:00"
}
EOF;

        $request = new GetStatusRequest('МСКОРБ0110815020');

        $mock = static::createApiMockBuilder('1.0/order/status/get');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getStatus($request);

        self::assertModelEqualsToResponse($json, $response);
    }


    public function testPhoto()
    {
        $json = <<<'EOF'
[
    {
        "data": "asjfladkngkadfg"
    }
]
EOF;

        $request = new GetPhotoRequest('1130715045', 1);

        $mock = static::createApiMockBuilder('1.0/order/photo/get');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getPhoto($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testDocument()
    {
        $json = <<<'EOF'
{
    "name": "Экспедиторская расписка",
    "data": "JVBERi0xLjYNJeLjz9MNCjUwOCAwIG9iago8PC9GaWx0ZXIvRmx"
}
EOF;

        $request = new GetDocumentRequest('1130574049', 1);

        $mock = static::createApiMockBuilder('1.0/order/document/get');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getDocument($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }


    public function testGetListOrder()
    {
        $json = <<<'EOF'
[
    {
        "sale_number": 1130943719,
        "cargo_number": "СПБЯКТ0111037112",
        "date": "2023-03-19",
        "time": "00:00:00",
        "price": "9375.0",
        "currency_code": "RUB",
        "customer": {
            "debitor": "0001125813",
            "short_name": "Общество с ограниченной ответственностью \"Мосавтошина\""
        },
        "sender": {
            "debitor": "0001125813",
            "short_name": "Общество с ограниченной ответственностью \"Мосавтошина\""
        },
        "recipient": {
            "debitor": "0900708683",
            "short_name": "Абраменко Сергей Владимирович"
        },
        "payment": {
            "code": "2",
            "name": "Выставлен"
        },
        "from": {
            "country_code": "RU",
            "region_code": "78",
            "code": "780000003351",
            "name": "Старо-Паново",
            "type": "Деревня"
        },
        "to": {
            "country_code": "RU",
            "region_code": "14",
            "code": "140000100000",
            "name": "Якутск",
            "type": "Город"
        },
        "status": [
            {
                "date": "2023-03-19",
                "time": "16:59:16",
                "code": "00",
                "name": "Новый заказ"
            },
            {
                "date": "2023-03-27",
                "time": "12:54:44",
                "code": "01",
                "name": "Груз принят"
            },
            {
                "date": "2023-03-28",
                "time": "21:14:03",
                "code": "02",
                "name": "Отправлен"
            },
            {
                "date": "2023-04-29",
                "time": "12:54:44",
                "code": "F1",
                "name": "Расчетная дата прибытия"
            }
        ]
    },
    {
        "sale_number": 1130943720,
        "cargo_number": "СПБНБЧ0111037118",
        "date": "2023-03-19",
        "time": "00:00:00",
        "price": "1460.0",
        "currency_code": "RUB",
        "customer": {
            "debitor": "0001125813",
            "short_name": "Общество с ограниченной ответственностью \"Мосавтошина\""
        },
        "sender": {
            "debitor": "0001125813",
            "short_name": "Общество с ограниченной ответственностью \"Мосавтошина\""
        },
        "recipient": {
            "debitor": "0900713788",
            "short_name": "Каримова Венера Рашитовна"
        },
        "payment": {
            "code": "2",
            "name": "Выставлен"
        },
        "from": {
            "country_code": "RU",
            "region_code": "78",
            "code": "780000003351",
            "name": "Старо-Паново",
            "type": "Деревня"
        },
        "to": {
            "country_code": "RU",
            "region_code": "16",
            "code": "160000200000",
            "name": "Набережные Челны",
            "type": "Город"
        },
        "status": [
            {
                "date": "2023-03-19",
                "time": "17:01:03",
                "code": "00",
                "name": "Новый заказ"
            },
            {
                "date": "2023-03-27",
                "time": "13:02:20",
                "code": "01",
                "name": "Груз принят"
            },
            {
                "date": "2023-03-28",
                "time": "08:29:46",
                "code": "02",
                "name": "Отправлен"
            },
            {
                "date": "2023-04-01",
                "time": "01:06:22",
                "code": "03",
                "name": "Прибыл"
            },
            {
                "date": "2023-04-05",
                "time": "12:16:37",
                "code": "04",
                "name": "Выдан"
            }
        ]
    },
    {
        "sale_number": 1130943721,
        "cargo_number": "СПБКШН0111037121",
        "date": "2023-03-19",
        "time": "00:00:00",
        "price": "3145.0",
        "currency_code": "RUB",
        "customer": {
            "debitor": "0001125813",
            "short_name": "Общество с ограниченной ответственностью \"Мосавтошина\""
        },
        "sender": {
            "debitor": "0001125813",
            "short_name": "Общество с ограниченной ответственностью \"Мосавтошина\""
        },
        "recipient": {
            "debitor": "0007819952",
            "short_name": "ТКАЧЕНКО АЛЕКСЕЙ ВЛАДИМИРОВИЧ"
        },
        "payment": {
            "code": "2",
            "name": "Выставлен"
        },
        "from": {
            "country_code": "RU",
            "region_code": "78",
            "code": "780000003351",
            "name": "Старо-Паново",
            "type": "Деревня"
        },
        "to": {
            "country_code": "RU",
            "region_code": "34",
            "code": "340000300000",
            "name": "Камышин",
            "type": "Город"
        },
        "status": [
            {
                "date": "2023-03-19",
                "time": "17:02:41",
                "code": "00",
                "name": "Новый заказ"
            },
            {
                "date": "2023-03-28",
                "time": "12:17:57",
                "code": "01",
                "name": "Груз принят"
            },
            {
                "date": "2023-04-02",
                "time": "08:43:09",
                "code": "02",
                "name": "Отправлен"
            },
            {
                "date": "2023-04-17",
                "time": "18:07:32",
                "code": "03",
                "name": "Прибыл"
            },
            {
                "date": "2023-04-18",
                "time": "15:05:50",
                "code": "04",
                "name": "Выдан"
            }
        ]
    }
]
EOF;

        $request = new GetListOrderRequest('2023-03-15', '2023-03-20', 5, 2, 14);
        $request->date_start = '2023-03-18';
        $request->date_end = '2023-03-19';

        $mock = static::createApiMockBuilder('1.0/order/get-list');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->getListOrder($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }


    public function testCalculate()
    {
        $json = <<<'EOF'
[
    {
        "standart": {
            "name": "Стандарт",
            "cost": 4934,
            "time": 0,
            "detail": [
                {
                    "name": "Доставка груза",
                    "code": "S002",
                    "price": 1640
                },
                {
                    "name": "Возмещение страхования груза по дейст.ст",
                    "code": "S031",
                    "price": 30
                },
                {
                    "name": "Дост. Выезд авто за черту города (1км)",
                    "code": "S001",
                    "price": 24
                },
                {
                    "name": "Груз",
                    "code": "S039",
                    "price": 3240
                }
            ],
            "currency_code": "RUB"
        }
    }
]
EOF;

        $request = new CalculateRequest();
        $request->city_pickup_code = '660000100000';
        $request->city_delivery_code = '501900100000';
        $request->type = 1;
        $request->declared_price = 17816;
        $request->confirmation_price = 1;

        $place = new \service\KitAPI\Model\Entity\Order\Place();
        $place->count_place = 8;
        $place->height = 90;
        $place->width = 27;
        $place->length = 67;
        $place->weight = 73;
        $place->volume = 0.464;
        $service = ['S089'];
        $place->service = $service;

        $request->places[] = $place;
        $request->pick_up = 1;
        $request->pickup_date = "2023-03-20";
        $request->pickup_time_start = "12:00";
        $request->pickup_time_end = "16:00";
        $request->deliver = 0;
        $request->insurance = 1;
        $request->insurance_agent_code = '8000152423';
        $request->inner_track_number = 'F9062650';

        $mock = static::createApiMockBuilder('/1.1/order/calculate');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->calculate($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testCalculatePost()
    {
        $json = <<<'EOF'
[
    {
        "S": {
            "name": "Посылка S",
            "cost": 4624,
            "time": 3,
            "detail": [
                {
                    "name": "Возмещение страхования груза по дейст.ст",
                    "code": "S031",
                    "price": 204
                },
                {
                    "name": "ЗТТ (сборный паллетный борт)",
                    "code": "S089",
                    "price": 2380
                },
                {
                    "name": "Груз",
                    "code": "S039",
                    "price": 2040
                }
            ],
            "currency_code": "KZT"
        }
    },
    {
        "S": {
            "name": "Посылка S",
            "cost": 680,
            "time": 3,
            "detail": [
                {
                    "name": "Возмещение страхования груза по дейст.ст",
                    "code": "S031",
                    "price": 30
                },
                {
                    "name": "ЗТТ (сборный паллетный борт)",
                    "code": "S089",
                    "price": 350
                },
                {
                    "name": "Груз",
                    "code": "S039",
                    "price": 300
                }
            ],
            "currency_code": "RUB"
        }
    }
]
EOF;

        $request = new CalculatePostRequest();
        $request->city_pickup_code = '660000100000';
        $request->city_delivery_code = '770000000000';
        $request->post_type = '02';
        $request->declared_price = 17816;
        $request->confirmation_price = 1;
        $request->service = ['S089'];
        $request->currency_code = ['KZT', 'RUB'];
        $request->insurance = 1;
        $request->insurance_agent_code = '8000152423';
        $request->have_doc = 1;
        $request->inner_track_number = 'F9062650';

        $mock = static::createApiMockBuilder('/1.0/order/calculate-post');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->calculatePost($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testCreatePost()
    {
        $json = <<<'EOF'
{
    "status": 1,
    "result": {
        "sale_number": 1105887654,
        "cargo_number": "БЛКАСБ0100007258"
    },
    "message": "Спасибо. Скоро с Вами свяжется наш оператор."
}
EOF;

        $request = new CreatePostRequest();
        $request->city_pickup_code = '770000000000';
        $request->city_delivery_code = '660000100000';
        $request->type = '01';
        $request->post_type = '02';
        $request->cargo_type_code = '03';
        $request->declared_price = 17816;
        $request->confirmation_price = 1;
        $request->service = ['S089'];
        $request->currency_code = ['RUB'];
        $request->insurance = 1;
        $request->insurance_agent_code = '8000152423';

        $customer = new Debitor();
        $customer->debitor = '0001012964';
        $request->customer = $customer;

        $sender = new Debitor();
        $sender->debitor_type = 1;
        $sender->country_code = 'RU';
        $sender->real_country = 'RU';
        $sender->real_city = 'Тюмень';
        $sender->real_contact_name = "Иванов Иван Иванович";
        $sender->real_contact_phone = '+79099099999';
        $request->sender = $sender;

        $receiver = new Debitor();
        $receiver->debitor_type = 1;
        $receiver->country_code = 'RU';
        $receiver->real_country = 'RU';
        $receiver->real_city = 'Пермь';
        $receiver->real_contact_name = "Иванов Иван Иванович";
        $receiver->real_contact_phone = '+79099099999';
        $request->receiver = $receiver;


        $mock = static::createApiMockBuilder('/1.0/order/create-post');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->createPost($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }


    public function testCreate()
    {
        $json = <<<'EOF'
{
    "status": 1,
    "result": {
        "sale_number": 1105887654,
        "cargo_number": "БЛКАСБ0100007258"
    },
    "message": "Спасибо. Скоро с Вами свяжется наш оператор."
}
EOF;

        $request = new CreateRequest();
        $request->city_pickup_code = '770000000000';
        $request->city_delivery_code = '660000100000';
        $request->type = '01';
        $request->cargo_type_code = '03';
        $request->declared_price = 17816;
        $request->confirmation_price = 1;
        $request->currency_code = ['RUB'];
        $request->insurance = 1;
        $request->insurance_agent_code = '8000152423';

        $customer = new Debitor();
        $customer->debitor = '0001012964';
        $request->customer = $customer;

        $sender = new Debitor();
        $sender->debitor_type = 1;
        $sender->country_code = 'RU';
        $sender->real_country = 'RU';
        $sender->real_city = 'Тюмень';
        $sender->real_contact_name = "Иванов Иван Иванович";
        $sender->real_contact_phone = '+79099099999';
        $request->sender = $sender;

        $receiver = new Debitor();
        $receiver->debitor_type = 1;
        $receiver->country_code = 'RU';
        $receiver->real_country = 'RU';
        $receiver->real_city = 'Пермь';
        $receiver->real_contact_name = "Иванов Иван Иванович";
        $receiver->real_contact_phone = '+79099099999';
        $request->receiver = $receiver;

        $place = new \service\KitAPI\Model\Entity\Order\Place();
        $place->count_place = 8;
        $place->height = 90;
        $place->width = 27;
        $place->length = 67;
        $place->weight = 73;
        $place->volume = 0.464;
        $service = ['S089'];
        $place->service = $service;
        $request->places[] = $place;

        $request->additional_payment_pickup = 'AG';
        $request->additional_payment_delivery = 'AG';
        $request->additional_payment_shipping = 'AG';

        $request->pickpoint_address_code = '2301';
        $request->all_places_same = 1;
        $request->have_doc = 1;

        $request->pick_up = 1;
        $request->pickup_date = '2018-03-10';
        $request->pickup_time_start = '12:00';
        $request->pickup_time_end = '18:00';
        $request->pickup_comment = 'Комментарий';
        $request->pickup_r = 1;
        $request->pickup_street = 'Улица';
        $request->pickup_house = 'Дом';
        $request->pickup_room = '6';
        $request->pickup_supp = 'А';

        $request->deliver = 1;
        $request->delivery_date = '2018-03-10';
        $request->delivery_time_start = '12:00';
        $request->delivery_time_end = '18:00';
        $request->delivery_comment = 'Комментарий';
        $request->delivery_r = 1;
        $request->delivery_street = 'Улица';
        $request->delivery_house = 'Дом';
        $request->delivery_supp = 'А';
        $request->delivery_room = '6';

        $mock = static::createApiMockBuilder('/1.1/order/create');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->order->create($request);

        self::assertModelEqualsToResponse($json, $response);
    }
}