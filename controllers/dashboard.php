<?php

class Dashboard extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    // // calls dataEmployees() from employeeModel.php
    function getAllEmployees ()
    {
        echo 'calling from DASHBOARD';
        $employees = $this->model->dataEmployees(); 
        $this->view->employeeData = $employees;
        $this->view->render('dashboard');

    }

}