<?php

class Employee extends Controller
{
    function __construct()
    {
        parent::__construct();
        // echo "New Dashboard controller from the EMPLOYEE CONTROLLER";
        $this->view->render('employee');
    }

    function editEmployee() 
    {
        // echo 'editing employee from employeeController';
        $varOne = $_POST;
        var_dump($varOne);
        $this->model->update();
        
    }

    function addEmployee() 
    {
        $root = getcwd();
        echo $root;
        echo 'Adding employee.';
        echo $_POST;
    }
}