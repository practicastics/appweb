<?php
include 'ejemplo.php';

$peliculas = new SimpleXMLElement($xmlstr);

foreach ($peliculas->xpath('//personaje') as $personaje) {
    echo $personaje->nombre . ' interpretado por ' . $personaje->actor, PHP_EOL;
}
?>