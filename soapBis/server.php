<?php // test/soap/server.php

ini_set('soap.wsdl_cache_enabled', 0);

require_once 'src/Meteo.php';

function sayHello() {
    return 'Hello SOAP';
}

function getTemperature($ville) {
    $villes = array(
        'paris' => 18,
        'nice'  => 22,
        'lille' => 8,
    );

    if (!isset($villes[$ville])) {
        throw new InvalidArgumentException("Ville $ville inconnue !");
    }
    return $villes[$ville];
}

$options = array(
    'uri' => 'http://toto.com/uri/perso',
    'soap_version' => SOAP_1_2,
);

//$server = new SoapServer(service.wsdl, $options);
$server = new SoapServer(null, $options);

try {
    $server->setClass('Meteo');
    //$server->addFunction(["sayHello", "getTemperature"]);
    $server->handle();
} catch (Exception $e) {
    $server->fault('001', 'SoapError: ' . $e->getMessage());
}