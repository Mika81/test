<?php

ini_set('soap.wsdl_cache_enable', 0);

require_once "vendor/html2pdf/html2pdf.class.php";
require_once "src/Pdf/Converter.php";

$options = array(
    'uri' => 'http://toto.com/uri/perso',
    'soap_version' => SOAP_1_2,
);

$server = new SoapServer(null, $options);

try{
    $server->setClass('html2pdf');
    $server->handle();
}catch (Exception $e){
    $server->fault('001', 'SoapError: ' . $e ->getMessage());
}