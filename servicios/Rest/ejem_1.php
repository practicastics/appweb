<?php
$url = "https://www1php.azurewebsites.net/servicios/XML/book.xml";
$xmlContent = file_get_contents($url);
if ($xmlContent === false) {
    echo "Error al recuperar datos";
} else {
    // Procesar el contenido XML recuperado
    echo $xmlContent;
}
?>