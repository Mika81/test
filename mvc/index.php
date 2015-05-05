<?php // mvc/index.php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';

switch($controller) {
    case 'blog':
        require 'controllers/blog.php';
        break;
    case 'home':
        require 'controllers/home.php';
        break;
    default:
        require 'controllers/error404.php';
        break;
}
