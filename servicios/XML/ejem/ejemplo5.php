<?php
include 'ejemplo.php';

$peliculas = new SimpleXMLElement($xmlstr);

/* Acceder a los nodos <puntuacion> de la primera película.
 * Mostrar la escala de puntuación también. */
foreach ($peliculas->pelicula[0]->puntuacion as $puntuacion) {
    switch((string) $puntuacion['tipo']) { // Obtener los atributos como índices del elemento
    case 'votos':
        echo $puntuacion, ' votos positivos';
        break;
    case 'estrellas':
        echo $puntuacion, ' estrellas';
        break;
    }
}
?>