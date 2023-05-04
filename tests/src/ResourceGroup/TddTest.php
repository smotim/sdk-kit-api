<?php

namespace service\KitAPI\Tests\ResourceGroup;

use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Model\Request\Tdd\GetListCityRequest;
use service\KitAPI\Model\Request\Tdd\GetListCountryRequest;
use service\KitAPI\Model\Request\Tdd\GetListRegionRequest;
use service\KitAPI\Model\Request\Tdd\SearchByNameRequest;
use service\KitAPI\Model\Request\Tdd\SearchCodeCityRequest;
use service\KitAPI\TestUtils\Factory\TestClientFactory;
use service\KitAPI\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class TddTest extends AbstractApiResourceGroupTestCase
{

    public function testGetListCity()
    {
        $json = <<<'EOF'
[
    {
        "id": "518",
        "geography_city_id": "695",
        "value": "ул. Виноградная, 1 Д",
        "lat": "44.674901",
        "lon": "34.395056",
        "phone": [
            {
                "geography_address_id": "518",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "518",
                "value": "+7 365 607-77-10",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "518",
                "value": "alushta@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "519",
        "geography_city_id": "696",
        "value": "мкр. им. Генерала Корявко, 16",
        "lat": "46.107666",
        "lon": "33.690121",
        "phone": [
            {
                "geography_address_id": "519",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "519",
                "value": "+7 365 679-99-10",
                "comment": ""
            }
        ],
        "email": []
    },
    {
        "id": "522",
        "geography_city_id": "699",
        "value": "ул. Коммунальная, 18, корп. 1",
        "lat": "50.562283",
        "lon": "36.654088",
        "phone": [
            {
                "geography_address_id": "522",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "522",
                "value": "+7 472 277-95-10",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "522",
                "value": "belgorod@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "523",
        "geography_city_id": "700",
        "value": "ул. Промышленная, 4",
        "lat": "52.788320",
        "lon": "52.218080",
        "phone": [
            {
                "geography_address_id": "523",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "523",
                "value": "+7 353 422-13-36",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "523",
                "value": "buzuluk@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "524",
        "geography_city_id": "701",
        "value": "ул. Литейная, 15/4",
        "lat": "53.315288",
        "lon": "34.275117",
        "phone": [
            {
                "geography_address_id": "524",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "524",
                "value": "+7 483 262-96-02",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "524",
                "value": "bryansk@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "525",
        "geography_city_id": "702",
        "value": "ул. 6-я Промышленная, 5",
        "lat": "43.075753",
        "lon": "44.687152",
        "phone": [
            {
                "geography_address_id": "525",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "525",
                "value": "+7 867 228-95-38",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "525",
                "value": "vladikavkaz@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "526",
        "geography_city_id": "703",
        "value": "Гастелло, 8А",
        "lat": "56.159288",
        "lon": "40.388498",
        "phone": [
            {
                "geography_address_id": "526",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "526",
                "value": "+7 492 249-43-66",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "526",
                "value": "vladimir@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "527",
        "geography_city_id": "704",
        "value": "ул. Холмистая, 1Г",
        "lat": "51.672292",
        "lon": "39.123024",
        "phone": [
            {
                "geography_address_id": "527",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "527",
                "value": "+7 473 201-62-50",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "527",
                "value": "voronezh@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "749",
        "geography_city_id": "704",
        "value": "Ленинский проспект, 176",
        "lat": "51.701462",
        "lon": "39.275521",
        "phone": [
            {
                "geography_address_id": "749",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "749",
                "value": "+7 473 201-62-50",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "749",
                "value": "voronezh@tk-kit.com",
                "comment": ""
            }
        ]
    },
    {
        "id": "528",
        "geography_city_id": "705",
        "value": "ул. Луначарского, 6",
        "lat": "44.560844",
        "lon": "38.095783",
        "phone": [
            {
                "geography_address_id": "528",
                "value": "+7 800 234-59-60",
                "comment": "Контакт-центр"
            },
            {
                "geography_address_id": "528",
                "value": "+7 861 413-59-88",
                "comment": ""
            }
        ],
        "email": [
            {
                "geography_address_id": "528",
                "value": "gelendzhik@tk-kit.com",
                "comment": ""
            }
        ]
    }
]
EOF;

        $request = new GetListCityRequest('RU', '66', '660002900000');
        $request->country_code = 'RU';
        $request->region_code = '66';
        $request->code = '660002900000';

        $mock = static::createApiMockBuilder('1.1/tdd/city/get-list');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->tdd->getListCity($request);

        self::assertModelEqualsToResponse($json, $response, true);

    }


    public function testGetListCountry()
    {
        $json = <<<'EOF'
[
    {
        "name": "Абхазия",
        "code": "AB"
    },
    {
        "name": "Армения",
        "code": "AM"
    },
    {
        "name": "Беларусь",
        "code": "BY"
    },
    {
        "name": "Китай",
        "code": "CN"
    },
    {
        "name": "Германия",
        "code": "DE"
    },
    {
        "name": "Киргизия",
        "code": "KG"
    },
    {
        "name": "Казахстан",
        "code": "KZ"
    },
    {
        "name": "Россия",
        "code": "RU"
    }
]
EOF;

        $request = new GetListCountryRequest('RU');
        $request->code = 'KZ';

        $mock = static::createApiMockBuilder('1.0/tdd/country/get-list');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->tdd->getListCountry($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testGetListRegion()
    {
        $json = <<<'EOF'
[
    {
        "name": "Респ. Адыгея",
        "code": "01",
        "country_code": "RU"
    },
    {
        "name": "Респ. Башкортостан",
        "code": "02",
        "country_code": "RU"
    },
    {
        "name": "Респ. Бурятия",
        "code": "03",
        "country_code": "RU"
    },
    {
        "name": "Респ. Алтай",
        "code": "04",
        "country_code": "RU"
    },
    {
        "name": "Респ. Дагестан",
        "code": "05",
        "country_code": "RU"
    },
    {
        "name": "Респ. Ингушетия",
        "code": "06",
        "country_code": "RU"
    },
    {
        "name": "Кабардино-Балкарская",
        "code": "07",
        "country_code": "RU"
    },
    {
        "name": "Респ. Калмыкия",
        "code": "08",
        "country_code": "RU"
    },
    {
        "name": "Карачаево-Черкесская",
        "code": "09",
        "country_code": "RU"
    },
    {
        "name": "Респ. Карелия",
        "code": "10",
        "country_code": "RU"
    }
]
EOF;

        $request = new GetListRegionRequest('RU', '66');
        $request->code = '74';
        $request->country_code = 'KZ';

        $mock = static::createApiMockBuilder('1.0/tdd/region/get-list');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->tdd->getListRegion($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testSearchByName()
    {
        $json = <<<'EOF'
[
    {
        "name": "Екатеринбург-Тюмень (Белоярский р-н)",
        "code": "660700006800",
        "kladr": null,
        "type": "авто.",
        "region_code": "66",
        "country_code": "RU",
        "required_pickup": 1,
        "required_delivery": 1
    },
    {
        "name": "Тюмень",
        "code": "720000100000",
        "kladr": "7200000100000",
        "type": "гор.",
        "region_code": "72",
        "country_code": "RU",
        "required_pickup": 0,
        "required_delivery": 0
    },
    {
        "name": "Звенящие кедры Тюмени",
        "code": "720000124300",
        "kladr": "6701000009200",
        "type": "пос.",
        "region_code": "72",
        "country_code": "RU",
        "required_pickup": 1,
        "required_delivery": 1
    }
]
EOF;

        $request = new SearchByNameRequest('Тюмень');
        $request->title = 'Тюмень';

        $mock = static::createApiMockBuilder('1.1/tdd/search/by-name');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->tdd->searchByName($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testSearchCodeCity()
    {
        $json = <<<'EOF'
{
    "code": "910200000400",
    "kladr": "9100200000400",
    "type_kladr": "с",
    "name_kladr": "Верхние Орешники"
}
EOF;

        $request = new SearchCodeCityRequest('910200000400');
        $request->code_city = '910200000400';
        $request->kladr = '9100200000400';

        $mock = static::createApiMockBuilder('1.0/tdd/search/code-city');
        $mock->matchMethod(RequestMethod::POST)
//            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->tdd->searchCodeCity($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }

}