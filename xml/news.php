<?php
/**
 * Created by PhpStorm.
 * User: mika
 * Date: 04/05/2015
 * Time: 16:04
 */

require_once('Aston/Rss2/Reader.php');
require_once('Aston/Rss2/Item.php');

if(isset($_POST['choix'])){
    $u = $_POST['choix'];
    if($u == 'sport'){
        $url = "http://www.france24.com/fr/sports/rss";
    } if($u == 'culture'){
        $url = "http://www.france24.com/fr/culture/rss";
    } if($u == 'planete'){
        $url = "http://www.france24.com/fr/tag/environnement/rss";
    }
}else{
    $url = "http://www.journaldunet.com/rss/";
}

$reader = new \Aston\Rss2\Reader($url);
$items = $reader->getItems();

include_once 'views/news.html';

var_dump($reader->getItems());

$reader->reader();

