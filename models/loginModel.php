<?php

class LoginModel extends Model
{
  public function __contruct()
  {
    parent::__construct();
    session_start();    
  }

  function authUser($email, $password)
  {
    try {
        $query = $this->db->connect()->prepare("SELECT * FROM users WHERE email = '$email'");
        $query->execute();
        $userData = $query->fetchAll();

        if (count ($userData) > 0 )
        {
          $user = $userData[0];
          if ($email == $user['email'] && password_verify($password, $user['password'])) {
            $_SESSION['userId'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            return true;
          }
        }
        return false;
     } catch (PDOException $e) {
        echo 'This user doesn´t exist';
    }
}


}