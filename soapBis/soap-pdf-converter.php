<?php // test/soap/server.php

require_once 'vendor/html2pdf/html2pdf.class.php';
require_once 'src/Pdf/Converter.php';

ini_set('soap.wsdl_cache_enabled', 0);

$options = array(
    'uri' => 'http://aston.com/soap/service/pdf',
    'soap_version' => SOAP_1_2,
);

$server = new SoapServer(null, $options);

try {
    $server->setClass('Pdf\Converter');
    $server->handle();
} catch (Exception $e) {
    $server->fault('001', 'SoapError: ' . $e->getMessage());
}

