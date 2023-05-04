<?php

function serialize_service_KitAPI_Model_Entity_Order_CalculatePostResult(service\KitAPI\Model\Entity\Order\CalculatePostResult $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->XS) {
    $jsonData["XS"] = [];
if (null !== $model->XS->name) {
    $jsonData["XS"]["name"] = $model->XS->name;
}
if (null !== $model->XS->cost) {
    $jsonData["XS"]["cost"] = $model->XS->cost;
}
if (null !== $model->XS->time) {
    $jsonData["XS"]["time"] = $model->XS->time;
}
if (null !== $model->XS->currency_code) {
    $jsonData["XS"]["currency_code"] = $model->XS->currency_code;
}
if (null !== $model->XS->detail) {
    $index16Array = $model->XS->detail;
if ($model->XS->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->XS->detail->toArray();
}
    
$jsonData["XS"]["detail"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["XS"]["detail"][$index16] = [];
if (null !== $model->XS->detail[$index16]->name) {
    $jsonData["XS"]["detail"][$index16]["name"] = $model->XS->detail[$index16]->name;
}
if (null !== $model->XS->detail[$index16]->code) {
    $jsonData["XS"]["detail"][$index16]["code"] = $model->XS->detail[$index16]->code;
}
if (null !== $model->XS->detail[$index16]->price) {
    $jsonData["XS"]["detail"][$index16]["price"] = $model->XS->detail[$index16]->price;
}

if (0 === \count($jsonData["XS"]["detail"][$index16])) {
    $jsonData["XS"]["detail"][$index16] = $emptyObject;
}

}

}

if (0 === \count($jsonData["XS"])) {
    $jsonData["XS"] = $emptyObject;
}

}
if (null !== $model->S) {
    $jsonData["S"] = [];
if (null !== $model->S->name) {
    $jsonData["S"]["name"] = $model->S->name;
}
if (null !== $model->S->cost) {
    $jsonData["S"]["cost"] = $model->S->cost;
}
if (null !== $model->S->time) {
    $jsonData["S"]["time"] = $model->S->time;
}
if (null !== $model->S->currency_code) {
    $jsonData["S"]["currency_code"] = $model->S->currency_code;
}
if (null !== $model->S->detail) {
    $index15Array = $model->S->detail;
if ($model->S->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index15Array = $model->S->detail->toArray();
}
    
$jsonData["S"]["detail"] = [];
foreach (array_keys($index15Array) as $index15) {
    $jsonData["S"]["detail"][$index15] = [];
if (null !== $model->S->detail[$index15]->name) {
    $jsonData["S"]["detail"][$index15]["name"] = $model->S->detail[$index15]->name;
}
if (null !== $model->S->detail[$index15]->code) {
    $jsonData["S"]["detail"][$index15]["code"] = $model->S->detail[$index15]->code;
}
if (null !== $model->S->detail[$index15]->price) {
    $jsonData["S"]["detail"][$index15]["price"] = $model->S->detail[$index15]->price;
}

if (0 === \count($jsonData["S"]["detail"][$index15])) {
    $jsonData["S"]["detail"][$index15] = $emptyObject;
}

}

}

if (0 === \count($jsonData["S"])) {
    $jsonData["S"] = $emptyObject;
}

}
if (null !== $model->M) {
    $jsonData["M"] = [];
if (null !== $model->M->name) {
    $jsonData["M"]["name"] = $model->M->name;
}
if (null !== $model->M->cost) {
    $jsonData["M"]["cost"] = $model->M->cost;
}
if (null !== $model->M->time) {
    $jsonData["M"]["time"] = $model->M->time;
}
if (null !== $model->M->currency_code) {
    $jsonData["M"]["currency_code"] = $model->M->currency_code;
}
if (null !== $model->M->detail) {
    $index15Array = $model->M->detail;
if ($model->M->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index15Array = $model->M->detail->toArray();
}
    
$jsonData["M"]["detail"] = [];
foreach (array_keys($index15Array) as $index15) {
    $jsonData["M"]["detail"][$index15] = [];
if (null !== $model->M->detail[$index15]->name) {
    $jsonData["M"]["detail"][$index15]["name"] = $model->M->detail[$index15]->name;
}
if (null !== $model->M->detail[$index15]->code) {
    $jsonData["M"]["detail"][$index15]["code"] = $model->M->detail[$index15]->code;
}
if (null !== $model->M->detail[$index15]->price) {
    $jsonData["M"]["detail"][$index15]["price"] = $model->M->detail[$index15]->price;
}

if (0 === \count($jsonData["M"]["detail"][$index15])) {
    $jsonData["M"]["detail"][$index15] = $emptyObject;
}

}

}

if (0 === \count($jsonData["M"])) {
    $jsonData["M"] = $emptyObject;
}

}
if (null !== $model->L) {
    $jsonData["L"] = [];
if (null !== $model->L->name) {
    $jsonData["L"]["name"] = $model->L->name;
}
if (null !== $model->L->cost) {
    $jsonData["L"]["cost"] = $model->L->cost;
}
if (null !== $model->L->time) {
    $jsonData["L"]["time"] = $model->L->time;
}
if (null !== $model->L->currency_code) {
    $jsonData["L"]["currency_code"] = $model->L->currency_code;
}
if (null !== $model->L->detail) {
    $index15Array = $model->L->detail;
if ($model->L->detail instanceof \Doctrine\Common\Collections\Collection) {
    $index15Array = $model->L->detail->toArray();
}
    
$jsonData["L"]["detail"] = [];
foreach (array_keys($index15Array) as $index15) {
    $jsonData["L"]["detail"][$index15] = [];
if (null !== $model->L->detail[$index15]->name) {
    $jsonData["L"]["detail"][$index15]["name"] = $model->L->detail[$index15]->name;
}
if (null !== $model->L->detail[$index15]->code) {
    $jsonData["L"]["detail"][$index15]["code"] = $model->L->detail[$index15]->code;
}
if (null !== $model->L->detail[$index15]->price) {
    $jsonData["L"]["detail"][$index15]["price"] = $model->L->detail[$index15]->price;
}

if (0 === \count($jsonData["L"]["detail"][$index15])) {
    $jsonData["L"]["detail"][$index15] = $emptyObject;
}

}

}

if (0 === \count($jsonData["L"])) {
    $jsonData["L"] = $emptyObject;
}

}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
