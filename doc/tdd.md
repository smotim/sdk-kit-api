# Транспортные маршруты
***

### Cписок городов
`(1.1/tdd/city/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Tdd\GetListCityRequest($country_code, $region_code, $code);
$response = $client->tdd->getListCity($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Tdd\GetListCityRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр     | Описание                | Тип     | Обязательный | Пример        |
|--------------|-------------------------|---------|--------------|---------------|
| country_code | Код страны              | string  | Нет          | RU            |
| region_code  | Код региона             | string  | Нет          | 66            |
| code         | Код населенного пункта  | string  | Нет          | 660002900000  |

### Cписок стран
`(1.0/tdd/country/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Tdd\GetListCountryRequest($code);
$response = $client->tdd->getListCountry($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Tdd\GetListCountryRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр     | Описание    | Тип    | Обязательный | Пример |
|--------------|-------------|--------|--------------|--------|
| code         | Код страны  | string | Нет          | RU     |

### Cписок регионов
`(1.0/tdd/region/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Tdd\GetListRegionRequest($country_code, $code);
$response = $client->tdd->getListRegion($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Tdd\GetListRegionRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр     | Описание                | Тип     | Обязательный | Пример        |
|--------------|-------------------------|---------|--------------|---------------|
| country_code | Код страны              | string  | Нет          | RU            |
| code         | Код населенного пункта  | string  | Нет          | 660002900000  |

### Поиск города по имени
`(1.1/tdd/search/by-name)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Tdd\SearchByNameRequest($title);
$response = $client->tdd->searchByName($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Tdd\SearchByNameRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр | Описание                | Тип     | Обязательный | Пример |
|----------|-------------------------|---------|--------------|--------|
| title    | Имя города              | string  | Да           | Ирбит  |

### Поиск номера КЛАДР или поиск номера города
`(1.0/tdd/region/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Tdd\SearchCodeCityRequest(null, $kladr);
$response = $client->tdd->searchCodeCity($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Tdd\SearchCodeCityRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр   | Описание      | Тип         | Обязательный                  | Пример        |
|------------|---------------|-------------|-------------------------------|---------------|
| code_city  | Код города    | string(12)  | Да, если нет поля kladr       | 660003100000  |
| kladr      | КЛАДР города  | string(13)  | Да, если нет поля code_city   | 6600003100000 |