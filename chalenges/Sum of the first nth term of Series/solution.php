<?php

function series_sum($n) {

    // code goes here
    $sum = 0;

    for ($i = 0; $i < $n; $i++)
    {
        $sum = $sum + 1/(1+$i*3);
    }

    return number_format($sum, 2, '.', '');

}

// keep this function call here
echo series_sum(1) . PHP_EOL;
echo series_sum(2) . PHP_EOL;;
echo series_sum(3) . PHP_EOL;;
echo series_sum(4) . PHP_EOL;;

?>
















