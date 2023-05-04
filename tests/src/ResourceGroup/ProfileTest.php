<?php

namespace service\KitAPI\Tests\ResourceGroup;

use service\KitAPI\Enum\RequestMethod;
use service\KitAPI\Model\Request\Profile\AddRequest;
use service\KitAPI\Model\Request\Profile\ConfirmRequest;
use service\KitAPI\TestUtils\Factory\TestClientFactory;
use service\KitAPI\TestUtils\TestCase\AbstractApiResourceGroupTestCase;

class ProfileTest extends AbstractApiResourceGroupTestCase
{
    public function testGetProfile(): void
    {
        $json = <<<'EOF'
[
    {
        "id": 26794,
        "name": "ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ ТРАНСПОРТНАЯ КОМПАНИЯ \"КИТ\"",
        "debitor": 1011311
    },
    {
        "id": 238721,
        "name": "Захарова Наталия Александровна",
        "debitor": 5831288
    },
    {
        "id": 181048,
        "name": "НАРСЕЕВА ЕКАТЕРИНА АЛЕКСАНДРОВНА",
        "debitor": 2108320
    },
    {
        "id": 307114,
        "name": "Ульянов Антон Дмитриевич",
        "debitor": 900000263
    }
]
EOF;
        $mock = static::createUnversionedApiMockBuilder('/1.0/profile/get-list');
        $mock->matchMethod(RequestMethod::GET)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());

        $profiles = $client->profile->getList();

        self::assertCount(4, $profiles->profiles);
        self::assertEquals('26794', $profiles->profiles[0]->id);
        self::assertEquals('Захарова Наталия Александровна', $profiles->profiles[1]->name);
        self::assertEquals('2108320', $profiles->profiles[2]->debitor);
    }

    public function testAdd()
    {
        $json = <<<'EOF'
{
    "client_id": 3,
    "debitor_id": 307118,
    "message": "На указанные при регистрации реквизиты отправлено сообщение с кодом."
}
EOF;

        $request = new AddRequest();
        $request->name = "Иванов Иван Иванович";
        $request->type = 2;
        $request->phone = '89001002233';
        $request->country = 'RU';
        $request->email = 'test@test.ru';

        $mock = self::createUnversionedApiMockBuilder('1.0/profile/add');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());

        $response = $client->profile->add($request);

        self::assertModelEqualsToResponse($json, $response);
    }

    public function testConfirm()
    {
        $json = <<<'EOF'
{
    "status": 1
}
EOF;

        $request = new ConfirmRequest(3, 1234,75654);

        $mock = self::createApiMockBuilder('1.0/profile/confirm');
        $mock->matchMethod(RequestMethod::POST)
            ->reply(200)
            ->withBody($json);

        $client = TestClientFactory::createClient($mock->getClient());
        $response = $client->profile->confirm($request);

        self::assertModelEqualsToResponse($json, $response);

    }
}