<?php // test/soap/client.php

ini_set('soap.wsdl_cache_enable', 0);

$options = array(
    'location' => 'http://localhost/test/soap/server.php',
    'uri' => 'http://toto.com/uri/perso',
    'soap_version' => SOAP_1_2,
    'trace' => 1,
);

$client = new SoapClient(null, $options);

try {
    //echo $client->sayHello(),'<br>';
    //echo $client->getTemperature('paris');
    var_dump($client->getVilles());
} catch (Exception $e) {
    echo $client->__getLastResponse();
    echo $e->getMessage();
}
