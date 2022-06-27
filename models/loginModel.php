<?php

// class DashboardModel extends Model
// {
//   public function __contruct()
//   {
//     parent::__construct();
//   }

//   function dataEmployees()
//   {

//     try {
//       $query = $this->db->connect()->prepare('SELECT * FROM employees');
//       $query->execute();
//       $employees = $query->fetchAll();
//       return $employees;
//     } catch (PDOException $e) {
//       echo 'Problem getting all employees from model.';
//       return false;
//     }
//   }
// };

class LoginModel extends Model
{
  public function __contruct()
  {
    parent::__construct();
  }

  function authUser($email, $password)
  {
    try {
        // $query = $this->db->connect()->prepare("SELECT * FROM users");        
        // $query->execute();
        // print_r ($query);
        // $user = $query->fetchAll();
        // echo "<pre>";
        // print_r($user);
        // return $user;

        $query = $this->db->connect()->prepare("SELECT * FROM users WHERE email = '$email'");               
        $query->execute();        
        $userData = $query->fetchAll();  
         
        // print_r($userData[0]['email']);     
        // print_r($userData[0]['password']);
        if (count ($userData) > 0 )
        {
          $user = $userData[0];
          if (password_verify($password, $user['password'])) {
            echo "dsdfsdfsdf";
            // session_start();  
            $_SESSION['userId'] = $user['id'];
              // $_SESSION['time'] = time();
              // $_SESSION['lifeTime'] = 60 * 10;              
              return true;
          }
        }
        return false;
        
        // require_once VIEWS . "/dashboard";
  
     } catch (PDOException $e) {
        echo 'This user doens´t exist';
        
    }   
    return false;
}


}