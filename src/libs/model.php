<?php

class Model
{
  function __construct()
  {
    echo "<p>This is base model</p>";
    $this->db = new Database();
  }
}
