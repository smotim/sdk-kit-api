
# География
***


### Список адресов
`(1.1/geography/address/get-list)`

Пример вызова метода: 
```php
$request = new \service\KitAPI\Model\Request\Geography\GetListAddressRequest($geography_city_id, $withPhone, $withEmail);
$response = $client->geography->getListAddress($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Geography\GetListAddressRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр          | Описание                              | Тип      | Обязательный | Пример  |
|-------------------|---------------------------------------|----------|--------------|---------|
| geography_city_id | Код города географии                  | integer  | Нет          | 699     |
| withPhone         | Вернуть результат с номерами телфонов | integer  | Нет          | 1       |
| withEmail         | Вернуть результат с email             | integer  | Нет          | 1       |


### Список городов
`(1.0/geography/city/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Geography\GetListCityRequest($id, $tdd_city_code);
$response = $client->geography->getListCity($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Geography\GetListCityRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр       | Описание     | Тип      | Обязательный | Пример        |
|----------------|--------------|----------|--------------|---------------|
| id             | id города    | integer  | Нет          | 695           |
| tdd_city_code  | Код города   | string   | Нет          | 910000900000  |


### Список электронных адресов
`(1.0/geography/email/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Geography\GetListEmailRequest($geography_city_id, $geography_address_id);
$response = $client->geography->getListEmail($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Geography\GetListEmailRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр              | Описание              | Тип      | Обязательный | Пример |
|-----------------------|-----------------------|----------|--------------|--------|
| geography_city_id     | Код города географии  | integer  | Нет          | 699    |
| geography_address_id  | Код адреса географии  | integer  | Нет          | 522    |


### Список номеров телефонов 
`(1.0/geography/phone/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Geography\GetListPhoneRequest($geography_city_id, $geography_address_id);
$response = $client->geography->getListPhone($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Geography\GetListPhoneRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр              | Описание              | Тип      | Обязательный | Пример |
|-----------------------|-----------------------|----------|--------------|--------|
| geography_city_id     | Код города географии  | integer  | Нет          | 699    |
| geography_address_id  | Код адреса географии  | integer  | Нет          | 522    |


### Список режимов работы 
`(1.0/geography/schedule/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Geography\GetListScheduleRequest($geography_city_id, $geography_address_id, $group_id);
$response = $client->geography->getListSchedule($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Geography\GetListScheduleRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр             | Описание             | Тип      | Обязательный | Пример |
|----------------------|----------------------|----------|--------------|--------|
| geography_city_id    | Код города географии | integer  | Нет          | 699    |
| geography_address_id | Код адреса географии | integer  | Нет          | 522    |
| group_id             | Код вида графика     | integer  | Нет          | 1      |



### Список видов графиков работы 
`(1.0/geography/schedule-group/get-list)`

Пример вызова метода:
```php
$client->geography->getListScheduleGroup()
```

* нет параметров