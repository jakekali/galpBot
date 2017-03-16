<?php

$setmode17 = shell_exec("/usr/local/bin/gpio -g mode 17 out");
if($_POST['direction']== “Left”){
    //code to turn Left
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
        echo "Left is on";
        sleep(3);
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
}
else if($_POST['direction'] == “Right”){
    //code to turn Right
    $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
    echo "Rght is on";
    sleep(3);
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
}
else if($_POST['direction'] == “Front”){
//code to move foward
 $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
    echo "Front is on";
    sleep(3);
$gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
}
else if($_POST['direction'] == “Back”){
//code to reverse
     $gpio_on = shell_exec("/usr/local/bin/gpio -g write 17 1");
     echo "Moving reverse";
    sleep(3);
    $gpio_off = shell_exec("/usr/local/bin/gpio -g write 17 0");
}
?>