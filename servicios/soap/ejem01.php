<?php
    // Create the client object and pass in the
    // URL of the SOAP server.
    $soap_client = new SoapClient('https://www.w3schools.com/xml/tempconvert.asmx?WSDL');
    // Create an associative array of the data
    // that you'll pass into one of the functions
    // of the client.
    $degrees_in_celsius = array('Celsius' => '25');
    // Use a function of the client for the
    // conversion.
    $convert_to_fahrenheit = $soap_client->CelsiusToFahrenheit($degrees_in_celsius);
    // Show the result using var_dump. Other PHP
    // functions like echo will not work.
    echo "<pre>";
    var_dump($convert_to_fahrenheit);
    echo "</pre>";
    // Repeat the same process. This time, use the
    // FahrenheitToCelsius function to convert a
    // temperature from Fahrenheit to Celsius.
    $degrees_in_fahrenheit = array('Fahrenheit' => '25');
    $convert_to_celsius = $soap_client->FahrenheitToCelsius($degrees_in_fahrenheit);
    echo "<pre>";
    var_dump($convert_to_celsius);
    echo "</pre>";
?>