<?php

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

xmlwriter_end_document($xw);

$d1 = xmlwriter_output_memory($xw);

echo "d1";
echo $d1;


$doc = new DOMDocument();

/*
$doc->loadXML(xmlwriter_output_memory($xw));
$doc->normalizeDocument();

$s = simplexml_import_dom($doc);
echo $s;
*/

?>