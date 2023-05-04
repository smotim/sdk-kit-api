# Профили
***

### Регистрация профиля
`(1.0/profile/add)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Profile\AddRequest();
$response = $client->profile->add($request);
```
Параметры запроса `\service\KitAPI\Model\Request\Profile\AddRequest` приведены в таблице.

| Параметр         | Описание                                                                    | Тип        | Обязательный                                              | Пример           |
|------------------|-----------------------------------------------------------------------------|------------|-----------------------------------------------------------|------------------|
| type             | Тип лица <br/>(1 - Юридическое лицо,<br/> 2 - Физическое лицо,<br/> 3 - ИП) | integer    | Да                                                        | 2                |
| city_code        | Код города                                                                  | string(12) | Да                                                        | 660000100000     |
| country          | Код страны                                                                  | string(2)  | Да                                                        | RU               |
| name             | ФИО \ Наименование организации                                              | string     | Да                                                        | ООО "Пример"     |
| email            | Email                                                                       | string     | Да                                                        | test@example.com |
| phone            | Номер телефона                                                              | string     | Да                                                        | 9509080000       |
| phone_country    | Код страны телефона                                                         | string     | Да                                                        | RU               |
| password         | Пароль                                                                      | string     | Да                                                        | qwerty1234       |
| password_confirm | Подтверждение пароля                                                        | string     | Да                                                        | qwerty1234       |
| iin              | ИИН                                                                         | string     | Да (если type = 3 <br/>и country = KZ)                    | 123456789012     |
| inn3             | ИНН Организации                                                             | string     | Да (если type = 1 <br/>и country = RU <br/>или AM или KG) | 123456789012     |
| inn2             | ИНН ИП                                                                      | string     | Да (если type = 3 <br/>и country = RU <br/>или AM или KG) | 1234567890       |
| bin_3            | БИН                                                                         | string     | Да (если type = 1 <br/>и country = KZ)                    | 123456789012     |
| kpp              | КПП ИП                                                                      | string     | Да (если type = 1 <br/>и country = RU)                    | 1234567890       |
| unp_2            | УНП                                                                         | string     | Да (если type = 3 <br/>и country = BY)                    | 123456789        |

### Подтверждение регистрации профиля
`(1.0/profile/confurm)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Profile\ConfirmRequest($client_id, $debitor_id, $confirm_code);
$response = $client->profile->confirm($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Profile\ConfirmRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр     | Описание                                   | Тип     | Обязательный | Пример  |
|--------------|--------------------------------------------|---------|--------------|---------|
| client_id    | ID клиента                                 | integer | Да           | 5       |
| debitor_id   | ID контрагента                             | integer | Да           | 307117  |
| confirm_code | Код подтверждения полученный по SMS\email  | string  | Да           | 654778  |

### Список профилей
`(1.0/profile/get-list)`

Пример вызова метода:
```php
$client->profile->getList()
```

* нет параметров