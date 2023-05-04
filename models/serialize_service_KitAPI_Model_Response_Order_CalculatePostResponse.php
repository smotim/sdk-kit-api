<?php

function serialize_service_KitAPI_Model_Response_Order_CalculatePostResponse(service\KitAPI\Model\Response\Order\CalculatePostResponse $model, bool $useStdClass = true)
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
if (null !== $model->calculateResults[$index16]->calculate->XS) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"] = [];
if (null !== $model->calculateResults[$index16]->calculate->XS->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["name"] = $model->calculateResults[$index16]->calculate->XS->name;
}
if (null !== $model->calculateResults[$index16]->calculate->XS->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["cost"] = $model->calculateResults[$index16]->calculate->XS->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->XS->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["time"] = $model->calculateResults[$index16]->calculate->XS->time;
}
if (null !== $model->calculateResults[$index16]->calculate->XS->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["currency_code"] = $model->calculateResults[$index16]->calculate->XS->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->XS->detail) {
    $index58Array = $model->calculateResults[$index16]->calculate->XS->detail;
if ($model->calculateResults[$index16]->calculate->XS->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index58Array = $model->calculateResults[$index16]->calculate->XS->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"] = [];
foreach (array_keys($index58Array) as $index58) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"][$index58] = [];
if (null !== $model->calculateResults[$index16]->calculate->XS->detail[$index58]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"][$index58]["name"] = $model->calculateResults[$index16]->calculate->XS->detail[$index58]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->XS->detail[$index58]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"][$index58]["code"] = $model->calculateResults[$index16]->calculate->XS->detail[$index58]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->XS->detail[$index58]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"][$index58]["price"] = $model->calculateResults[$index16]->calculate->XS->detail[$index58]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"][$index58])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"]["detail"][$index58] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["XS"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["XS"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->S) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"] = [];
if (null !== $model->calculateResults[$index16]->calculate->S->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["name"] = $model->calculateResults[$index16]->calculate->S->name;
}
if (null !== $model->calculateResults[$index16]->calculate->S->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["cost"] = $model->calculateResults[$index16]->calculate->S->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->S->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["time"] = $model->calculateResults[$index16]->calculate->S->time;
}
if (null !== $model->calculateResults[$index16]->calculate->S->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["currency_code"] = $model->calculateResults[$index16]->calculate->S->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->S->detail) {
    $index57Array = $model->calculateResults[$index16]->calculate->S->detail;
if ($model->calculateResults[$index16]->calculate->S->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index57Array = $model->calculateResults[$index16]->calculate->S->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"] = [];
foreach (array_keys($index57Array) as $index57) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"][$index57] = [];
if (null !== $model->calculateResults[$index16]->calculate->S->detail[$index57]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"][$index57]["name"] = $model->calculateResults[$index16]->calculate->S->detail[$index57]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->S->detail[$index57]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"][$index57]["code"] = $model->calculateResults[$index16]->calculate->S->detail[$index57]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->S->detail[$index57]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"][$index57]["price"] = $model->calculateResults[$index16]->calculate->S->detail[$index57]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"][$index57])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"]["detail"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["S"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["S"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->M) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"] = [];
if (null !== $model->calculateResults[$index16]->calculate->M->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["name"] = $model->calculateResults[$index16]->calculate->M->name;
}
if (null !== $model->calculateResults[$index16]->calculate->M->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["cost"] = $model->calculateResults[$index16]->calculate->M->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->M->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["time"] = $model->calculateResults[$index16]->calculate->M->time;
}
if (null !== $model->calculateResults[$index16]->calculate->M->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["currency_code"] = $model->calculateResults[$index16]->calculate->M->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->M->detail) {
    $index57Array = $model->calculateResults[$index16]->calculate->M->detail;
if ($model->calculateResults[$index16]->calculate->M->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index57Array = $model->calculateResults[$index16]->calculate->M->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"] = [];
foreach (array_keys($index57Array) as $index57) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"][$index57] = [];
if (null !== $model->calculateResults[$index16]->calculate->M->detail[$index57]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"][$index57]["name"] = $model->calculateResults[$index16]->calculate->M->detail[$index57]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->M->detail[$index57]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"][$index57]["code"] = $model->calculateResults[$index16]->calculate->M->detail[$index57]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->M->detail[$index57]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"][$index57]["price"] = $model->calculateResults[$index16]->calculate->M->detail[$index57]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"][$index57])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"]["detail"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["M"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["M"] = $emptyObject;
}

}
if (null !== $model->calculateResults[$index16]->calculate->L) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"] = [];
if (null !== $model->calculateResults[$index16]->calculate->L->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["name"] = $model->calculateResults[$index16]->calculate->L->name;
}
if (null !== $model->calculateResults[$index16]->calculate->L->cost) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["cost"] = $model->calculateResults[$index16]->calculate->L->cost;
}
if (null !== $model->calculateResults[$index16]->calculate->L->time) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["time"] = $model->calculateResults[$index16]->calculate->L->time;
}
if (null !== $model->calculateResults[$index16]->calculate->L->currency_code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["currency_code"] = $model->calculateResults[$index16]->calculate->L->currency_code;
}
if (null !== $model->calculateResults[$index16]->calculate->L->detail) {
    $index57Array = $model->calculateResults[$index16]->calculate->L->detail;
if ($model->calculateResults[$index16]->calculate->L->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index57Array = $model->calculateResults[$index16]->calculate->L->detail->toArray();
}
    
$jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"] = [];
foreach (array_keys($index57Array) as $index57) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"][$index57] = [];
if (null !== $model->calculateResults[$index16]->calculate->L->detail[$index57]->name) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"][$index57]["name"] = $model->calculateResults[$index16]->calculate->L->detail[$index57]->name;
}
if (null !== $model->calculateResults[$index16]->calculate->L->detail[$index57]->code) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"][$index57]["code"] = $model->calculateResults[$index16]->calculate->L->detail[$index57]->code;
}
if (null !== $model->calculateResults[$index16]->calculate->L->detail[$index57]->price) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"][$index57]["price"] = $model->calculateResults[$index16]->calculate->L->detail[$index57]->price;
}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"][$index57])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"]["detail"][$index57] = $emptyObject;
}

}

}

if (0 === \count($jsonData["hidden_array"][$index16]["hidden_array"]["L"])) {
    $jsonData["hidden_array"][$index16]["hidden_array"]["L"] = $emptyObject;
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
