<?php

var_dump($_REQUEST);

if (isset($_REQUEST ['skaicius1']) && isset($_REQUEST ['skaicius2'])){
        echo $_REQUEST['skaicius1'] * $_REQUEST['skaicius2'];
}

?>
