<?php

function serialize_service_KitAPI_Model_Response_Profile_ProfileGetList(service\KitAPI\Model\Response\Profile\ProfileGetList $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->profiles) {
    $index16Array = $model->profiles;
if ($model->profiles instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->profiles->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->profiles[$index16]->id) {
    $jsonData["hidden_array"][$index16]["id"] = $model->profiles[$index16]->id;
}
if (null !== $model->profiles[$index16]->name) {
    $jsonData["hidden_array"][$index16]["name"] = $model->profiles[$index16]->name;
}
if (null !== $model->profiles[$index16]->debitor) {
    $jsonData["hidden_array"][$index16]["debitor"] = $model->profiles[$index16]->debitor;
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
