<?php
// test/soap/server.php
/* Pour la partie DEV, effacer le cache, à retirer avant mise en prod  */
ini_set('soap.wsdl_cache_enable', 0);

require_once "src/Meteo.php";

function sayHello(){
    return 'Hello World !';
}

function getTemperature($ville){
    $villes = array(
        'Paris' => 18,
        'Nice' => 22,
        'Lille' => 8,
    );

    if(!isset($villes[$ville])){
        throw new InvalidArgumentException('ville inconnue ...');
    }
    return $villes[$ville];
}

/* Les opions de base pour un server */
$options = array(
    /* uri est une sorte de namespace, une sorte d'identifiant unique */
    'uri' => 'http://toto.com/uri/perso',
    /* Choix de la version de protociole */
    'soap_version' => SOAP_1_2,
);

/* création objet soap server, prends deux arguments */
$server = new SoapServer(null, $options);

try{
    $server->setClass('Meteo');
    $server->addFunction(["sayHello", "getTemperature"]);
    /* pour que cela fonctionne on exécute la métode handle
       -> écoute, exécute et sers  */
    $server->handle();
}catch (Exception $e){
    $server->fault('001', 'SoapError: ' . $e ->getMessage());
}