<?php
require 'Decorable.php';
require 'Text.php';
require 'Italic.php';
require 'Strong.php';

$t = new Strong(new Italic(new Text(("Hello"))));

echo $t;