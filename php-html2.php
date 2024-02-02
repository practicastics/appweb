<?php
$doc = new DOMDocument();
$doc->loadHTMLFile("php-html2.html");
$doc->normalizeDocument();
echo $doc->saveHTML();
?>
