<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 15/02/2018
 * Time: 20:08
 */
$a = [-10,0,2,9,-5];

rsort($a);

$ilgis = count($a);
for ($i = 0; $i < $ilgis; $i++){
    echo $a[$i] . '<br>';
}
?>
