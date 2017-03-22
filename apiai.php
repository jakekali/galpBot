<?php
    require 'vendor/autoload.php';
    $some = ignore_user_abort(1);
    include_once "functions.php";
    $apiData = $HTTP_RAW_POST_DATA;

    $apiDataArray = json_decode($apiData);
    $intentName = $apiData['metadata']['intentName'];
    $returnText = "error - unkown intent";

    $returnArray = $apiDataArray;
    /* $returnArray = array(
        "speech"=> "Barack Hussein Obama II is the 44th and current President of the United States.",
        "displayText"=> "Barack Hussein Obama II is the 44th and current President of the United States, and the first African American to hold the office. Born in Honolulu, Hawaii, Obama is a graduate of Columbia University   and Harvard Law School, where ",
        "data"=> $intentName,
        "contextOut"=> null,
        "source"=> null,

    ); */

    if($intentName == null){
        $returnText = "no intent";
        $returnSpeech = $returnText;
    }

    switch ($intentName){
        case "move";
            $direction = $apiData['result']['parameters']['direction'];
            $params = array("direction"=>$direction);
            curl_request_async($params);
            $returnText = "moving ".$direction;
            $returnSpeech = $returnText;
        break;
}

echo json_encode($returnArray);
header("Content-type: application/json");



