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
        $query = $this->db->connect()->prepare("SELECT * FROM users");        
        $query->execute();
        print_r ($query);
        $user = $query->fetchAll();
        echo "<pre>";
        print_r($user);
        return $user;
  


     } catch (PDOException $e) {
        echo 'This user doens´t exist';
        return false;
    }   


}


}