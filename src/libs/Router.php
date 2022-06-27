<?php

require_once "./controllers/errorController.php";
// require CONTROLLERS . "/error.php";
class Router 
{
    function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        if (empty($_GET['url']))
        {
            $fileController = CONTROLLERS . "/main.php";
            require_once  $fileController;
            $controller = new Main();
            return false; // ??? How it works?
        }

        $fileController = CONTROLLERS . $url[0] . '.php';  // refer to file in controllers folder

        $fileController = "./controllers/" . $url[0] . '.php';
        // check if controller file with url name exists
        if (file_exists($fileController))
        {
            require_once $fileController;
            $controllerClass = ucfirst(($url[0]));
            $controller = new $controllerClass();
            $controller->loadModel(strtolower($url[0]));
            
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                  $controller->{$url[1]}();
                } else {
                    $controller = new ErrorController();
                }
            }
        } else
        {            
            $controller = new ErrorController();
        }
    }
}


