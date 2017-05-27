<?php

function AlphabetSoup($str) {

    // code goes here
    $stringParts = str_split($str);
    sort($stringParts);
    return implode('', $stringParts);

}

// keep this function call here
echo AlphabetSoup("coderbyte");

?>















