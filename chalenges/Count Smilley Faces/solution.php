<?php

function count_smileys($arr): float {

    $start_time = microtime(true);
    $eyes = [':', ';'];
    $nose = ['-', '~'];
    $mouth = [')', 'D'];
    $count = 0;


    foreach ($arr as &$value) {

        if ( in_array($value[0], $eyes) )
        {
            if ( in_array($value[1], $mouth) )
            {
                $count += 1;
            } elseif ( in_array($value[1], $nose) and in_array($value[2], $mouth) )
            {
                $count += 1;
            }

        }
    }
    $first_time = (microtime(true) - $start_time);
    echo $first_time . " " . $count . PHP_EOL;

    $start_time = microtime(true);
    $result = preg_match_all("/[:;][-~]?[\)D]/", implode(",", $arr));
    $second_time = (microtime(true) - $start_time);
    echo $second_time . " " . $result . PHP_EOL;;

    return $second_time/$first_time;

}

// keep this function call here

echo count_smileys([':D',':~)',';~D',':)']);



?>