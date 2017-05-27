<?php

function SimpleSymbols($str) {

    // code goes here
    $return = 'true';
    $strLen = strlen($str);
    if ($strLen > 2) {
        for ( $i = 0; $i< $strLen-1 and $return === 'true'; $i++) {
            if (ctype_alpha($str[$i])) {
                if ($str[$i-1] != '+' or $str[$i+1] != '+' or $i < 1) {
                    $return = 'false';
                }
            }
        }
    } else
    {
        $return = 'false';
    }

    return $return;

}

// keep this function call here
#echo SimpleSymbols(fgets(fopen('php://stdin', 'r')));
echo SimpleSymbols("+d+=3=+s+");
echo SimpleSymbols("f++d+");
echo SimpleSymbols("+a=");
echo SimpleSymbols("==a+");



?>