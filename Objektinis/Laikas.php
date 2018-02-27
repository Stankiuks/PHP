<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 26/02/2018
 * Time: 19:49
 */

class Ivykis {
    public $pavadinimas;
    public $data;

    function __construct($pavadinimas, \DateTime $dateTime)
    {
        $this-> pavadinimas = $pavadinimas;
        $this-> data = $dateTime;
    }
    function NaujasIvykis (){
        return $this->pavadinimas . ' ' . $this-> data;
    }
}


$ivykis = new Ivykis('PHP Kaunas', new \DateTime('2018-02-02'));


class Istorija{
    public $laikotarpioPavadinimas;
    public $ivykiai;

    public function __construct($laikotarpioPavadinimas, array $ivykiai)
    {
        $this-> laikotarpioPavadinimas = $laikotarpioPavadinimas;
        $this-> ivykiai = $ivykiai;
    }
}

