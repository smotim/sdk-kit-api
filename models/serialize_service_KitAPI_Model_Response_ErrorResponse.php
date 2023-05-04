<?php

function serialize_service_KitAPI_Model_Response_ErrorResponse(service\KitAPI\Model\Response\ErrorResponse $model, bool $useStdClass = true)
{
    $emptyHashmap = $useStdClass ? new \stdClass() : [];
    $emptyObject = $useStdClass ? new \stdClass() : [];

    $jsonData = [];
if (null !== $model->errors) {
    $index16Array = $model->errors;
if ($model->errors instanceof \Doctrine\Common\Collections\Collection) {
    $index16Array = $model->errors->toArray();
}
    
$jsonData["hidden_array"] = [];
foreach (array_keys($index16Array) as $index16) {
    $jsonData["hidden_array"] = $model->errors;
}

}
if (null !== $model->errorMsg) {
    $jsonData["string"] = $model->errorMsg;
}

if (0 === \count($jsonData)) {
    $jsonData = $emptyObject;
}


    return $jsonData;
}
