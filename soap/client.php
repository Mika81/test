<?php
// test/soap/client.php
/* Pour la partie DEV, effacer le cache, à retirer avant mise en prod  */
ini_set('soap.wsdl_cache_enable', 0);

$options = array(
    'location' => 'http://localhost/test/soap/server.php',
    'uri' => 'http://toto.com/uri/perso',
    'soap_version' => SOAP_1_2,
);

$client = new SoapClient(null, $options);

try {
    /* On va chercher la méthode sur le server */
    echo $client->sayHello();
}catch (Exception $e){
    echo $e->getMessage();
}