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
        $employees = $this->model->dataEmployees(); 
        $this->view->employeeData = $employees;
        $this->view->render('dashboard');

    }

}