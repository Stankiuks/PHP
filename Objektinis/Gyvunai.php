<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 26/02/2018
 * Time: 19:05
 */

class Gyvunas{
    public $svoris;
    public $ugis;

    function __construct($svoris, $ugis){
        $this->svoris = $svoris;
        $this->ugis = $ugis;
    }

    function NaujasGyvunas (){
        return $this->svoris . ' ' . $this->ugis;
    }
}

$Bebras = new Gyvunas('20kg', '30cm');
$Bebras = new Gyvunas('20kg', '30cm');



class Suo extends Gyvunas{
    public $spalva;
    public $lytis;


function __construct($spalva, $lytis){
    parent::__construct($svoris, $ugis);
    $this->spalva = $spalva;
    $this->lytis = $lytis;
}

function NaujasSuo (){
    return $this->spalva . ' ' . $this->lytis;

}
}

$jorksyras = new Suo('Tamsus', 'patinas');

?>

