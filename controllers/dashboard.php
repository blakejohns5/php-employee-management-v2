<?php

class Dashboard extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "New Dashboard controller";
        $this->view->render('dashboard');
    }
}