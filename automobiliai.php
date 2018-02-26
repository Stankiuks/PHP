<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 22/02/2018
 * Time: 19:38
 */
class Automobilis
{
    public $marke;
    public $modelis;

    public function pilnasPavadinimas(){
        return $this->marke . ' ' . $this->modelis;
    }
    public function __construct($marke, $modelis){
        $this->marke = $marke;
        $this->modelis = $modelis;
    }

}
$Lengvasis = new Automobilis('Ford', 'Fusion');
$Visureigis = new Automobilis('Kia', 'Sorento');
$Sunkvezimis = new Automobilis('MAN', '44tgw');

?>
<html>
<body>
<table>
    <tr>Automobilis</tr>
    <?php for ($i = 0; $i< 11; $i++) { ?>
    <tr>
        <td>
        <?php $Lengvasis->pilnasPavadinimas(); ?>
        <?php $Visureigis->pilnasPavadinimas(); ?>
        <?php $Sunkvezimis->pilnasPavadinimas(); ?>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>
