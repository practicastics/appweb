<?php
    $client = new SoapClient("https://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl");
    echo "<b>The functions are:</b> <br/>";
    echo "<pre>";
    var_dump($client->__getFunctions());
    echo "</pre>";

    echo "<b>The types are:</b> <br />";
    echo "<pre>";
    var_dump($client->__getTypes());
    echo "</pre>";
?>