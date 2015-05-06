<?php

require_once 'Page.php';

$sub = new Page();
$sub->setName("Test")
    ->setUri("#");

$sub2 = new Page();
$sub2->setName("Test")
     ->setUri("#");

$page = new Page;
$page->setName("Test")
     ->setUri("#")
     ->addPage($sub)
     ->addPage($sub2);

echo $page;