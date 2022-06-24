<?php

require_once "./controllers/errorController.php";
// require CONTROLLERS . "/error.php";
class Router 
{
    function __construct()
    {
        echo "New router";
        echo "<br>";

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        // echo $url;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        var_dump($url);

        if (empty($_GET['url']))
        {
            $fileController = CONTROLLERS . "/main.php";
            require_once  $fileController;
            $controller = new Main();
            return false; // ??? How it works?
        }

        $fileController = CONTROLLERS . $url[0] . '.php';  // refer to file in controllers folder

        $fileController = "./controllers/" . $url[0] . '.php';
        echo "<p>$fileController</p>";
        // check if controller file with url name exists
        if (file_exists($fileController))
        {
            require_once $fileController;
            $controllerClass = ucfirst(($url[0]));
            $controller = new $controllerClass();
            var_dump($controller);
        }else
        {            
            $controller = new ErrorController();
        }
    }
}

