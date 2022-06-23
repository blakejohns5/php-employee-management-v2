<?php

class Main extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "New Main controller";
        $this->view->render('main');
    }
}