<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 20/02/2018
 * Time: 18:18
 */
$a = [5,6,10,15];
$b = [8,5,3,25];

$average = 0;

function vidurkis($a){

   return array_sum($a)/count($a);

}

echo 'Vidurkiai yra: ' . vidurkis($a) . ' ir' . vidurkis ($b) . '<br>';

$skirtumas = vidurkis($a)-vidurkis($b);

echo 'Vidurkiu skirtumas yra: ' . $skirtumas . '<br>';




