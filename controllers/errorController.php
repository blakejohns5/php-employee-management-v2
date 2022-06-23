<?php 

// require_once './src/libs/controller.php'; // ?

class ErrorController extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "Error Controller";
        $this->view->render('errorController');
    }
}

