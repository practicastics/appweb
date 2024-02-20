<?php
    $client = new SoapClient("https://www.w3schools.com/xml/tempconvert.asmx?WSDL");
    echo "<b>The functions are:</b> <br/>";
    echo "<pre>";
    var_dump($client->__getFunctions());
    echo "</pre>";

    echo "<b>The types are:</b> <br />";
    echo "<pre>";
    var_dump($client->__getTypes());
    echo "</pre>";
?>