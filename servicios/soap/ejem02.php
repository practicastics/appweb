<?php
    $soap_client = new SoapClient('https://apps.learnwebservices.com/services/hello?wsdl');
    // Call a function of the soap client.
    $say_hello = $soap_client->SayHello(['Name' => 'Martinez']);
    // Print the message from the client.
    echo $say_hello->Message;
?>