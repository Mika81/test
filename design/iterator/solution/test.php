<?php

require 'DbNews.php';
require 'RssNews.php';
require 'NewsManager.php';

$dbNews = new DbNews();
$rssNews = new RssNews();

$manager = new Newsmanager();
$manager->addSource($dbNews)
    ->addSource($rssNews);

$manager->showNews();