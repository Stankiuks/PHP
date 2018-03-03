<?php
namespace BalticTalents\Radar;

class Radar
{
    public $date;

    public $number;

    public $distance;

    public $time;

    public function __construct(\DateTime $dateTime, $number, $distance, $time)
    {
        $this->date = $dateTime;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;
    }

    public function getInfo()
    {
        return $this->date->diff(new \DateTime())->d  . ' ' . $this->number . ' ' . $this->distance . ' ' . $this->time;
}
}

$automobiliai=[
new Radar(new \DateTime('2018-01-01'), 'BRR001', '20km', '300 sec'),
new Radar(new \DateTime('2018-02-24'), 'BRR002', '20km', '320 sec'),
new Radar(new \DateTime('2017-06-30'), 'BRR003', '20km', '310 sec'),
new Radar(new \DateTime('2017-03-01'), 'BRR004', '20km', '380 sec'),
];

//anonimine funkcija
//usort($automobiliai, function (Radar $auto1, Radar $auto2) {
//    return $auto1->getDate() <=> $auto2->getDate();
//});


//namu darbui 'number format' naudot apvalinimui vienas po kablelio arba round. Patarimas slack kaip grupuot.


//usort( $automobiliai, function (Radar $auto1, Radar $auto2){
//    return $auto1->getInfo() $auto2-><>
//});

echo $automobiliai[0];




?>

