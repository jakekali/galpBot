<?php
$some = ignore_user_abort(1);
require 'vendor/autoload.php';
include_once "functions.php";
$return = "error completing command";
$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
$direction = $_POST['direction'];
mailDebugger("Before the switch : ".$direction." ");
//mailDebugger($direction);
switch(strtolower($direction)){
    case "left":
        //Turn Left
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Left is on";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
        mailDebugger("IN THE SWITCH ".$direction);
        break;
    case "right":
        //Turn Right
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Right is on";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
        mailDebugger("IN THE SWITCH: ".$direction." The return is: ".$return);
        break;

    case "front";
        //code to move foward
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Front is on";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
        mailDebugger("IN THE SWITCH ".$direction);

        break;
    case "back":
        //code to reverse
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Moving reverse";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
        mailDebugger("IN THE SWITCH ".$direction);

        break;
}
    echo $return;

