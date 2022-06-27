<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('login');
        // $this->loadModel('login');
    }

    function loginUser()
    {
        // print_r ($_POST); 
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userDb = $this->model->authUser($email, $password);

        if (!$userDb)
        {
            header('Location: ' . BASE_URL . '/login');
            exit();
        } else {
            header('Location: ' . BASE_URL . '/dashboard/getAllEmployees');
            exit();
        }
        
        

        // if ($_POST['email'] === $userDb['email'])
        // {
        //     // echo "post email = userDb email";
        // };
        
        
    }
}