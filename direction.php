<?php
$return = "error completlying command";
$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
$direction = $_POST['direction']; 
switch($direction){
    case "Left":
        //Turn Left
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Left is on";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
    break;
    case "Right":
        //Turn Right
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Right is on";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
    break;
    case "Front";
        //code to move foward
         $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Front is on";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
    break;
    case "Back":
        //code to reverse
        $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        $return = "Moving reverse";
        sleep(3);
        $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
    break;
}
    echo $return;
?>
