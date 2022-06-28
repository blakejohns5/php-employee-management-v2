<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('login');
    }

    function loginUser()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $dbUser = $this->model->authUser($email, $password);
        
        if ($dbUser !== true) {
            // Unable to solve redirect with header location
            // header("Location: ./login");
            echo("<script>location.href = '". BASE_URL . "login';</script>");
        } else {
            echo 'redirecting';
            // Unable to solve redirect with header location
            // header("Location: ./dashboard/getAllEmployees");
            echo("<script>location.href = '". BASE_URL . "dashboard/getAllEmployees';</script>");
        }
    }
}
