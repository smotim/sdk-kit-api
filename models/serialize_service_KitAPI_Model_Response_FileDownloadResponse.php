<?php

function serialize_service_KitAPI_Model_Response_FileDownloadResponse(service\KitAPI\Model\Response\FileDownloadResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->fileName) {
    $jsonData["file_name"] = $model->fileName;
}
if (null !== $model->data) {
    $jsonData["data"] = $model->data;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
