<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 20/02/2018
 * Time: 19:51
 */

//norint pasiekti skaiciu 3, ismetant rezultata, reikia pasiekti stringo pirma elementa
$masyvas = [
    '49001010123' => [
        'vardas' => 'Jonas',
        'pavarde' => 'Jonaitis',
        'gdata' => '1990-01-01'
    ],
    '37502055584' => [
        'vardas' => 'Petras',
        'pavarde' => 'Petraitis',
        'gdata' => '1985-02-05'
    ],
    '34565745645' => [
        'vardas' => 'Juozas',
        'pavarde' => 'Juozaitis',
        'gdata' => '1965-06-19'
    ],
    '45467892531' => [
        'vardas' => 'Ona',
        'pavarde' => 'Onute',
        'gdata' => '1975-03-14'
    ]
];


foreach ($masyvas as $key => $value) {
    if ($key{0} == 3) {
        unset($masyvas[$key]);
    }
}

var_dump($masyvas);

