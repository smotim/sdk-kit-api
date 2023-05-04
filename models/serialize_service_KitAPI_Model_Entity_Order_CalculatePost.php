<?php

function serialize_service_KitAPI_Model_Entity_Order_CalculatePost(service\KitAPI\Model\Entity\Order\CalculatePost $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->calculate) {
    $jsonData["hidden_array"] = [];
if (null !== $model->calculate->XS) {
    $jsonData["hidden_array"]["XS"] = [];
if (null !== $model->calculate->XS->name) {
    $jsonData["hidden_array"]["XS"]["name"] = $model->calculate->XS->name;
}
if (null !== $model->calculate->XS->cost) {
    $jsonData["hidden_array"]["XS"]["cost"] = $model->calculate->XS->cost;
}
if (null !== $model->calculate->XS->time) {
    $jsonData["hidden_array"]["XS"]["time"] = $model->calculate->XS->time;
}
if (null !== $model->calculate->XS->currency_code) {
    $jsonData["hidden_array"]["XS"]["currency_code"] = $model->calculate->XS->currency_code;
}
if (null !== $model->calculate->XS->detail) {
    $index32Array = $model->calculate->XS->detail;
if ($model->calculate->XS->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index32Array = $model->calculate->XS->detail->toArray();
}
    
$jsonData["hidden_array"]["XS"]["detail"] = [];
foreach (array_keys($index32Array) as $index32) {
    $jsonData["hidden_array"]["XS"]["detail"][$index32] = [];
if (null !== $model->calculate->XS->detail[$index32]->name) {
    $jsonData["hidden_array"]["XS"]["detail"][$index32]["name"] = $model->calculate->XS->detail[$index32]->name;
}
if (null !== $model->calculate->XS->detail[$index32]->code) {
    $jsonData["hidden_array"]["XS"]["detail"][$index32]["code"] = $model->calculate->XS->detail[$index32]->code;
}
if (null !== $model->calculate->XS->detail[$index32]->price) {
    $jsonData["hidden_array"]["XS"]["detail"][$index32]["price"] = $model->calculate->XS->detail[$index32]->price;
}

if (0 === \count($jsonData["hidden_array"]["XS"]["detail"][$index32])) {
    $jsonData["hidden_array"]["XS"]["detail"][$index32] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["XS"])) {
    $jsonData["hidden_array"]["XS"] = $emptyObject;
}

}
if (null !== $model->calculate->S) {
    $jsonData["hidden_array"]["S"] = [];
if (null !== $model->calculate->S->name) {
    $jsonData["hidden_array"]["S"]["name"] = $model->calculate->S->name;
}
if (null !== $model->calculate->S->cost) {
    $jsonData["hidden_array"]["S"]["cost"] = $model->calculate->S->cost;
}
if (null !== $model->calculate->S->time) {
    $jsonData["hidden_array"]["S"]["time"] = $model->calculate->S->time;
}
if (null !== $model->calculate->S->currency_code) {
    $jsonData["hidden_array"]["S"]["currency_code"] = $model->calculate->S->currency_code;
}
if (null !== $model->calculate->S->detail) {
    $index31Array = $model->calculate->S->detail;
if ($model->calculate->S->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index31Array = $model->calculate->S->detail->toArray();
}
    
$jsonData["hidden_array"]["S"]["detail"] = [];
foreach (array_keys($index31Array) as $index31) {
    $jsonData["hidden_array"]["S"]["detail"][$index31] = [];
if (null !== $model->calculate->S->detail[$index31]->name) {
    $jsonData["hidden_array"]["S"]["detail"][$index31]["name"] = $model->calculate->S->detail[$index31]->name;
}
if (null !== $model->calculate->S->detail[$index31]->code) {
    $jsonData["hidden_array"]["S"]["detail"][$index31]["code"] = $model->calculate->S->detail[$index31]->code;
}
if (null !== $model->calculate->S->detail[$index31]->price) {
    $jsonData["hidden_array"]["S"]["detail"][$index31]["price"] = $model->calculate->S->detail[$index31]->price;
}

if (0 === \count($jsonData["hidden_array"]["S"]["detail"][$index31])) {
    $jsonData["hidden_array"]["S"]["detail"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["S"])) {
    $jsonData["hidden_array"]["S"] = $emptyObject;
}

}
if (null !== $model->calculate->M) {
    $jsonData["hidden_array"]["M"] = [];
if (null !== $model->calculate->M->name) {
    $jsonData["hidden_array"]["M"]["name"] = $model->calculate->M->name;
}
if (null !== $model->calculate->M->cost) {
    $jsonData["hidden_array"]["M"]["cost"] = $model->calculate->M->cost;
}
if (null !== $model->calculate->M->time) {
    $jsonData["hidden_array"]["M"]["time"] = $model->calculate->M->time;
}
if (null !== $model->calculate->M->currency_code) {
    $jsonData["hidden_array"]["M"]["currency_code"] = $model->calculate->M->currency_code;
}
if (null !== $model->calculate->M->detail) {
    $index31Array = $model->calculate->M->detail;
if ($model->calculate->M->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index31Array = $model->calculate->M->detail->toArray();
}
    
$jsonData["hidden_array"]["M"]["detail"] = [];
foreach (array_keys($index31Array) as $index31) {
    $jsonData["hidden_array"]["M"]["detail"][$index31] = [];
if (null !== $model->calculate->M->detail[$index31]->name) {
    $jsonData["hidden_array"]["M"]["detail"][$index31]["name"] = $model->calculate->M->detail[$index31]->name;
}
if (null !== $model->calculate->M->detail[$index31]->code) {
    $jsonData["hidden_array"]["M"]["detail"][$index31]["code"] = $model->calculate->M->detail[$index31]->code;
}
if (null !== $model->calculate->M->detail[$index31]->price) {
    $jsonData["hidden_array"]["M"]["detail"][$index31]["price"] = $model->calculate->M->detail[$index31]->price;
}

if (0 === \count($jsonData["hidden_array"]["M"]["detail"][$index31])) {
    $jsonData["hidden_array"]["M"]["detail"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["M"])) {
    $jsonData["hidden_array"]["M"] = $emptyObject;
}

}
if (null !== $model->calculate->L) {
    $jsonData["hidden_array"]["L"] = [];
if (null !== $model->calculate->L->name) {
    $jsonData["hidden_array"]["L"]["name"] = $model->calculate->L->name;
}
if (null !== $model->calculate->L->cost) {
    $jsonData["hidden_array"]["L"]["cost"] = $model->calculate->L->cost;
}
if (null !== $model->calculate->L->time) {
    $jsonData["hidden_array"]["L"]["time"] = $model->calculate->L->time;
}
if (null !== $model->calculate->L->currency_code) {
    $jsonData["hidden_array"]["L"]["currency_code"] = $model->calculate->L->currency_code;
}
if (null !== $model->calculate->L->detail) {
    $index31Array = $model->calculate->L->detail;
if ($model->calculate->L->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index31Array = $model->calculate->L->detail->toArray();
}
    
$jsonData["hidden_array"]["L"]["detail"] = [];
foreach (array_keys($index31Array) as $index31) {
    $jsonData["hidden_array"]["L"]["detail"][$index31] = [];
if (null !== $model->calculate->L->detail[$index31]->name) {
    $jsonData["hidden_array"]["L"]["detail"][$index31]["name"] = $model->calculate->L->detail[$index31]->name;
}
if (null !== $model->calculate->L->detail[$index31]->code) {
    $jsonData["hidden_array"]["L"]["detail"][$index31]["code"] = $model->calculate->L->detail[$index31]->code;
}
if (null !== $model->calculate->L->detail[$index31]->price) {
    $jsonData["hidden_array"]["L"]["detail"][$index31]["price"] = $model->calculate->L->detail[$index31]->price;
}

if (0 === \count($jsonData["hidden_array"]["L"]["detail"][$index31])) {
    $jsonData["hidden_array"]["L"]["detail"][$index31] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"]["L"])) {
    $jsonData["hidden_array"]["L"] = $emptyObject;
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
