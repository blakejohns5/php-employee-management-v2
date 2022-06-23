<?php

class Controller
{
  function __construct ()
  {
    echo "<p>This is base controller</p>";
    $this->view = new View();
  }
}
