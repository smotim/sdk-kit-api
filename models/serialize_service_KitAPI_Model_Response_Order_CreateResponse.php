<?php

function serialize_service_KitAPI_Model_Response_Order_CreateResponse(service\KitAPI\Model\Response\Order\CreateResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}
if (null !== $model->result) {
    $jsonData["result"] = [];
if (null !== $model->result->sale_number) {
    $jsonData["result"]["sale_number"] = $model->result->sale_number;
}
if (null !== $model->result->cargo_number) {
    $jsonData["result"]["cargo_number"] = $model->result->cargo_number;
}

if (0 === \count($jsonData["result"])) {
    $jsonData["result"] = $emptyObject;
}

}
if (null !== $model->message) {
    $jsonData["message"] = $model->message;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
