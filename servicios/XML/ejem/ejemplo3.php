<?php
include 'ejemplo.php';

$peliculas = new SimpleXMLElement($xmlstr);

echo $peliculas->pelicula->{'grandes-frases'}->frase;
?>