<?php


class EmployeeModel extends Model
{
  public function __contruct()
  {
    parent::__construct();
  }

  function addEmployee(array $newEmployee) 
  {
      $query = $this->db->connect()->prepare("INSERT INTO employees (name, lastName, email, gender, age, streetAddress, city, state, postalCode, phoneNumber) 
      VALUES 
      (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);");

        $query->bindParam(1, $newEmployee["firstName"]);
        $query->bindParam(2, $newEmployee["lastName"]);
        $query->bindParam(3, $newEmployee["email"]);
        $query->bindParam(4, $newEmployee["gender"]);
        $query->bindParam(5, $newEmployee["age"]);
        $query->bindParam(6, $newEmployee["address"]);
        $query->bindParam(7, $newEmployee["city"]);      
        $query->bindParam(8, $newEmployee["state"]);      
        $query->bindParam(9, $newEmployee["zip"]);
        $query->bindParam(10, $newEmployee["phone"]);

    try {
      $query->execute();
      echo 'Added!';
      return true;
    } catch (PDOException $e) {
      echo "The new employee wasn't added";
      return false;
    }
  }

  function update()
  {
    echo '<p>Adding employee from employee model.<p>';
  }

  function dataEmployees()
  {
    echo '<p>Getting all employees from employee model.<p>';
  }

  function deleteEmployee()
  {
    echo '<p>Deleting employee from employee model.<p>';
  }

}