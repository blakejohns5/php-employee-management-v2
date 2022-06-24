<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "New Login controller";
        $this->view->render('login');
    }
}