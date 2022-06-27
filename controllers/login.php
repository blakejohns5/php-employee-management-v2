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
        $userDb = $this->model->authUser($_POST['email'], $_POST['password']);
        // echo $email;
        // echo $password;
        // print_r($userDb);

        // if ($_POST['email'] === $userDb['email'])
        // {
        //     // echo "post email = userDb email";
        // };
        
        
    }
}