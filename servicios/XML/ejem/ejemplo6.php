<?php     
include 'ejemplo.php';

$peliculas = new SimpleXMLElement($xmlstr);

if ((string) $peliculas->pelicula->titulo == 'PHP: Tras el Analilzador') {
    print 'Mi película favorita.';
}

echo htmlentities((string) $peliculas->pelicula->titulo);
?>