<?php

function CheckNums($num1,$num2) {

    // code goes here
    $num1 = floatval($num1);
    $num2 = floatval($num2);
    if ( $num2 > $num1 ) {
        return 'true';
    } elseif ( $num2 === $num1) {
        return -1;
    } else
    {
        return 'false';
    }


}

// keep this function call here
echo CheckNums(1,12314) . PHP_EOL;
echo CheckNums(5,5). PHP_EOL;
echo CheckNums(233223,-12). PHP_EOL;

?>


