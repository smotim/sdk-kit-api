<?php

function serialize_service_KitAPI_Model_Entity_Order_CalculateResult(service\KitAPI\Model\Entity\Order\CalculateResult $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->standart) {
    $jsonData["standart"] = [];
if (null !== $model->standart->name) {
    $jsonData["standart"]["name"] = $model->standart->name;
}
if (null !== $model->standart->cost) {
    $jsonData["standart"]["cost"] = $model->standart->cost;
}
if (null !== $model->standart->time) {
    $jsonData["standart"]["time"] = $model->standart->time;
}
if (null !== $model->standart->currency_code) {
    $jsonData["standart"]["currency_code"] = $model->standart->currency_code;
}
if (null !== $model->standart->detail) {
    $index22Array = $model->standart->detail;
if ($model->standart->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index22Array = $model->standart->detail->toArray();
}
    
$jsonData["standart"]["detail"] = [];
foreach (array_keys($index22Array) as $index22) {
    $jsonData["standart"]["detail"][$index22] = [];
if (null !== $model->standart->detail[$index22]->name) {
    $jsonData["standart"]["detail"][$index22]["name"] = $model->standart->detail[$index22]->name;
}
if (null !== $model->standart->detail[$index22]->code) {
    $jsonData["standart"]["detail"][$index22]["code"] = $model->standart->detail[$index22]->code;
}
if (null !== $model->standart->detail[$index22]->price) {
    $jsonData["standart"]["detail"][$index22]["price"] = $model->standart->detail[$index22]->price;
}

if (0 === \count($jsonData["standart"]["detail"][$index22])) {
    $jsonData["standart"]["detail"][$index22] = $emptyObject;
}

}

}

if (0 === \count($jsonData["standart"])) {
    $jsonData["standart"] = $emptyObject;
}

}
if (null !== $model->economy) {
    $jsonData["economy"] = [];
if (null !== $model->economy->name) {
    $jsonData["economy"]["name"] = $model->economy->name;
}
if (null !== $model->economy->cost) {
    $jsonData["economy"]["cost"] = $model->economy->cost;
}
if (null !== $model->economy->time) {
    $jsonData["economy"]["time"] = $model->economy->time;
}
if (null !== $model->economy->currency_code) {
    $jsonData["economy"]["currency_code"] = $model->economy->currency_code;
}
if (null !== $model->economy->detail) {
    $index21Array = $model->economy->detail;
if ($model->economy->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index21Array = $model->economy->detail->toArray();
}
    
$jsonData["economy"]["detail"] = [];
foreach (array_keys($index21Array) as $index21) {
    $jsonData["economy"]["detail"][$index21] = [];
if (null !== $model->economy->detail[$index21]->name) {
    $jsonData["economy"]["detail"][$index21]["name"] = $model->economy->detail[$index21]->name;
}
if (null !== $model->economy->detail[$index21]->code) {
    $jsonData["economy"]["detail"][$index21]["code"] = $model->economy->detail[$index21]->code;
}
if (null !== $model->economy->detail[$index21]->price) {
    $jsonData["economy"]["detail"][$index21]["price"] = $model->economy->detail[$index21]->price;
}

if (0 === \count($jsonData["economy"]["detail"][$index21])) {
    $jsonData["economy"]["detail"][$index21] = $emptyObject;
}

}

}

if (0 === \count($jsonData["economy"])) {
    $jsonData["economy"] = $emptyObject;
}

}
if (null !== $model->express) {
    $jsonData["express"] = [];
if (null !== $model->express->name) {
    $jsonData["express"]["name"] = $model->express->name;
}
if (null !== $model->express->cost) {
    $jsonData["express"]["cost"] = $model->express->cost;
}
if (null !== $model->express->time) {
    $jsonData["express"]["time"] = $model->express->time;
}
if (null !== $model->express->currency_code) {
    $jsonData["express"]["currency_code"] = $model->express->currency_code;
}
if (null !== $model->express->detail) {
    $index21Array = $model->express->detail;
if ($model->express->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index21Array = $model->express->detail->toArray();
}
    
$jsonData["express"]["detail"] = [];
foreach (array_keys($index21Array) as $index21) {
    $jsonData["express"]["detail"][$index21] = [];
if (null !== $model->express->detail[$index21]->name) {
    $jsonData["express"]["detail"][$index21]["name"] = $model->express->detail[$index21]->name;
}
if (null !== $model->express->detail[$index21]->code) {
    $jsonData["express"]["detail"][$index21]["code"] = $model->express->detail[$index21]->code;
}
if (null !== $model->express->detail[$index21]->price) {
    $jsonData["express"]["detail"][$index21]["price"] = $model->express->detail[$index21]->price;
}

if (0 === \count($jsonData["express"]["detail"][$index21])) {
    $jsonData["express"]["detail"][$index21] = $emptyObject;
}

}

}

if (0 === \count($jsonData["express"])) {
    $jsonData["express"] = $emptyObject;
}

}
if (null !== $model->standard_courier) {
    $jsonData["standard_courier"] = [];
if (null !== $model->standard_courier->name) {
    $jsonData["standard_courier"]["name"] = $model->standard_courier->name;
}
if (null !== $model->standard_courier->cost) {
    $jsonData["standard_courier"]["cost"] = $model->standard_courier->cost;
}
if (null !== $model->standard_courier->time) {
    $jsonData["standard_courier"]["time"] = $model->standard_courier->time;
}
if (null !== $model->standard_courier->currency_code) {
    $jsonData["standard_courier"]["currency_code"] = $model->standard_courier->currency_code;
}
if (null !== $model->standard_courier->detail) {
    $index30Array = $model->standard_courier->detail;
if ($model->standard_courier->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index30Array = $model->standard_courier->detail->toArray();
}
    
$jsonData["standard_courier"]["detail"] = [];
foreach (array_keys($index30Array) as $index30) {
    $jsonData["standard_courier"]["detail"][$index30] = [];
if (null !== $model->standard_courier->detail[$index30]->name) {
    $jsonData["standard_courier"]["detail"][$index30]["name"] = $model->standard_courier->detail[$index30]->name;
}
if (null !== $model->standard_courier->detail[$index30]->code) {
    $jsonData["standard_courier"]["detail"][$index30]["code"] = $model->standard_courier->detail[$index30]->code;
}
if (null !== $model->standard_courier->detail[$index30]->price) {
    $jsonData["standard_courier"]["detail"][$index30]["price"] = $model->standard_courier->detail[$index30]->price;
}

if (0 === \count($jsonData["standard_courier"]["detail"][$index30])) {
    $jsonData["standard_courier"]["detail"][$index30] = $emptyObject;
}

}

}

if (0 === \count($jsonData["standard_courier"])) {
    $jsonData["standard_courier"] = $emptyObject;
}

}
if (null !== $model->express_courier) {
    $jsonData["express_courier"] = [];
if (null !== $model->express_courier->name) {
    $jsonData["express_courier"]["name"] = $model->express_courier->name;
}
if (null !== $model->express_courier->cost) {
    $jsonData["express_courier"]["cost"] = $model->express_courier->cost;
}
if (null !== $model->express_courier->time) {
    $jsonData["express_courier"]["time"] = $model->express_courier->time;
}
if (null !== $model->express_courier->currency_code) {
    $jsonData["express_courier"]["currency_code"] = $model->express_courier->currency_code;
}
if (null !== $model->express_courier->detail) {
    $index29Array = $model->express_courier->detail;
if ($model->express_courier->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index29Array = $model->express_courier->detail->toArray();
}
    
$jsonData["express_courier"]["detail"] = [];
foreach (array_keys($index29Array) as $index29) {
    $jsonData["express_courier"]["detail"][$index29] = [];
if (null !== $model->express_courier->detail[$index29]->name) {
    $jsonData["express_courier"]["detail"][$index29]["name"] = $model->express_courier->detail[$index29]->name;
}
if (null !== $model->express_courier->detail[$index29]->code) {
    $jsonData["express_courier"]["detail"][$index29]["code"] = $model->express_courier->detail[$index29]->code;
}
if (null !== $model->express_courier->detail[$index29]->price) {
    $jsonData["express_courier"]["detail"][$index29]["price"] = $model->express_courier->detail[$index29]->price;
}

if (0 === \count($jsonData["express_courier"]["detail"][$index29])) {
    $jsonData["express_courier"]["detail"][$index29] = $emptyObject;
}

}

}

if (0 === \count($jsonData["express_courier"])) {
    $jsonData["express_courier"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
