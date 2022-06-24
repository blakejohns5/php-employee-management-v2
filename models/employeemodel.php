<?php


class EmployeeModel extends Model
{
  public function __contruct()
  {
    parent::__construct();
  }

  function updateEmployee()
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