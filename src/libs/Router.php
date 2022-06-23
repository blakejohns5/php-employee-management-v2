<?php

require_once "./controllers/error.php";
// require CONTROLLERS . "/error.php";
class Router 
{
    function __construct()
    {
        echo "New router";
        echo "<br>";

        $url = $_GET['url'];
        // echo $url;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        var_dump($url);

        // $fileController = CONTROLLERS . $url[0] . '.php';  // refer to file in controllers folder

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

