<?php

function deserialize_service_KitAPI_Model_Response_FileDownloadResponse(array $jsonData): service\KitAPI\Model\Response\FileDownloadResponse
{
    
$model = new service\KitAPI\Model\Response\FileDownloadResponse();
if (isset($jsonData['file_name'])) {
    $model->fileName = $jsonData['file_name'];

}
if (isset($jsonData['data'])) {
    $model->data = $jsonData['data'];

}



    return $model;
}
