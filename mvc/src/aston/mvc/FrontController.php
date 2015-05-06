<?php

namespace Aston\Mvc;

class FrontController {
    public function __construct()
    {
        // FRONT CONTROLLER
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
        $controller =  str_replace(array('.', '/', ':', 'http', 'https'),'',$controller);
        $controller = trim(strip_tags($controller));

        $filename = 'controllers/'.$controller.'.php';

        if(!file_exists($filename)) {
            $filename = 'controllers/error404.php';
        }

        require $filename;
    }
}