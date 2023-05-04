<?php

function serialize_service_KitAPI_Model_Response_Profile_AddResponse(service\KitAPI\Model\Response\Profile\AddResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->message) {
    $jsonData["message"] = $model->message;
}
if (null !== $model->client_id) {
    $jsonData["client_id"] = $model->client_id;
}
if (null !== $model->debitor_id) {
    $jsonData["debitor_id"] = $model->debitor_id;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
