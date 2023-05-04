<?php

function deserialize_service_KitAPI_Model_Response_Order_CreatePostResponse(array $jsonData): service\KitAPI\Model\Response\Order\CreatePostResponse
{
    
$model = new service\KitAPI\Model\Response\Order\CreatePostResponse();
if (isset($jsonData['status'])) {
    $model->status = $jsonData['status'];

}
if (isset($jsonData['result'])) {
    
$model->result = new service\KitAPI\Model\Entity\Order\Result();
if (isset($jsonData['result']['sale_number'])) {
    $model->result->sale_number = $jsonData['result']['sale_number'];

}
if (isset($jsonData['result']['cargo_number'])) {
    $model->result->cargo_number = $jsonData['result']['cargo_number'];

}


}
if (isset($jsonData['message'])) {
    $model->message = $jsonData['message'];

}



    return $model;
}
