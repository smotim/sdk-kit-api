<?php

function serialize_service_KitAPI_Model_Response_Order_CalculateResponse(service\KitAPI\Model\Response\Order\CalculateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->calculateResults) {
    $index16Array = $model->calculateResults;
if ($model->calculateResults instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->calculateResults->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->calculateResults[$index16]->calculate) {
    $jsonData["hidden_array"][$index16]["hidden_array"] = [];
if (null !== $model->calculateResults[$index16]->calculate->standart) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"] = [];
if (null !== $model->calculateResults[$index16]->calculate->standart->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["name"] = $model->calculateResults[$index16]->calculate->standart->name;
}
if (null !== $model->calculateResults[$index16]->calculate->standart->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["cost"] = $model->calculateResults[$index16]->calculate->standart->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->standart->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["time"] = $model->calculateResults[$index16]->calculate->standart->time;
}
if (null !== $model->calculateResults[$index16]->calculate->standart->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["currency_code"] = $model->calculateResults[$index16]->calculate->standart->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->standart->detail) {
    $index64Array = $model->calculateResults[$index16]->calculate->standart->detail;
if ($model->calculateResults[$index16]->calculate->standart->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index64Array = $model->calculateResults[$index16]->calculate->standart->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"] = [];
foreach (array_keys($index64Array) as $index64) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"][$index64] = [];
if (null !== $model->calculateResults[$index16]->calculate->standart->detail[$index64]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"][$index64]["name"] = $model->calculateResults[$index16]->calculate->standart->detail[$index64]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->standart->detail[$index64]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"][$index64]["code"] = $model->calculateResults[$index16]->calculate->standart->detail[$index64]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->standart->detail[$index64]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"][$index64]["price"] = $model->calculateResults[$index16]->calculate->standart->detail[$index64]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"][$index64])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"]["detail"][$index64] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["standart"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standart"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->economy) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"] = [];
if (null !== $model->calculateResults[$index16]->calculate->economy->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["name"] = $model->calculateResults[$index16]->calculate->economy->name;
}
if (null !== $model->calculateResults[$index16]->calculate->economy->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["cost"] = $model->calculateResults[$index16]->calculate->economy->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->economy->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["time"] = $model->calculateResults[$index16]->calculate->economy->time;
}
if (null !== $model->calculateResults[$index16]->calculate->economy->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["currency_code"] = $model->calculateResults[$index16]->calculate->economy->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->economy->detail) {
    $index63Array = $model->calculateResults[$index16]->calculate->economy->detail;
if ($model->calculateResults[$index16]->calculate->economy->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index63Array = $model->calculateResults[$index16]->calculate->economy->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"] = [];
foreach (array_keys($index63Array) as $index63) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"][$index63] = [];
if (null !== $model->calculateResults[$index16]->calculate->economy->detail[$index63]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"][$index63]["name"] = $model->calculateResults[$index16]->calculate->economy->detail[$index63]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->economy->detail[$index63]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"][$index63]["code"] = $model->calculateResults[$index16]->calculate->economy->detail[$index63]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->economy->detail[$index63]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"][$index63]["price"] = $model->calculateResults[$index16]->calculate->economy->detail[$index63]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"][$index63])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"]["detail"][$index63] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["economy"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["economy"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->express) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"] = [];
if (null !== $model->calculateResults[$index16]->calculate->express->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["name"] = $model->calculateResults[$index16]->calculate->express->name;
}
if (null !== $model->calculateResults[$index16]->calculate->express->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["cost"] = $model->calculateResults[$index16]->calculate->express->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->express->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["time"] = $model->calculateResults[$index16]->calculate->express->time;
}
if (null !== $model->calculateResults[$index16]->calculate->express->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["currency_code"] = $model->calculateResults[$index16]->calculate->express->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->express->detail) {
    $index63Array = $model->calculateResults[$index16]->calculate->express->detail;
if ($model->calculateResults[$index16]->calculate->express->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index63Array = $model->calculateResults[$index16]->calculate->express->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"] = [];
foreach (array_keys($index63Array) as $index63) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"][$index63] = [];
if (null !== $model->calculateResults[$index16]->calculate->express->detail[$index63]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"][$index63]["name"] = $model->calculateResults[$index16]->calculate->express->detail[$index63]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->express->detail[$index63]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"][$index63]["code"] = $model->calculateResults[$index16]->calculate->express->detail[$index63]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->express->detail[$index63]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"][$index63]["price"] = $model->calculateResults[$index16]->calculate->express->detail[$index63]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"][$index63])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"]["detail"][$index63] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["express"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"] = [];
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["name"] = $model->calculateResults[$index16]->calculate->standard_courier->name;
}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["cost"] = $model->calculateResults[$index16]->calculate->standard_courier->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["time"] = $model->calculateResults[$index16]->calculate->standard_courier->time;
}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["currency_code"] = $model->calculateResults[$index16]->calculate->standard_courier->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->detail) {
    $index72Array = $model->calculateResults[$index16]->calculate->standard_courier->detail;
if ($model->calculateResults[$index16]->calculate->standard_courier->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index72Array = $model->calculateResults[$index16]->calculate->standard_courier->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"] = [];
foreach (array_keys($index72Array) as $index72) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"][$index72] = [];
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->detail[$index72]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"][$index72]["name"] = $model->calculateResults[$index16]->calculate->standard_courier->detail[$index72]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->detail[$index72]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"][$index72]["code"] = $model->calculateResults[$index16]->calculate->standard_courier->detail[$index72]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->standard_courier->detail[$index72]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"][$index72]["price"] = $model->calculateResults[$index16]->calculate->standard_courier->detail[$index72]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"][$index72])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"]["detail"][$index72] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["standard_courier"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->express_courier) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"] = [];
if (null !== $model->calculateResults[$index16]->calculate->express_courier->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["name"] = $model->calculateResults[$index16]->calculate->express_courier->name;
}
if (null !== $model->calculateResults[$index16]->calculate->express_courier->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["cost"] = $model->calculateResults[$index16]->calculate->express_courier->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->express_courier->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["time"] = $model->calculateResults[$index16]->calculate->express_courier->time;
}
if (null !== $model->calculateResults[$index16]->calculate->express_courier->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["currency_code"] = $model->calculateResults[$index16]->calculate->express_courier->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->express_courier->detail) {
    $index71Array = $model->calculateResults[$index16]->calculate->express_courier->detail;
if ($model->calculateResults[$index16]->calculate->express_courier->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index71Array = $model->calculateResults[$index16]->calculate->express_courier->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"] = [];
foreach (array_keys($index71Array) as $index71) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"][$index71] = [];
if (null !== $model->calculateResults[$index16]->calculate->express_courier->detail[$index71]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"][$index71]["name"] = $model->calculateResults[$index16]->calculate->express_courier->detail[$index71]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->express_courier->detail[$index71]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"][$index71]["code"] = $model->calculateResults[$index16]->calculate->express_courier->detail[$index71]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->express_courier->detail[$index71]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"][$index71]["price"] = $model->calculateResults[$index16]->calculate->express_courier->detail[$index71]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"][$index71])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"]["detail"][$index71] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["express_courier"] = $emptyObject;
}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"] = $emptyObject;
}

}

if (0 === \count($jsonData["hidden_array"][$index16])) {
    $jsonData["hidden_array"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
