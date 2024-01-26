<?php
include 'ejemplo.php';

$pelicula1 = new SimpleXMLElement($xmlstr);
$pelicula2 = new SimpleXMLElement($xmlstr);
var_dump($pelicula1 == $pelicula2); // falso desde PHP 5.2.0
?>