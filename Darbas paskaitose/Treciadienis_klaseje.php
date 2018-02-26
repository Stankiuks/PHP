<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 21/02/2018
 * Time: 19:00
 */
$kintamasis = 'Programa';
$skaicius = 3;
$masyvas = [2,4,3];
$tuscia = NULL;
$objektas =
$spalva = '#ffffff' ;

//    var_dump(gettype($masyvas));


/**
 * @param $a
 * @return string
 */
function kintamasis($a){
    switch (gettype($a)){
        case 'string':
            return 'Sis kintamasis yra string tipo: ' . $a . '<br>';
            break;
        case 'integer':
            return 'Sis kintamasis yra skaicius: ' . $a . '<br>';
            break;
        case 'array':
            return 'Sis kintamasis yra masyvas: ' . $a . '<br>';
            break;
            }

}
echo kintamasis ($kintamasis);
echo kintamasis ($skaicius);
echo kintamasis ($masyvas);


$masyvas = [-10, -7, -2, 0, 4, 8, 3];
$temp = [];

function sukelimas($a){
    $suma = 0;
    foreach ($a as $item) {
        if ($item <= 0) {
            continue;
        }
        array_unshift( $a, $item);
    }
    return $a;

}
var_dump(sukelimas($masyvas));


?>

