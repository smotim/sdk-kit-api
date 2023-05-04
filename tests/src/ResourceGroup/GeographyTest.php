<?php

namespace service\KitAPI\Tests\ResourceGroup;

use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Model\Request\Geography\GetListAddressRequest;
use service\KitAPI\Model\Request\Geography\GetListCityRequest;
use service\KitAPI\Model\Request\Geography\GetListEmailRequest;
use service\KitAPI\Model\Request\Geography\GetListPhoneRequest;
use service\KitAPI\Model\Request\Geography\GetListScheduleRequest;
use service\KitAPI\Model\Response\Geography\GetListScheduleGroupResponse;
use service\KitAPI\TestUtils\Factory\TestClientFactory;
use service\KitAPI\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class GeographyTest extends AbstractApiResourceGroupTestCase
{

    public function testGetListAddress()
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

        $request = new GetListAddressRequest();
        $request->geography_city_id = 655;
        $request->withEmail = 1;
        $request->withPhone = 1;

        $mock = static::createApiMockBuilder('1.1/geography/address/get-list');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->geography->getListAddress($request);
        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testGetListCity()
    {
        $json = <<<'EOF'
[
    {
        "id": "695",
        "tdd_city_code": "910000900000",
        "sxgeo_city_id": "713513",
        "sxgeoCity": {
            "id": "713513",
            "lat": "44.67631",
            "lon": "34.40778"
        }
    },
    {
        "id": "696",
        "tdd_city_code": "911600000100",
        "sxgeo_city_id": "713203",
        "sxgeoCity": {
            "id": "713203",
            "lat": "46.10919",
            "lon": "33.69206"
        }
    },
    {
        "id": "699",
        "tdd_city_code": "310000100000",
        "sxgeo_city_id": "578072",
        "sxgeoCity": {
            "id": "578072",
            "lat": "50.61074",
            "lon": "36.58015"
        }
    },
    {
        "id": "700",
        "tdd_city_code": "560000600000",
        "sxgeo_city_id": "570427",
        "sxgeoCity": {
            "id": "570427",
            "lat": "52.78070",
            "lon": "52.26350"
        }
    },
    {
        "id": "701",
        "tdd_city_code": "320000100000",
        "sxgeo_city_id": "571476",
        "sxgeoCity": {
            "id": "571476",
            "lat": "53.25209",
            "lon": "34.37167"
        }
    },
    {
        "id": "702",
        "tdd_city_code": "150000100000",
        "sxgeo_city_id": "473249",
        "sxgeoCity": {
            "id": "473249",
            "lat": "43.03667",
            "lon": "44.66778"
        }
    },
    {
        "id": "703",
        "tdd_city_code": "330000100000",
        "sxgeo_city_id": "473247",
        "sxgeoCity": {
            "id": "473247",
            "lat": "56.13655",
            "lon": "40.39658"
        }
    },
    {
        "id": "704",
        "tdd_city_code": "360000100000",
        "sxgeo_city_id": "472045",
        "sxgeoCity": {
            "id": "472045",
            "lat": "51.67204",
            "lon": "39.18430"
        }
    },
    {
        "id": "705",
        "tdd_city_code": "230000300000",
        "sxgeo_city_id": "561667",
        "sxgeoCity": {
            "id": "561667",
            "lat": "44.56220",
            "lon": "38.08480"
        }
    },
    {
        "id": "706",
        "tdd_city_code": "180000400000",
        "sxgeo_city_id": "561347",
        "sxgeoCity": {
            "id": "561347",
            "lat": "58.13930",
            "lon": "52.65800"
        }
    },
    {
        "id": "707",
        "tdd_city_code": "890000200000",
        "sxgeo_city_id": "7874153",
        "sxgeoCity": {
            "id": "7874153",
            "lat": "64.43808",
            "lon": "76.47008"
        }
    },
    {
        "id": "708",
        "tdd_city_code": "910000500000",
        "sxgeo_city_id": "709334",
        "sxgeoCity": {
            "id": "709334",
            "lat": "45.71168",
            "lon": "34.39274"
        }
    },
    {
        "id": "709",
        "tdd_city_code": "910000400000",
        "sxgeo_city_id": "688105",
        "sxgeoCity": {
            "id": "688105",
            "lat": "45.20091",
            "lon": "33.36655"
        }
    },
    {
        "id": "710",
        "tdd_city_code": "660000100000",
        "sxgeo_city_id": "1486209",
        "sxgeoCity": {
            "id": "1486209",
            "lat": "56.83801",
            "lon": "60.61220"
        }
    },
    {
        "id": "711",
        "tdd_city_code": "740000400000",
        "sxgeo_city_id": "462444",
        "sxgeoCity": {
            "id": "462444",
            "lat": "55.17111",
            "lon": "59.65083"
        }
    },
    {
        "id": "712",
        "tdd_city_code": "370000100000",
        "sxgeo_city_id": "555312",
        "sxgeoCity": {
            "id": "555312",
            "lat": "56.99719",
            "lon": "40.97139"
        }
    },
    {
        "id": "713",
        "tdd_city_code": "180000100000",
        "sxgeo_city_id": "554840",
        "sxgeoCity": {
            "id": "554840",
            "lat": "56.84976",
            "lon": "53.20448"
        }
    },
    {
        "id": "714",
        "tdd_city_code": "721100100000",
        "sxgeo_city_id": "9000003",
        "sxgeoCity": {
            "id": "9000003",
            "lat": "56.11000",
            "lon": "69.47000"
        }
    },
    {
        "id": "715",
        "tdd_city_code": "120000100000",
        "sxgeo_city_id": "466806",
        "sxgeoCity": {
            "id": "466806",
            "lat": "56.63877",
            "lon": "47.89078"
        }
    },
    {
        "id": "716",
        "tdd_city_code": "160000100000",
        "sxgeo_city_id": "551487",
        "sxgeoCity": {
            "id": "551487",
            "lat": "55.78874",
            "lon": "49.12214"
        }
    }
]
EOF;

        $request = new GetListCityRequest(717, '660002200000');
        $request->id = 717;
        $request->tdd_city_code = '660002200000';

        $mock = static::createApiMockBuilder('1.0/geography/city/get-list');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->geography->getListCity($request);
        self::assertModelEqualsToResponse($json, $response, true);

    }

    public function testGetListEmails()
    {
        $json = <<<'EOF'
[
    {
        "geography_city_id": "793",
        "geography_address_id": "616",
        "value": "minsk@tk-kit.com",
        "comment": "Офис"
    },
    {
        "geography_city_id": "893",
        "geography_address_id": "718",
        "value": "alma@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "900",
        "geography_address_id": "724",
        "value": "bayaul@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "902",
        "geography_address_id": "726",
        "value": "aktau@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "700",
        "geography_address_id": "523",
        "value": "buzuluk@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "803",
        "geography_address_id": "626",
        "value": "vladivostok@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "703",
        "geography_address_id": "526",
        "value": "vladimir@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "706",
        "geography_address_id": "529",
        "value": "glazov@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "707",
        "geography_address_id": "530",
        "value": "gubkinsk@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "712",
        "geography_address_id": "535",
        "value": "ivanovo@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "713",
        "geography_address_id": "536",
        "value": "ijevsk@tk-kit.com",
        "comment": "для писем"
    },
    {
        "geography_city_id": "713",
        "geography_address_id": "536",
        "value": "ijevsk@tk-kit.com",
        "comment": "логист (заборы, доставки до адреса)"
    },
    {
        "geography_city_id": "713",
        "geography_address_id": "760",
        "value": "ijevsk@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "807",
        "geography_address_id": "630",
        "value": "irkutsk@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "714",
        "geography_address_id": "537",
        "value": "ishim@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "715",
        "geography_address_id": "538",
        "value": "yoshkar-ola@tk-kit.com",
        "comment": ""
    },
    {
        "geography_city_id": "716",
        "geography_address_id": "539",
        "value": "kazan@tk-kit.com",
        "comment": ""
    }
]
EOF;

        $request = new GetListEmailRequest(717, '660002200000');
        $request->geography_city_id = 717;
        $request->geography_address_id = '660002200000';

        $mock = static::createApiMockBuilder('1.0/geography/email/get-list');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->geography->getListEmail($request);
        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testGetListPhone()
    {
        $json = <<<'EOF'
[
    {
        "geography_city_id": "875",
        "geography_address_id": "699",
        "value": "+37410569016 ",
        "comment": null
    },
    {
        "geography_city_id": "875",
        "geography_address_id": "699",
        "value": "+37410546813",
        "comment": null
    },
    {
        "geography_city_id": "900",
        "geography_address_id": "724",
        "value": "8 72934 93-023",
        "comment": null
    },
    {
        "geography_city_id": "902",
        "geography_address_id": "726",
        "value": "+7 722 255-08-70",
        "comment": ""
    },
    {
        "geography_city_id": "803",
        "geography_address_id": "626",
        "value": "+7 423 279-97-08",
        "comment": ""
    },
    {
        "geography_city_id": "710",
        "geography_address_id": "754",
        "value": "+7 800 234-59-60",
        "comment": "Контакт-центр"
    },
    {
        "geography_city_id": "730",
        "geography_address_id": "554",
        "value": "+7 351 326-47-07",
        "comment": ""
    },
    {
        "geography_city_id": "740",
        "geography_address_id": "564",
        "value": "+7 831 231-02-30",
        "comment": "Для справок"
    },
    {
        "geography_city_id": "745",
        "geography_address_id": "792",
        "value": "+7 383 210-69-70",
        "comment": ""
    },
    {
        "geography_city_id": "745",
        "geography_address_id": "793",
        "value": "+7 383 210-69-70",
        "comment": ""
    },
    {
        "geography_city_id": "750",
        "geography_address_id": "573",
        "value": "+7 34767 7-10-30",
        "comment": ""
    },
    {
        "geography_city_id": "755",
        "geography_address_id": "578",
        "value": "+7 342 233-84-05",
        "comment": ""
    },
    {
        "geography_city_id": "755",
        "geography_address_id": "797",
        "value": "+7 342 233-84-05",
        "comment": ""
    },
    {
        "geography_city_id": "870",
        "geography_address_id": "693",
        "value": "+7 912 420-33-77",
        "comment": ""
    },
    {
        "geography_city_id": "765",
        "geography_address_id": "588",
        "value": "+7 845 231-81-60",
        "comment": ""
    },
    {
        "geography_city_id": "768",
        "geography_address_id": "816",
        "value": "+7 365 267-13-85",
        "comment": ""
    },
    {
        "geography_city_id": "773",
        "geography_address_id": "596",
        "value": "+7 346 276-92-22",
        "comment": ""
    },
    {
        "geography_city_id": "782",
        "geography_address_id": "605",
        "value": "+7 800 234-59-60",
        "comment": "Контакт-центр"
    },
    {
        "geography_city_id": "782",
        "geography_address_id": "824",
        "value": "+7 800 234-59-60",
        "comment": "Контакт-центр"
    },
    {
        "geography_city_id": "871",
        "geography_address_id": "694",
        "value": "+7 845 356-48-72",
        "comment": ""
    },
    {
        "geography_city_id": "788",
        "geography_address_id": "611",
        "value": "+7 346 757-89-77",
        "comment": ""
    }
]
EOF;

        $request = new GetListPhoneRequest(717, '660002200000');
        $request->geography_city_id = 717;
        $request->geography_address_id = '660002200000';

        $mock = static::createApiMockBuilder('1.0/geography/phone/get-list');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->geography->getListPhone($request);
        self::assertModelEqualsToResponse($json, $response, true);
    }

    public function testGetListScheduleGroup()
    {
        $json = <<<'EOF'
[
    {
        "id": "1",
        "name": "Выдача груза"
    },
    {
        "id": "2",
        "name": "Прием груза"
    }
]
EOF;

        $mock = static::createApiMockBuilder('1.0/geography/schedule-group/get-list');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->geography->getListScheduleGroup();

        self::assertEquals(1, $response->scheduleGroups[0]->id);
        self::assertEquals("Выдача груза", $response->scheduleGroups[0]->name);
        self::assertEquals("Прием груза", $response->scheduleGroups[1]->name);
    }

    public function testGetListSchedule()
    {
        $json = <<<'EOF'
[
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "1",
        "day": "1",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "2",
        "day": "1",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "1",
        "day": "2",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "2",
        "day": "2",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "1",
        "day": "3",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "2",
        "day": "3",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "1",
        "day": "4",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "2",
        "day": "4",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "1",
        "day": "5",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "2",
        "day": "5",
        "all_day": "0",
        "freeday": "0",
        "from": "09:00",
        "to": "18:00"
    },
    {
        "geography_city_id": "942",
        "geography_address_id": "776",
        "group_id": "1",
        "day": "6",
        "all_day": "0",
        "freeday": "0",
        "from": "10:00",
        "to": "15:00"
    }
]
EOF;

        $request = new GetListScheduleRequest(942, 776, 1);
        $request->geography_city_id = 942;
        $request->geography_address_id = 776;
        $request->group_id = 1;
        $mock = static::createApiMockBuilder('1.0/geography/schedule/get-list');
        $mock->matchMethod(RequestMethod::POST)
            ->matchBody(json_encode($request))
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->geography->getListSchedule($request);

        self::assertModelEqualsToResponse($json, $response, true);
    }
}
