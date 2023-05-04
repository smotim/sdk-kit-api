<?php

function serialize_service_KitAPI_Model_Entity_Order_Result(service\KitAPI\Model\Entity\Order\Result $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->sale_number) {
    $jsonData["sale_number"] = $model->sale_number;
}
if (null !== $model->cargo_number) {
    $jsonData["cargo_number"] = $model->cargo_number;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
