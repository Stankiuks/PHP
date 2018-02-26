<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 15/02/2018
 * Time: 18:47
 */
$a = [[3,4,5],
     [2,10,8],
     [5,6,5],
     [5,5,5]];

foreach ($a as $mas){
    $pranesimas = 'Ne trikampis';
    $tipas = '';
    $plotas = '';


//tikrinam ar tai yra trikampis pagal Euklido teorema
if (($mas[0]+$mas[1])>$mas[2] and ($mas[1]+$mas[2])>$mas[0] and ($mas[0]+$mas[2])>$mas[1]){
    $pranesimas = 'Trikampis';
    $tipas = 'Ivairiakrastis';
    //randamas pusperimetris ploto skaiciavimui
    $p = ($mas[0]+$mas[1]+$mas[2])/2;
    //randamas trikampio plotas
    $s = sqrt($p*($p-$mas[0])*($p-$mas[1])*($p-$mas[2]));
    $plotas = 'Plotas ='. $s;

//Tikrinam ar lygiakrastis, ar lygiasonis
    if ($mas[0] === $mas[1] and $mas[0] === $mas[2]){
        $tipas = 'Lygiakrastis';
    }elseif ($mas[0] === $mas[1] and $mas[0] === $mas[2] and $mas[1] === $mas[2]){
        $tipas = 'Lygiasonis';
    }
}
//isvedam rezultatus
echo $pranesimas . ',' . $tipas . ',' . $plotas . '<br>';
}

?>