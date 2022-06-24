<?php

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        echo "New Dashboard controller from the EMPLOYEE CONTROLLER";
        $this->view->render('employee');
    }

    function editEmployee() 
    {
        echo 'editing employee from employeeController';
    }
}