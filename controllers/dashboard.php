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

    function logoutUser()
    {
        unset($_SESSION);
        
        // destroy session cookie
        // if (ini_get("session.use_cookies")) {
        //  $params = session_get_cookie_params();
        //     setcookie(
        //         session_name(),
        //         '',
        //         time() - 42000,
        //         $params["path"],
        //         $params["domain"],
        //         $params["secure"],
        //         $params["httponly"]
        //     );
        // }
        
        // destroy the session
        session_destroy();
        header('Location:' . BASE_URL . "login");
          
    }

}