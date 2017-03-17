<?php
include_once "functions.php";

$return = "error completing command";
$direction = $_POST['direction'];
switch($direction){
    case "Left":
        $params = array('direction' => 'left');
        curl_request_async($params);
        $return = "Left is on";
    break;
    case "Right":
        $params = array('direction' => 'right');
        curl_request_async($params);
        $return = "Left is on";
    break;
    case "Front";
        $params = array('direction' => 'front');
        curl_request_async($params);
        $return = "Left is on";
    break;
    case "Back":
        $params = array('direction' => 'back');
        curl_request_async($params);
        $return = "Left is on";
    break;
}
    header("Location: http://galpbot.bneishaareshalom.com/");


?>
