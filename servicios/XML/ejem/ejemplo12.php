<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("peliculas.xml");
print $xmlDoc->saveXML();


/*
echo "antes load";

$dom->loadXML("peliculas.xml");
$dom->normalizeDocument();

/*
if (!$dom) {
    echo 'Error al analizar el documento');
    exit;
}

$s = simplexml_import_dom($dom);

echo $s->libro[0]->titulo;
*/
?>