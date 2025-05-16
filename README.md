# SDK KIT API PHP
***
Это форк официального PHP KIT API клиента. Зависимости обновлены для совместимости с Laravel 11. Исправлены названия некоторых полей в моделях, чтобы все соотвествовало snake_case.
Вы можете найти больше информации в [документации](https://tk-kit.com/services/api). Учтитывайте, что в ней могут быть неточности. Например, не написано про поле cityName в ответе /1.1/geography/address/get-list.
## Требования
***
* PHP 8.2 и выше
* поддержка PHP CURL
* поддержка PHP JSON
* Любой HTTP-клиент, совместимый с PSR-18 (см. инструкции по установке).
* Любая реализация HTTP-фабрик, совместимая с PSR-17 (см. инструкции по установке).
* Любая реализация HTTP-сообщений, совместимая с PSR-7 (см. инструкции по установке).
* Другие зависимости, перечисленные в `composer.json` (см. инструкции по установке)

## Установка
***
Выполните следующие шаги, что бы установить библиотеку:

1. Скачайте и установите [Composer](https://getcomposer.org/download/) package manager.
2. composer require "kitdelivery/sdk-kit-api":"*"

**Примечание:** API клиент использует `php-http/curl-client` и `nyholm/psr7` для реализации PSR-18, PSR-17 и PSR-7.
Вы можете заменить эти реализации во время установки, заменив библиотеку на реализацию по вашему выбору.

## Использование
***
Первое, вы должны инициализировать клиента. Самый простой способ сделать это - использовать `SimpleClientFactory`:

```php
$client = \service\KitAPI\Factory\SimpleClientFactory::createClient('https://capi.tk-kit.com', 'token');
```

Клиент разделен на несколько групп, которые доступны через публичные свойства клиента. Вы можете вызывать методы API из этих групп следующим образом:

```php
$client->profile->getList();
```

Для примера, вы можете получить список всех городов:

```php
$client = \service\KitAPI\Factory\SimpleClientFactory::createClient('https://capi.tk-kit.com', 'token');
$client->tdd->getListCity();
```

или список всех стран:

```php
$client = \service\KitAPI\Factory\SimpleClientFactory::createClient('https://capi.tk-kit.com', 'token');
$client->tdd->getListCountry();
```

Для обработки ошибок вы можете использовать два типа исключений:
* `service\KitAPI\Interfaces\ClientExceptionInterface` для ошибок сети и других ошибок.
* `service\KitAPI\Interfaces\ApiExceptionInterface` для ошибок из API.

### Список ресурсных групп и методов
***

* [Заказы (order)](doc/order.md)
  + [Расчет стоимости (calculate)](doc/order.md#расчет-стоимости)
  + [Расчет стоимости посылки (calculatePost)](doc/order.md#расчет-стоимости-посылки)
  + [Создание заказа (create)](doc/order.md#создание-заказа)
  + [Создание заказа на посылку (createPost)](doc/order.md#создание-заказа-на-посылку)
  + [Список заказов (getListOrder)](doc/order.md#список-заказов)
  + [Время доставки (getTimeDelivery)](doc/order.md#время-доставки)
  + [Статус заказа (getStatus)](doc/order.md#статус-заказа)
  + [Информация по заказу (getOrder)](doc/order.md#информация-по-заказу)
  + [Фото груза по заказу (getPhoto)](doc/order.md#фото-груза-по-заказу)
  + [Документ груза по заказу (getDocument)](doc/order.md#документ-груза-по-заказу)
  + [Список валют (getListCurrency)](doc/order.md#список-валют)
  + [Список услуг (getListService)](doc/order.md#список-услуг)
* [Транспортные маршруты (tdd)](doc/tdd.md#транспортные-маршруты)
  + [Список городов (getListCity)](doc/tdd.md#cписок-городов)
  + [Список стран (getListCountry)](doc/tdd.md#cписок-стран)
  + [Список регионов (getListRegion)](doc/tdd.md#cписок-регионов)
  + [Поиск города по имени (searchByName)](doc/tdd.md#поиск-города-по-имени)
  + [Поиск номера КЛАДР или поиск номера города (searchCodeCity)](doc/tdd.md#поиск-номера-кладр-или-поиск-номера-города)
* [География (geography)](doc/geography.md)
  + [Список адресов (getListAddress)](doc/geography.md#список-адресов)
  + [Список городов (getListCity)](doc/geography.md#список-городов)
  + [Список электронных адресов (getListEmail)](doc/geography.md#список-электронных-адресов)
  + [Список номеров телефонов (getListPhone)](doc/geography.md#список-номеров-телефонов)
  + [Список режимов работы (getListSchedule)](doc/geography.md#список-режимов-работы)
  + [Список видов графиков работы (getListScheduleGroup)](doc/geography.md#список-видов-графиков-работы)
* [Профили (profile)](doc/profile.md)
  + [Регистрация профиля (add)](doc/profile.md#регистрация-профиля)
  + [Подтверждение регистрации профиля (confirm)](doc/profile.md#подтверждение-регистрации-профиля)
  + [Список профилей (getList)](doc/profile.md#список-профилей)

### Примеры
***
Получение списка всех стран:
```php
<?php

namespace Test;

use service\KitAPI\Factory\SimpleClientFactory;
use service\KitAPI\Interfaces\ApiExceptionInterface;
use service\KitAPI\Interfaces\ClientExceptionInterface;

require_once(__DIR__ . '/../vendor/autoload.php');

$client = SimpleClientFactory::createClient('https://capi.tk-kit.com', 'token');

try {
    $response = $client->tdd->getListCountry();
} catch (ApiExceptionInterface|ClientExceptionInterface $exception) {
    echo $exception;
    exit(-1);
}

foreach ($response->countries as $country) {
    printf("Название страны - '%s'. Код страны - '%s'", $country->name, $country->code);
    echo PHP_EOL;
}
```

Вывод терминалов для города c id = 699:

```php
<?php

namespace Test;

use service\KitAPI\Factory\SimpleClientFactory;
use service\KitAPI\Interfaces\ApiExceptionInterface;
use service\KitAPI\Interfaces\ClientExceptionInterface;
use service\KitAPI\Model\Entity\Geography\Phone;
use service\KitAPI\Model\Request\Geography\GetListAddressRequest;

require_once(__DIR__ . '/../vendor/autoload.php');

$client = SimpleClientFactory::createClient('https://capi.tk-kit.com', 'token');

try {
    $response = $client->geography->getListAddress(new GetListAddressRequest("699", true, true));
} catch (ApiExceptionInterface|ClientExceptionInterface $exception) {
    echo $exception;
    exit(-1);
}

foreach ($response->addreses as $address) {
    printf("ID адреса - %d. Адрес терминала - %s. ", $address->id, $address->value);
    if ($address->phone) {
        echo PHP_EOL;
        /** @var Phone $value */
        foreach ($address->phone as $value) {
            printf("Номер телефона - %s", $value->value);
            echo PHP_EOL;
        }
        echo PHP_EOL;
    }
}
```

Расчет стоимости доставки груза:

```php
<?php

namespace Test;

use service\KitAPI\Factory\SimpleClientFactory;
use service\KitAPI\Interfaces\ApiExceptionInterface;
use service\KitAPI\Interfaces\ClientExceptionInterface;
use service\KitAPI\Model\Entity\Order\Place;
use service\KitAPI\Model\Request\Order\CalculateRequest;

require_once(__DIR__ . '/../vendor/autoload.php');

$client = SimpleClientFactory::createClient('https://capi.tk-kit.com', 'token');

$request = new CalculateRequest();
$request->city_pickup_code = '770000000000';
$request->city_delivery_code = '390000100000';
$request->declared_price = '10000';
$request->confirmation_price = 1;

$request->places = [];

$place = new Place();
$place->height = 100;
$place->width = 60;
$place->length = 80;
$place->weight = 50;
$place->volume = round(1*0.6*0.8, 3);
$place->count_place = 1;
$place->service = ['S089'];

$request->places[] = $place;
$request->delivery = 1;
$request->pick_up = 0;
$request->insurance = 1;
$request->insurance_agent_code = '8000152423';
$request->have_doc = 1;
$request->cargo_type_code = '03';
$request->currency_code = ['RUB'];
$request->all_places_same = 1;

try {
    $response = $client->order->calculate($request);
} catch (ApiExceptionInterface|ClientExceptionInterface $exception) {
    echo $exception;
    exit(-1);
}

$result = $response->getResult();

printf("Тип доставки груза: %s", $result->standart->name);
echo PHP_EOL;
printf("Время доставки груза: %s", $result->standart->time);
echo PHP_EOL;
printf("Общая стоимость доставки груза: %s", $result->standart->cost);
echo PHP_EOL;
echo 'Детальная информация по стоимости доставки:';
echo PHP_EOL;
foreach ($result->standart->detail as $value) {
    printf("- услуга '%s', стоимостью %s рублей", $value->name, $value->price);
    echo PHP_EOL;
}
```

Обработка ошибок в приведенных выше примерах хороша для реального использования в проектах.
Вы можете с уверенностью сказать, `ApiExceptionInterface` - это ошибка API, а `ClientExceptionInterface` - ошибка клиента.
(например, сетевая ошибка или любая ошибка времени выполнения, используйте HttpClientException, чтобы перехватывать только ошибки клиента PSR-18).
При желании вы можете реализовать свою обработку ошибок.

Так же,  `ApiExceptionInterface` и `ClientExceptionInterface` реализуют магический метод `__toString()`.
Это означает, что вы можете просто преобразовать эти исключения в строку и поместить их в журнал логов без какой-либо обработки.

