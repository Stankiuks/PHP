<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 13/02/2018
 * Time: 20:04
 */

$a = [
    ['1'=> 3,'2'=> 4,'3'=> 6,'4'=> 4],
    ['1'=> 5,'2'=> 6,'3'=> 2,'4'=> 1],
    ['1'=> 1,'2'=> 4,'3'=>7,'4'=> 4],
];

$sum = [];


foreach ($a as $k=>$a2) {
    foreach ($a2 as $id=>$value) {
        $sum[$id]+=$value;
    }
}


   echo $sum['1'] . '<br>';
   echo $sum['2'] . '<br>';
   echo $sum['3'] . '<br>';
   echo $sum['4'] . '<br>';

   echo 'didziausia yra: ' . (max($sum)) . '<br>';



?>