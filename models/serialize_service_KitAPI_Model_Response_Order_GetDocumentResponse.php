<?php

function serialize_service_KitAPI_Model_Response_Order_GetDocumentResponse(service\KitAPI\Model\Response\Order\GetDocumentResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->name) {
    $jsonData["name"] = $model->name;
}
if (null !== $model->data) {
    $jsonData["data"] = $model->data;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
