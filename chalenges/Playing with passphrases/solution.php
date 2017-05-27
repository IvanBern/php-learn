<?php

function playPass($s, $n) {

    // code goes here
    $sum = 0;
    $capitals = range('A', 'Z');

    for ($i = 0; $i < strlen($s); $i++)
    {
        $pos = binary_search($capitals, 0, sizeof($capitals)-1, $s[$i],'=');

        if ( $pos >= 0)
        {
            $s[$i] = $capitals[($pos+1)%sizeof($capitals)];
            $pos = null;
        }

    }

    return $s;

}

/*
 * Parameters:
 *   $a - The sort array.
 *   $first - First index of the array to be searched (inclusive).
 *   $last - Last index of the array to be searched (exclusive).
 *   $key - The key to be searched for.
 *   $compare - A user defined function for comparison. Same definition as the one in usort
 *
 * Return:
 *   index of the search key if found, otherwise return (-insert_index - 1).
 *   insert_index is the index of smallest element that is greater than $key or sizeof($a) if $key
 *   is larger than all elements in the array.
 */
function binary_search(array $a, $first, $last, $key, $compare) {
    $lo = $first;
    $hi = $last - 1;

    while ($lo <= $hi) {
        $mid = (int)(($hi - $lo) / 2) + $lo;
        $cmp = call_user_func($compare, $a[$mid], $key);

        if ($cmp < 0) {
            $lo = $mid + 1;
        } elseif ($cmp > 0) {
            $hi = $mid - 1;
        } else {
            return $mid;
        }
    }
    return -($lo + 1);
}

// keep this function call here
echo playPass("I LOVE YOU!!!", 1) . PHP_EOL; // "!!!vPz fWpM J"
echo playPass("I LOVE YOU!!!", 0) . PHP_EOL; // "!!!uOy eVoL I"

echo playPass("MY GRANMA CAME FROM NY ON THE 23RD OF APRIL 2015", 2) . PHP_EOL; // "4897 NkTrC Hq fT67 GjV Pq aP OqTh gOcE CoPcTi aO"

?>
















