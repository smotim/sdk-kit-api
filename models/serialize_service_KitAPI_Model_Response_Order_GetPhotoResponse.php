<?php

function serialize_service_KitAPI_Model_Response_Order_GetPhotoResponse(service\KitAPI\Model\Response\Order\GetPhotoResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->photos) {
    $index16Array = $model->photos;
if ($model->photos instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->photos->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"][$index16] = [];
if (null !== $model->photos[$index16]->data) {
    $jsonData["hidden_array"][$index16]["data"] = $model->photos[$index16]->data;
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
