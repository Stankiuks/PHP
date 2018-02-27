<?php
/**
 * Created by PhpStorm.
 * User: Desktop
 * Date: 26/02/2018
 * Time: 06:50
 */

$x=0;

function dalikliai ($x)
{
    for ($n = 1; $x > $n; $n++) {
        if ($x%$n ==0) {
            return $x;
        }
    }
    return $x;
}
var_dump(dalikliai(1000));
?>


