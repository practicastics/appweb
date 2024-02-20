<?php
include 'ejemplo.php';

$peliculas = new SimpleXMLElement($xmlstr);

/* Para cada <personaje>, se muestra cada <nombre>. */
foreach ($peliculas->pelicula->personajes->personaje as $personaje) {
   echo $personaje->nombre, ' interpretado por ', $personaje->actor, PHP_EOL;
}

?>