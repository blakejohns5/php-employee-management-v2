<?php

class View
{
  // function __construct()
  // {
   
  // }
  
  function render($viewName)
  {
    require VIEWS . '/' . $viewName . '/' .  "index.php";
  }

}