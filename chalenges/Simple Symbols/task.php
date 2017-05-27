<?php

function SimpleSymbols($str) {

    // code goes here
    return $str;

}

// keep this function call here
#echo SimpleSymbols(fgets(fopen('php://stdin', 'r')));
echo SimpleSymbols(fgets(fopen('./stdin', 'r')));

?>
