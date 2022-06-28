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

        if ($dbUser) {
            header('Location: ' . BASE_URL . 'login');
            exit();
        } else {
            header("Location:" . BASE_URL . "dashboard/getAllEmployees");
            exit();
        }
    }
}