<?php

function serialize_service_KitAPI_Model_Response_Profile_ConfirmResponse(service\KitAPI\Model\Response\Profile\ConfirmResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->status) {
    $jsonData["status"] = $model->status;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
