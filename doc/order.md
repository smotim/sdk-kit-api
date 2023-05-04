# Заказы
***

### Расчет стоимости
`(1.1/order/calculate)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\CalculateRequest();
$response = $client->order->calculate($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\CalculateRequest` приведены в таблице.

| Параметр             | Описание                                      | Тип                                      | Обязательный                                                     | Пример                                                     |
|----------------------|-----------------------------------------------|------------------------------------------|------------------------------------------------------------------|------------------------------------------------------------|
| city_pickup_code     | Код города откуда                             | string                                   | Да                                                               | 660000100000                                               |
| city_delivery_code   | Код города куда                               | string                                   | Да                                                               | 000000000001                                               |
| declared_price       | Объявленная стоимость груза (руб)             | integer                                  | Да                                                               | 1000                                                       |
| confirmation_price   | Наличие документов подтверждающих стоимость   | integer (1 - да,<br/> 0 - нет)           | Да (если declared_price<br/> более 50 000),<br/> по умолчанию 0  | 1                                                          |
| service              | массив кодов услуг                            | массив кодов услуг<br/> в составе places | Нет                                                              | places[0]service[0] = T001<br/> places[0]service[1] = S026 |
| height               | Высота груза (см) позиции                     | decimal(10,2)                            | Да (если не <br/>указан volume)                                  | places[0][height] = 100<br/> places[1][height]  = 120      |
| width                | Ширина груза (см) позиции                     | decimal(10,2)                            | Да (если не <br/>указан volume)                                  | places[0][width] = 100<br/> places[1][width] = 120         |
| length               | Длина груза (см) позиции                      | decimal(10,2)                            | Да (если не <br/>указан volume)                                  | places[0][length] = 100<br/> places[1][length] = 120       |
| count_place          | Количество мест в позиции                     | массив integer                           | Да                                                               | places[0][count_place] = 1 <br/> places[1][count_place] = 2 |
| weight               | Масса КГ позиции                              | массив integer                           | Да                                                               | places[0][weight] = 2<br/> places[1][weight] = 4           |
| volume               | Объем М³ позиции                              | массив decimal(10,3)                     | Да (если не<br/> указаны height,<br/> width, length)             | places[1][volume] = 1 <br/> places[0][volume] = 2          |
| pick_up              | Забор груза по городу                         | integer (1 - да,<br/> 0 - нет)           | Нет                                                              | 1                                                          |
| delivery             | Доставка груза по городу                      | integer (1 - да,<br/> 0 - нет)           | Нет                                                              | 1                                                          |
| insurance            | Услуга страхования груза                      | integer (1 - да,<br/> 0 - нет)           | Да (если стоимость<br/> груза равна или<br/> более 10 000 руб.)  | 1                                                          |
| insurance_agent_code | Код страхового агента                         | string                                   | Да (если insurance = 1 )                                         | 8000152423                                                 |
| have_doc             | Есть документы подтверждающие стоимость груза | integer (1 - да,<br/> 0 - нет)           | Да (если стоимость<br/> груза равна или<br/> более 50 000 руб. ) | 1                                                          |
| cargo_type_code      | Код характера груза                           | string                                   | Нет (по умолчанию 03)                                            | 01                                                         |
| currency_code        | Валюта результата расчета                     | массив string                            | Нет (по умолчанию RUB)                                           | currency_code[0] = KZT<br/>currency_code[1] = RUB          |
| all_places_same      | Все места одинаковы по размеру                | integer (1 - да,<br/> 0 - нет)           | Нет (по умолчанию 0)                                             | 1                                                          |


### Расчет стоимости посылки
`(1.0/order/calculate-post)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\CalculatePostRequest();
$response = $client->order->calculatePost($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\CalculatePostRequest` приведены в таблице.

| Параметр              | Описание                                      | Тип                                      | Обязательный                                                     | Пример                                                      |
|-----------------------|-----------------------------------------------|------------------------------------------|------------------------------------------------------------------|-------------------------------------------------------------|
| city_pickup_code      | Код города откуда                             | string                                   | Да                                                               | 660000100000                                                |
| city_delivery_code    | Код города куда                               | string                                   | Да                                                               | 000000000001                                                |
| declared_price        | Объявленная стоимость груза (руб)             | integer                                  | Да                                                               | 1000                                                        |
| confirmation_price    | Наличие документов подтверждающих стоимость   | integer (1 - да,<br/> 0 - нет)           | Да (если declared_price<br/> более 50 000),<br/> по умолчанию 0  | 1                                                           |
| service               | массив кодов услуг                            | массив кодов услуг<br/> в составе places | Нет                                                              | service[0] = T001<br/> places[0]service[1] = S026           |
| post_type             | Тип посылки                                   | string (01 - XS, 02 - S, 03 - M, 04 - L) | Да                                                               | 02                                                          |
| insurance             | Услуга страхования груза                      | integer (1 - да,<br/> 0 - нет)           | Да (если стоимость<br/> груза равна или<br/> более 10 000 руб.)  | 1                                                           |
| insurance_agent_code  | Код страхового агента                         | string                                   | Да (если insurance = 1 )                                         | 8000152423                                                  |
| have_doc              | Есть документы подтверждающие стоимость груза | integer (1 - да,<br/> 0 - нет)           | Да (если стоимость<br/> груза равна или<br/> более 50 000 руб. ) | 1                                                           |
| cargo_type_code       | Код характера груза                           | string                                   | Нет (по умолчанию 03)                                            | 01                                                          |
| currency_code         | Валюта результата расчета                     | массив string                            | Нет (по умолчанию RUB)                                           | currency_code[0] = KZT<br/>currency_code[1] = RUB           |


### Создание заказа
`(1.1/order/create)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\CreateRequest();
$response = $client->order->create($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\CreateRequest` приведены в таблице.

| Параметр                    | Описание                                      | Тип                                                                 | Обязательный                                                     | Пример                                                      |
|-----------------------------|-----------------------------------------------|---------------------------------------------------------------------|------------------------------------------------------------------|-------------------------------------------------------------|
| city_pickup_code            | Код города откуда                             | string                                                              | Да                                                               | 660000100000                                                |
| city_delivery_code          | Код города куда                               | string                                                              | Да                                                               | 000000000001                                                |
| pickpoint_address_code      | Код терминала получения                       | string                                                              | Нет                                                              | 2301                                                        |
| customer                    | Заказчик                                      | debitor                                                             | Да                                                               |                                                             |
| sender                      | Отправитель                                   | debitor                                                             | Да                                                               |                                                             |
| receiver                    | Получатель                                    | debitor                                                             | Да                                                               |                                                             |
| type                        | Вид перевозки                                 | string                                                              | Да                                                               | 01                                                          |
| declared_price              | Объявленная стоимость груза (руб)             | integer                                                             | Да                                                               | 1000                                                        |
| confirmation_price          | Наличие документов подтверждающих стоимость   | integer (1 - да,<br/> 0 - нет)                                      | Да (если declared_price<br/> более 50 000),<br/> по умолчанию 0  | 1                                                           |
| inner_track_number          | Внутренний трек-номер груза                   | string                                                              | Да (если declared_price<br/> более 50 000),<br/> по умолчанию 0  | TN0123456789                                                |
| service                     | массив кодов услуг                            | массив кодов услуг<br/> в составе places                            | Нет                                                              | places[0]service[0] = T001<br/> places[0]service[1] = S026  |
| height                      | Высота груза (см) позиции                     | decimal(10,2)                                                       | Да (если не <br/>указан volume)                                  | places[0][height] = 100<br/> places[1][height]  = 120       |
| width                       | Ширина груза (см) позиции                     | decimal(10,2)                                                       | Да (если не <br/>указан volume)                                  | places[0][width] = 100<br/> places[1][width] = 120          |
| length                      | Длина груза (см) позиции                      | decimal(10,2)                                                       | Да (если не <br/>указан volume)                                  | places[0][length] = 100<br/> places[1][length] = 120        |
| count_place                 | Количество мест в позиции                     | массив integer                                                      | Да                                                               | places[0][count_place] = 1 <br/> places[1][count_place] = 2 |
| weight                      | Масса КГ позиции                              | массив integer                                                      | Да                                                               | places[0][weight] = 2<br/> places[1][weight] = 4            |
| volume                      | Объем М³ позиции                              | массив decimal(10,3)                                                | Да (если не<br/> указаны height,<br/> width, length)             | places[1][volume] = 1 <br/> places[0][volume] = 2           |
| pick_up                     | Забор груза по городу                         | integer (1 - да,<br/> 0 - нет)                                      | Нет                                                              | 1                                                           |
| pickup_date                 | Дата забора                                   | string                                                              | Да (если pick_up = 1)                                            | 2018-03-10                                                  |
| pickup_time_start           | Время начала забора                           | string                                                              | Да (если pick_up = 1)                                            | 12:00                                                       |
| pickup_time_end             | Время окончания забора                        | string                                                              | Да (если pick_up = 1)                                            | 13:59                                                       |
| pickup_comment              | Комментарий к забору груза                    | string                                                              | Нет                                                              | Предварительно позвонить                                    |
| pickup_r                    | Забор с другого адреса отправителя            | integer (1 - да,<br/> 0 - нет)                                      | Нет (по умолчанию 0)                                             | 1                                                           |
| pickup_street               | Улица другого адреса отправителя              | string                                                              | Да (если pick_up = 1 и pickup_r = 1)                             | 8 Марта                                                     |
| pickup_house                | Дом другого адреса отправителя                | string                                                              | Да (если pick_up = 1 и pickup_r = 1)                             | 212                                                         |
| pickup_supp                 | Корпус другого адреса отправителя             | string                                                              | Нет                                                              | А                                                           |
| pickup_room                 | Офис/кварира другого адреса отправителя       | string                                                              | Нет                                                              | 3                                                           |
| deliver                     | Доставка груза по городу                      | integer (1 - да,<br/> 0 - нет)                                      | Нет                                                              | 1                                                           |
| delivery_date               | Дата доставки                                 | string                                                              | Да (если deliver = 1)                                            | 2018-03-14                                                  |
| delivery_time_start         | Время начала доставки                         | string                                                              | Да (если deliver = 1)                                            | 12:00                                                       |
| delivery_time_end           | Время окончания доставки                      | string                                                              | Да (если deliver = 1)                                            | 14:00                                                       |
| delivery_comment            | Комментарий к доставке                        | string                                                              | Нет                                                              | Предварительно позвонить                                    |
| delivery_r                  | Доставка на другой адрес получателя           | integer (1 - да,<br/> 0 - нет)                                      | Нет                                                              | 1                                                           |
| delivery_street             | Улица другого адреса получателя               | string                                                              | Да (если delivery_r = 1)                                         | 8 Марта                                                     |
| delivery_house              | Дом другого адреса получателя                 | string                                                              | Да (если delivery_r = 1)                                         | 212                                                         |
| delivery_supp               | Корпус другого адреса получателя              | string                                                              | Нет                                                              | Б                                                           |
| delivery_room               | Офис/кварира другого адреса получателя        | string                                                              | Нет                                                              | 3                                                           |
| additional_payment_shipping | Плательщик перевозки                          | string (AG - заказчик,<br/> SE - отправитель,<br/> WE - получатель) | Нет (по умолчанию AG)                                            | SE                                                          |
| additional_payment_pickup   | Плательщик забора груза                       | string (AG - заказчик,<br/> SE - отправитель,<br/> WE - получатель) | Нет (по умолчанию AG)                                            | SE                                                          |
| additional_payment_delivery | Плательщик доставки груза                     | string (AG - заказчик,<br/> SE - отправитель,<br/> WE - получатель) | Нет (по умолчанию AG)                                            | SE                                                          |
| insurance                   | Услуга страхования груза                      | integer (1 - да,<br/> 0 - нет)                                      | Да (если стоимость<br/> груза равна или<br/> более 10 000 руб.)  | 1                                                           |
| insurance_agent_code        | Код страхового агента                         | string                                                              | Да (если insurance = 1 )                                         | 8000152423                                                  |
| have_doc                    | Есть документы подтверждающие стоимость груза | integer (1 - да,<br/> 0 - нет)                                      | Да (если стоимость<br/> груза равна или<br/> более 50 000 руб. ) | 1                                                           |
| cargo_type_code             | Код характера груза                           | string                                                              | Нет (по умолчанию 03)                                            | 01                                                          |
| currency_code               | Валюта результата расчета                     | массив string                                                       | Нет (по умолчанию RUB)                                           | currency_code[0] = KZT<br/>currency_code[1] = RUB           |
| all_places_same             | Все места одинаковы по размеру                | integer (1 - да,<br/> 0 - нет)                                      | Нет (по умолчанию 0)                                             | 1                                                           |


Параметры `\service\KitAPI\Model\Entity\Order\Debitor` приведены в таблице.

| Параметр              | Описание                                | Тип                                             | Обязательный                                                                                                                                                                                               | Пример               |
|-----------------------|-----------------------------------------|-------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|----------------------|
| debitor               | Номер дебитора                          | integer(10)                                     | Да (если не указаны другие данные дебитора) <br/>Если совсем не указан customer[debitor]<br/> или другие параметры customer,<br/> то заказчиком автоматически будет указан<br/> владелец личного кабинета. | 0001011311           |
| debitor_type          | Тип дебитора                            | integer (1 - физик, <br/>2 - ИП, <br/>3 - юрик) | Да (если не указан debitor)                                                                                                                                                                                | 1                    |
| country_code          | Код страны                              | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | RU                   |
| real_country          | Страна (Физическое лицо)                | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | RU                   |
| real_city             | Город (Физическое лицо)                 | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | Екатеринбург         |
| real_street           | Улица (Физическое лицо)                 | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | Малышева             |
| real_house            | Дом (Физическое лицо)                   | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | 12                   |
| real_supp             | Корпус (Физическое лицо)                | string                                          | Нет                                                                                                                                                                                                        | Б                    |
| real_room             | Кв\Офис (Физическое лицо)               | string                                          | Нет                                                                                                                                                                                                        | 147                  |
| real_contact_name     | ФИО (Физическое лицо)                   | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | Иванов Иван Иванович |
| real_contact_phone    | Номер телефона  (Физическое лицо)       | string                                          | Да (если не указан debitor и debitor_type = 1)                                                                                                                                                             | 88002345650          |
| name_ip               | ФИО контактного лица (ИП)               | string                                          | Да (если не указан debitor и debitor_type = 2)                                                                                                                                                             | Иванов Иван Иванович |
| organization_name_ip  | ФИО (ИП)                                | string                                          | Да (если не указан debitor и debitor_type = 2)                                                                                                                                                             | Иванов Иван Иванович |
| organization_phone_ip | Номер телефона (ИП)                     | string                                          | Да (если не указан debitor и debitor_type = 2)                                                                                                                                                             | 88002345650          |
| phone_ip              | Телефон контактного лица (ИП)           | string                                          | Да (если не указан debitor и debitor_type = 2)                                                                                                                                                             | 88002345650          |
| inn_ip                | ИНН (ИП)                                | string                                          | Да (если не указан debitor и debitor_type = 2)                                                                                                                                                             | 123456789123         |
| unp_ip                | УНП (ИП)                                | string                                          | Да (если не указан debitor и debitor_type = 2 и country_code = BY)                                                                                                                                         | 123456789            |
| legal_country         | Страна (ИП или Юр.лицо)                 | string                                          | Да (если не указан debitor и debitor_type = 2 или debitor_type = 3)                                                                                                                                        | RU                   |
| legal_city            | Город (ИП или Юр.лицо)                  | string                                          | Да (если не указан debitor и debitor_type = 2 или debitor_type = 3)                                                                                                                                        | Екатеринбург         |
| legal_street          | Улица (ИП или Юр.лицо)                  | string                                          | Да (если не указан debitor и debitor_type = 2 или debitor_type = 3)                                                                                                                                        | Уральских рабочих    |
| legal_house           | Дом (ИП или Юр.лицо)	                   | string                                          | Да (если не указан debitor и debitor_type = 2 или debitor_type = 3)                                                                                                                                        | 147                  |
| legal_supp            | Корпус (ИП или Юр.лицо)                 | string                                          | Нет                                                                                                                                                                                                        | Б                    |
| legal_room            | Кв\Офис (ИП или Юр.лицо)                | string                                          | Нет                                                                                                                                                                                                        | 12                   |
| iin                   | ИИН                                     | string                                          | Да (если не указан debitor и debitor_type = 2 и country_code = KZ)                                                                                                                                         | 123456789123         |
| kpp                   | КПП                                     | string                                          | Да (если не указан debitor и debitor_type = 3 и country_code = RU)                                                                                                                                         | 123456789            |
| name_ur               | ФИО контактного лица (Юридическое лицо) | string                                          | Да (если не указан debitor и debitor_type = 3)                                                                                                                                                             | Иванов Иван Иванович |
| organization_name_ur  | Наименование организации                | string                                          | Да (если не указан debitor и debitor_type = 3)                                                                                                                                                             | ООО "Кашалот"        |
| organization_phone_ur | Телефон организации                     | string                                          | Да (если не указан debitor и debitor_type = 3)                                                                                                                                                             | 88002345650          |
| phone_ur              | ФИО контактного лица (Юридическое лицо) | string                                          | Да (если не указан debitor и debitor_type = 3)                                                                                                                                                             | 88002345650          |
| unp_ur                | УНП  (Юридическое лицо)                 | string                                          | Да (если не указан debitor и debitor_type = 3 и country_code = BY)                                                                                                                                         | 123456789            |
| inn_ur                | ИНН  (Юридический лицо)                 | string                                          | Да (если не указан debitor и debitor_type = 3)                                                                                                                                                             | 123456789            |
| bin                   | БИН                                     | string                                          | Да (если не указан debitor и debitor_type = 3 и country_code = KZ)                                                                                                                                         | 123456789112         |


### Создание заказа на посылку
`(1.0/order/create-post)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\CreatePostRequest();
$response = $client->order->createPost($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\CreatePostRequest` приведены в таблице.

| Параметр                    | Описание                                      | Тип                                                                 | Обязательный                                                     | Пример                                                    |
|-----------------------------|-----------------------------------------------|---------------------------------------------------------------------|------------------------------------------------------------------|-----------------------------------------------------------|
| city_pickup_code            | Код города откуда                             | string                                                              | Да                                                               | 660000100000                                              |
| city_delivery_code          | Код города куда                               | string                                                              | Да                                                               | 000000000001                                              |
| pickpoint_address_code      | Код терминала получения                       | string                                                              | Нет                                                              | 2301                                                      |
| customer                    | Заказчик                                      | debitor                                                             | Да                                                               |                                                           |
| sender                      | Отправитель                                   | debitor                                                             | Да                                                               |                                                           |
| receiver                    | Получатель                                    | debitor                                                             | Да                                                               |                                                           |
| type                        | Вид перевозки                                 | string                                                              | Да                                                               | 01                                                        |
| declared_price              | Объявленная стоимость груза (руб)             | integer                                                             | Да                                                               | 1000                                                      |
| confirmation_price          | Наличие документов подтверждающих стоимость   | integer (1 - да,<br/> 0 - нет)                                      | Да (если declared_price<br/> более 50 000),<br/> по умолчанию 0  | 1                                                         |
| inner_track_number          | Внутренний трек-номер груза                   | string                                                              | Да (если declared_price<br/> более 50 000),<br/> по умолчанию 0  | TN0123456789                                              |
| service                     | массив кодов услуг                            | массив кодов услуг<br/> в составе places                            | Нет                                                              | service[0] = T001<br/> service[1] = S026  |
| type_post                   | Тип посылки                                   | string (01 - XS, 02 - S, 03 - M, 04 - L)                            | Да (если не <br/>указан volume)                                  | places[0][height] = 100<br/> places[1][height]  = 120     |
| additional_payment_shipping | Плательщик перевозки                          | string (AG - заказчик,<br/> SE - отправитель,<br/> WE - получатель) | Нет (по умолчанию AG)                                            | SE                                                        |
| additional_payment_pickup   | Плательщик забора груза                       | string (AG - заказчик,<br/> SE - отправитель,<br/> WE - получатель) | Нет (по умолчанию AG)                                            | SE                                                        |
| additional_payment_delivery | Плательщик доставки груза                     | string (AG - заказчик,<br/> SE - отправитель,<br/> WE - получатель) | Нет (по умолчанию AG)                                            | SE                                                        |
| insurance                   | Услуга страхования груза                      | integer (1 - да,<br/> 0 - нет)                                      | Да (если стоимость<br/> груза равна или<br/> более 10 000 руб.)  | 1                                                         |
| insurance_agent_code        | Код страхового агента                         | string                                                              | Да (если insurance = 1 )                                         | 8000152423                                                |
| have_doc                    | Есть документы подтверждающие стоимость груза | integer (1 - да,<br/> 0 - нет)                                      | Да (если стоимость<br/> груза равна или<br/> более 50 000 руб. ) | 1                                                         |
| cargo_type_code             | Код характера груза                           | string                                                              | Нет (по умолчанию 03)                                            | 01                                                        |
| currency_code               | Валюта результата расчета                     | массив string                                                       | Нет (по умолчанию RUB)                                           | currency_code[0] = KZT<br/>currency_code[1] = RUB         |


### Список заказов
`(1.0/order/get-list)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\GetListOrderRequest($date_start,$date_end, $limit, $offset, $profile_id);
$response = $client->order->getListOrder($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\GetListOrderRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр    | Описание                  | Тип     | Обязательный                           | Пример     |
|-------------|---------------------------|---------|----------------------------------------|------------|
| date_start  | Дата начала диапозона     | date    | Да                                     | 2023-04-01 |
| date_end    | Дата завершение диапозона | date    | Да                                     | 2023-05-08 |
| limit       | Количество записей        | integer | Нет, по умолчанию 10 (мин 1 - макс 30) | 10         |
| offset      | Смещение                  | integer | Нет, по умолчанию 0 (мин 0)            | 10         |
| profile_id  | ID профиля                | integer | Нет                                    | 1          |


### Время доставки
`(1.0/order/time-delivery)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\TimeDeliveryRequest($adress_id_from,$adress_id_to,$timestamp, $pickap, $delivery, $hardpack);
$response = $client->order->getTimeDelivery($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\TimeDeliveryRequest` приведены в таблице. Передача параметров через конструктор класса.

| Параметр       | Описание                 | Тип                             | Обязательный | Пример              |
|----------------|--------------------------|---------------------------------|--------------|---------------------|
| adress_id_from | Код адреса откуда        | date                            | Да           | 518                 |
| adress_id_to   | Код адреса куда          | date                            | Да           | 733                 |
| timestamp      | Дата и время сдачи груза | integer                         | Да           | 2022-09-15 15:02:00 |
| pickup         | Забор груза              | integer (1 - да,<br/> 0 - нет)  | Нет          | 0                   |
| delivery       | Услуга доставки          | integer (1 - да,<br/> 0 - нет)  | Нет          | 0                   |
| hardpack       | Наличие жесткой упаковки | integer (1 - да,<br/> 0 - нет)  | Нет          | 0                   |


### Статус заказа
`(1.0/order/status/get)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\GetStatusRequest($cargo_number);
$response = $client->order->getStatus($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\GetStatusRequest` приведены в таблице. Передача параметров через конструктор класса.


| Параметр      | Описание    | Тип      | Обязательный | Пример            |
|---------------|-------------|----------|--------------|-------------------|
| cargo_number  | Номер груза | string   | Да           | ТБЛЕКБ0010000111  |


### Информация по заказу
`(1.0/order/get)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\GetOrderRequest($sale_number, $profile_id);
$response = $client->order->getOrder($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\GetOrderRequest` приведены в таблице. Передача параметров через конструктор класса.


| Параметр     | Описание    | Тип      | Обязательный | Пример     |
|--------------|-------------|----------|--------------|------------|
| sale_number  | Номер груза | string   | Да           | 1105871333 |
| profile_id    | ID профиля | integer  | Нет          | 1          |


### Фото груза по заказу
`(1.0/order/photo/get)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\GetPhotoRequest($sale_number, $type, $profile_id);
$response = $client->order->getPhoto($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\GetPhotoRequest` приведены в таблице. Передача параметров через конструктор класса.


| Параметр      | Описание      | Тип                                                                             | Обязательный | Пример     |
|---------------|---------------|---------------------------------------------------------------------------------|--------------|------------|
| sale_number   | Номер груза   | string                                                                          | Да           | 1105871333 |
| type          | Тип фото      | integer (<br/>1 - Приём груза на начальный склад<br/> 2 - Подтверждение выдачи) | Да           | 1          |
| profile_id    | ID профиля    | integer                                                                         | Нет          | 1          |


### Документ груза по заказу
`(1.0/order/document/get)`

Пример вызова метода:
```php
$request = new \service\KitAPI\Model\Request\Order\GetDocumentRequest($sale_number, $type_code);
$response = $client->order->getDocument($request)
```
Параметры запроса `\service\KitAPI\Model\Request\Order\GetDocumentRequest` приведены в таблице. Передача параметров через конструктор класса.


| Параметр     | Описание       | Тип                                                                                                                                                   | Обязательный | Пример     |
|--------------|----------------|-------------------------------------------------------------------------------------------------------------------------------------------------------|--------------|------------|
| sale_number  | Номер груза    | string                                                                                                                                                | Да           | 1105876644 |
| type_code    | Тип документа  | integer (<br/>1 - Экспедиторская расписка<br/> 2 - Поручение экспедитору<br/> 3 - Маркировка<br/> 4 - Маркировка для посылки<br/> 5 - Счет на оплату) | Да           | 1          |


### Список валют
`(1.0/order/currency/get-list)`

Пример вызова метода:
```php
$response = $client->order->getListCurrency()
```
* нет параметров


### Список услуг
`(1.0/order/service/get-list)`

Пример вызова метода:
```php
$response = $client->order->getListService()
```
* нет параметров

