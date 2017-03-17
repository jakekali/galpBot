<?php
    include_once "functions.php";

    $apiData = $HTTP_RAW_POST_DATA;
    $apiData = json_decode($apiData);

    $intentName = $apiData['metadata']['intentName'];
        $return = "error - unkown intent";
    if($intentName == null){
        $return = "no intent";
    }
switch ($intentName){
    case "move";
        $direction = $apiData['result']['parameters']['direction'];
        $params = array("direction"=>$direction);
        curl_request_async($params);
    break;

}


