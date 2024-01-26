<?php
$dom = new DOMDocument;
$dom->loadXML('<libros><libro><titulo>bla</titulo></libro></libros>');
if (!$dom) {
    echo 'Error al analizar el documento');
    exit;
}

$s = simplexml_import_dom($dom);

echo $s->libro[0]->titulo;
?>