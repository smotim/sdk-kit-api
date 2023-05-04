<?php

function serialize_service_KitAPI_Model_Entity_Order_Calculate(service\KitAPI\Model\Entity\Order\Calculate $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->calculate) {
    $jsonData["hidden_array"] = [];
if (null !== $model->calculate->standart) {
    $jsonData["hidden_array"]["standart"] = [];
if (null !== $model->calculate->standart->name) {
    $jsonData["hidden_array"]["standart"]["name"] = $model->calculate->standart->name;
}
if (null !== $model->calculate->standart->cost) {
    $jsonData["hidden_array"]["standart"]["cost"] = $model->calculate->standart->cost;
}
if (null !== $model->calculate->standart->time) {
    $jsonData["hidden_array"]["standart"]["time"] = $model->calculate->standart->time;
}
if (null !== $model->calculate->standart->currency_code) {
    $jsonData["hidden_array"]["standart"]["currency_code"] = $model->calculate->standart->currency_code;
}
if (null !== $model->calculate->standart->detail) {
    $index38Array = $model->calculate->standart->detail;
if ($model->calculate->standart->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index38Array = $model->calculate->standart->detail->toArray();
}
    
$jsonData["hidden_array"]["standart"]["detail"] = [];
foreach (array_keys($index38Array) as $index38) {
    $jsonData["hidden_array"]["standart"]["detail"][$index38] = [];
if (null !== $model->calculate->standart->detail[$index38]->name) {
    $jsonData["hidden_array"]["standart"]["detail"][$index38]["name"] = $model->calculate->standart->detail[$index38]->name;
}
if (null !== $model->calculate->standart->detail[$index38]->code) {
    $jsonData["hidden_array"]["standart"]["detail"][$index38]["code"] = $model->calculate->standart->detail[$index38]->code;
}
if (null !== $model->calculate->standart->detail[$index38]->price) {
    $jsonData["hidden_array"]["standart"]["detail"][$index38]["price"] = $model->calculate->standart->detail[$index38]->price;
}

if (0 === \count($jsonData["hidden_array"]["standart"]["detail"][$index38])) {
    $jsonData["hidden_array"]["standart"]["detail"][$index38] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["standart"])) {
    $jsonData["hidden_array"]["standart"] = $emptyObject;
}

}
if (null !== $model->calculate->economy) {
    $jsonData["hidden_array"]["economy"] = [];
if (null !== $model->calculate->economy->name) {
    $jsonData["hidden_array"]["economy"]["name"] = $model->calculate->economy->name;
}
if (null !== $model->calculate->economy->cost) {
    $jsonData["hidden_array"]["economy"]["cost"] = $model->calculate->economy->cost;
}
if (null !== $model->calculate->economy->time) {
    $jsonData["hidden_array"]["economy"]["time"] = $model->calculate->economy->time;
}
if (null !== $model->calculate->economy->currency_code) {
    $jsonData["hidden_array"]["economy"]["currency_code"] = $model->calculate->economy->currency_code;
}
if (null !== $model->calculate->economy->detail) {
    $index37Array = $model->calculate->economy->detail;
if ($model->calculate->economy->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index37Array = $model->calculate->economy->detail->toArray();
}
    
$jsonData["hidden_array"]["economy"]["detail"] = [];
foreach (array_keys($index37Array) as $index37) {
    $jsonData["hidden_array"]["economy"]["detail"][$index37] = [];
if (null !== $model->calculate->economy->detail[$index37]->name) {
    $jsonData["hidden_array"]["economy"]["detail"][$index37]["name"] = $model->calculate->economy->detail[$index37]->name;
}
if (null !== $model->calculate->economy->detail[$index37]->code) {
    $jsonData["hidden_array"]["economy"]["detail"][$index37]["code"] = $model->calculate->economy->detail[$index37]->code;
}
if (null !== $model->calculate->economy->detail[$index37]->price) {
    $jsonData["hidden_array"]["economy"]["detail"][$index37]["price"] = $model->calculate->economy->detail[$index37]->price;
}

if (0 === \count($jsonData["hidden_array"]["economy"]["detail"][$index37])) {
    $jsonData["hidden_array"]["economy"]["detail"][$index37] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["economy"])) {
    $jsonData["hidden_array"]["economy"] = $emptyObject;
}

}
if (null !== $model->calculate->express) {
    $jsonData["hidden_array"]["express"] = [];
if (null !== $model->calculate->express->name) {
    $jsonData["hidden_array"]["express"]["name"] = $model->calculate->express->name;
}
if (null !== $model->calculate->express->cost) {
    $jsonData["hidden_array"]["express"]["cost"] = $model->calculate->express->cost;
}
if (null !== $model->calculate->express->time) {
    $jsonData["hidden_array"]["express"]["time"] = $model->calculate->express->time;
}
if (null !== $model->calculate->express->currency_code) {
    $jsonData["hidden_array"]["express"]["currency_code"] = $model->calculate->express->currency_code;
}
if (null !== $model->calculate->express->detail) {
    $index37Array = $model->calculate->express->detail;
if ($model->calculate->express->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index37Array = $model->calculate->express->detail->toArray();
}
    
$jsonData["hidden_array"]["express"]["detail"] = [];
foreach (array_keys($index37Array) as $index37) {
    $jsonData["hidden_array"]["express"]["detail"][$index37] = [];
if (null !== $model->calculate->express->detail[$index37]->name) {
    $jsonData["hidden_array"]["express"]["detail"][$index37]["name"] = $model->calculate->express->detail[$index37]->name;
}
if (null !== $model->calculate->express->detail[$index37]->code) {
    $jsonData["hidden_array"]["express"]["detail"][$index37]["code"] = $model->calculate->express->detail[$index37]->code;
}
if (null !== $model->calculate->express->detail[$index37]->price) {
    $jsonData["hidden_array"]["express"]["detail"][$index37]["price"] = $model->calculate->express->detail[$index37]->price;
}

if (0 === \count($jsonData["hidden_array"]["express"]["detail"][$index37])) {
    $jsonData["hidden_array"]["express"]["detail"][$index37] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["express"])) {
    $jsonData["hidden_array"]["express"] = $emptyObject;
}

}
if (null !== $model->calculate->standard_courier) {
    $jsonData["hidden_array"]["standard_courier"] = [];
if (null !== $model->calculate->standard_courier->name) {
    $jsonData["hidden_array"]["standard_courier"]["name"] = $model->calculate->standard_courier->name;
}
if (null !== $model->calculate->standard_courier->cost) {
    $jsonData["hidden_array"]["standard_courier"]["cost"] = $model->calculate->standard_courier->cost;
}
if (null !== $model->calculate->standard_courier->time) {
    $jsonData["hidden_array"]["standard_courier"]["time"] = $model->calculate->standard_courier->time;
}
if (null !== $model->calculate->standard_courier->currency_code) {
    $jsonData["hidden_array"]["standard_courier"]["currency_code"] = $model->calculate->standard_courier->currency_code;
}
if (null !== $model->calculate->standard_courier->detail) {
    $index46Array = $model->calculate->standard_courier->detail;
if ($model->calculate->standard_courier->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index46Array = $model->calculate->standard_courier->detail->toArray();
}
    
$jsonData["hidden_array"]["standard_courier"]["detail"] = [];
foreach (array_keys($index46Array) as $index46) {
    $jsonData["hidden_array"]["standard_courier"]["detail"][$index46] = [];
if (null !== $model->calculate->standard_courier->detail[$index46]->name) {
    $jsonData["hidden_array"]["standard_courier"]["detail"][$index46]["name"] = $model->calculate->standard_courier->detail[$index46]->name;
}
if (null !== $model->calculate->standard_courier->detail[$index46]->code) {
    $jsonData["hidden_array"]["standard_courier"]["detail"][$index46]["code"] = $model->calculate->standard_courier->detail[$index46]->code;
}
if (null !== $model->calculate->standard_courier->detail[$index46]->price) {
    $jsonData["hidden_array"]["standard_courier"]["detail"][$index46]["price"] = $model->calculate->standard_courier->detail[$index46]->price;
}

if (0 === \count($jsonData["hidden_array"]["standard_courier"]["detail"][$index46])) {
    $jsonData["hidden_array"]["standard_courier"]["detail"][$index46] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["standard_courier"])) {
    $jsonData["hidden_array"]["standard_courier"] = $emptyObject;
}

}
if (null !== $model->calculate->express_courier) {
    $jsonData["hidden_array"]["express_courier"] = [];
if (null !== $model->calculate->express_courier->name) {
    $jsonData["hidden_array"]["express_courier"]["name"] = $model->calculate->express_courier->name;
}
if (null !== $model->calculate->express_courier->cost) {
    $jsonData["hidden_array"]["express_courier"]["cost"] = $model->calculate->express_courier->cost;
}
if (null !== $model->calculate->express_courier->time) {
    $jsonData["hidden_array"]["express_courier"]["time"] = $model->calculate->express_courier->time;
}
if (null !== $model->calculate->express_courier->currency_code) {
    $jsonData["hidden_array"]["express_courier"]["currency_code"] = $model->calculate->express_courier->currency_code;
}
if (null !== $model->calculate->express_courier->detail) {
    $index45Array = $model->calculate->express_courier->detail;
if ($model->calculate->express_courier->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index45Array = $model->calculate->express_courier->detail->toArray();
}
    
$jsonData["hidden_array"]["express_courier"]["detail"] = [];
foreach (array_keys($index45Array) as $index45) {
    $jsonData["hidden_array"]["express_courier"]["detail"][$index45] = [];
if (null !== $model->calculate->express_courier->detail[$index45]->name) {
    $jsonData["hidden_array"]["express_courier"]["detail"][$index45]["name"] = $model->calculate->express_courier->detail[$index45]->name;
}
if (null !== $model->calculate->express_courier->detail[$index45]->code) {
    $jsonData["hidden_array"]["express_courier"]["detail"][$index45]["code"] = $model->calculate->express_courier->detail[$index45]->code;
}
if (null !== $model->calculate->express_courier->detail[$index45]->price) {
    $jsonData["hidden_array"]["express_courier"]["detail"][$index45]["price"] = $model->calculate->express_courier->detail[$index45]->price;
}

if (0 === \count($jsonData["hidden_array"]["express_courier"]["detail"][$index45])) {
    $jsonData["hidden_array"]["express_courier"]["detail"][$index45] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["express_courier"])) {
    $jsonData["hidden_array"]["express_courier"] = $emptyObject;
}

}

if (0 === \count($jsonData["hidden_array"])) {
    $jsonData["hidden_array"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
