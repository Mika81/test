<?php
/**
 * test/soap/form.php
 */
$text = isset($_POST['text']) ? $_POST['text'] : null;

header('Location: http://google.com');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // do something
    ini_set('soap.wsdl_cache_enable', 0);

    $options = array(
        'location' => 'http://localhost/test/soap/soap-pdf-converter.php',
        'uri' => 'http://aston.com/soap/service/pdf',
        'soap_version' => SOAP_1_2,
        'trace' => 1,
    );

    $client = new SoapClient(null, $options);

    try {
        $data = $client->html2Pdf(utf8_encode($text));
        file_put_contents('myText.pdf', $data);
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="html.pdf"');
        echo base64_decode($data);
    } catch (Exception $e) {
        echo $client->__getLastResponse();
        echo $e->getMessage();
    }

}


// FORM  ----------------------------------------------------------
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <textarea name="text" cols="40" rows="4"><?= $text ?></textarea>
        </div>
        <input type="submit" value="convertir">
    </form>
</body>
</html>
