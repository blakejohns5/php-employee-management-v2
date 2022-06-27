<?php


class DashboardModel extends Model
{
  public function __contruct()
  {
    parent::__construct();
  }

  function dataEmployees()
  {

    try {
      $query = $this->db->connect()->prepare('SELECT * FROM employees');
      $query->execute();
      $employees = $query->fetchAll();
      return $employees;
    } catch (PDOException $e) {
      echo 'Problem getting all employees from model.';
      return false;
    }
  }
};

