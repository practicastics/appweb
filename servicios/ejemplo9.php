<?php
include 'ejemplo.php';
$peliculas = new SimpleXMLElement($xmlstr);

$peliculas->pelicula[0]->personajes->personaje[0]->nombre = 'Srta. Programadora';

echo $peliculas->asXML();
?>