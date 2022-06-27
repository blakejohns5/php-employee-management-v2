<?php

class View
{
  function __construct()
  {
   
  }
  
  function render($viewName)
  {
    require_once VIEWS . '/' . $viewName . '/' .  "index.php";
  }

}