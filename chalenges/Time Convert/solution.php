<?php

function TimeConvert($num) {

    // code goes here
    $hours = floor($num / 3600);
    $minutes = floor(($num / 60) % 60);
    $seconds = $num % 60;

    return ($hours > 0 ? $hours . ':' : '') . ($minutes > 0 ? $minutes . ':' : '') . $seconds;


}

// keep this function call here
echo TimeConvert(63);

?>
















