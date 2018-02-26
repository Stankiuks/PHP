<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 13/02/2018
 * Time: 20:04
 */

$a = [[3,4,6,4],[5,6,2,1],[1,4,7,4],[2,4,4,6]];

$matrica = count($a);
$k = $d = 0;
for ($i = 0; $i < $matrica; $i++) {
    $k += $a[$i][$i];
    $d += $a[$i][$matrica - $i - 1];
}
echo 'istrizaine is kaires ' . $k . '<br>';
echo 'istrizaine is desines ' . $d . '<br>';

?>