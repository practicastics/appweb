<?php
$archXml='peliculas.xml';

if (file_exists($archXml)) {
    $xml = simplexml_load_file($archXml);
 
    print_r($xml);
} else {
    exit('Error abriendo '.$archXml);
}

$dom = new DOMDocument();
$dom->loadXML($xml);
if (!$dom) {
    echo 'Error al analizar el documento');
    exit;
}

echo $dom;
?>