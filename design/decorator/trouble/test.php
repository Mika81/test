<?php
require_once 'Text.php';
require_once 'TextStrong.php';
require_once 'TextItalic.php';
require_once 'TextParagraphe.php';
require_once 'TextParagrapheStrong.php';
require_once 'TextParagrapheStrongItalic.php';

$t = new Text("Hello !!");
$ts = new TextStrong("Hi !!");
$ti = new TextItalic("Lorem ipsum !!");
$tp = new TextParagraphe("dolor sit amet !!");
$tps = new TextParagrapheStrong("et bla bla bla !!");
$tpsi = new TextParagrapheStrongItalic("et encore bla bla bla !!");

echo $t.'<br>'.$ts.'<br>'.$ti.'<br>'.$tp."<br>".$tps."<br>".$tpsi;