<?php

function crea_xml(){

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

xmlwriter_start_document($xw, '1.0', 'UTF-8');

// A first element
xmlwriter_start_element($xw, 'peliculas');
    xmlwriter_start_element($xw, 'pelicula');
        xmlwriter_start_element($xw, 'titulo');
            xmlwriter_text($xw, 'PHP: Tras el Analilzador');
        xmlwriter_end_element($xw); // titulo
     xmlwriter_end_element($xw); // Pelicula
xmlwriter_end_element($xw); // Peliculas

return xmlwriter_end_document($xw);
}

?>