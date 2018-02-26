<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 20/02/2018
 * Time: 18:59
 */
$a = [[5,6],[10,15]];
$b = [[8,5],[3,25]];

//Skaliarine dvieju vektoriu sandauga

function skaliarine_sandauga($a, $b){
    $i = ($a[0][0]*$b[0][0])+($a[0][1]*$b[0][1])+($a[1][0]*$b[1][0])+($a[1][1]*$b[1][1]);
    echo $i;
}

echo 'Skaliarine sandauga: ' . skaliarine_sandauga($a,$b) . '<br>';



