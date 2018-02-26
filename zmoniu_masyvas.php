<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 20/02/2018
 * Time: 19:16
 */
$zmones = [['Jonas', 'Jonaitis', 3425345443234],
      ['Petras', 'Petraitis', 23424234234234],
      ['Juozas', 'Juozaitis', 45656757567345],
    ];
$kontaktai = [['jonukas@me.me', '8-344-34543'],
      ['petriukas@me.me', '8-546-45656'],
      ['juozukas@me.me', '8-244-45678']
];
foreach ($kontaktai as $value) {
    array_push($zmones, $value);
    // naudoti atskira for each
//    unset($zmones[3]);
//    unset($zmones[4]);
    array_unshift($zmones, $value);


}
var_dump($zmones);

