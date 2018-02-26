<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 22/02/2018
 * Time: 20:32
 */
class Zmogus
{
    public $vardas;
    public $pavarde;

    function __construct($vardas, $pavarde){
        $this->vardas = $vardas;
        $this->pavarde = $pavarde;
    }

    function pilnasVardas (){
        return $this->vardas . ' ' . $this->pavarde;
    }
}

$Jonukas = new Zmogus('Jonas', 'Jonaitis');
$Petriukas = new Zmogus('Petras', 'Petraitis');
$Juozukas = new Zmogus('Juozas', 'Juozaitis');


class Mokinys extends Zmogus
{
    public $lygis;
    public $trimestras;
    }