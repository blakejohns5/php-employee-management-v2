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
        echo 'Adding employee.';
        $newEmployee = $_POST;
        $result = $this->model->addEmployee($newEmployee);
        if ($result === true) {
            // Attempt using header return error
            // header('Location: ' . BASE_URL . 'dashboard/getAllEmployees');
            echo("<script>location.href = '". BASE_URL . "dashboard/getAllEmployees';</script>");
        } 
    }
}