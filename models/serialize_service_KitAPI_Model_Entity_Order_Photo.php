<?php

function serialize_service_KitAPI_Model_Entity_Order_Photo(service\KitAPI\Model\Entity\Order\Photo $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->data) {
    $jsonData["data"] = $model->data;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
