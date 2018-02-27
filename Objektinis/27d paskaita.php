<?php


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
$ford = new Radar(new \DateTime('2018-03-01'), 'BRR001', '20km', '300 sec');
$mazda = new Radar(new \DateTime('2018-03-01'), 'BRR002', '20km', '320 sec');
$kia = new Radar(new \DateTime('2018-03-01'), 'BRR003', '20km', '310 sec');
$opel = new Radar(new \DateTime('2018-03-01'), 'BRR004', '20km', '380 sec');

echo $ford->getInfo();

?>
