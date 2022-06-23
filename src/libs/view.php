<?php

class View
{
  function __construct()
  {
    echo "<p>This is base view</p>";
  }
  function render($viewName)
  {
    require_once VIEWS . '/' . $viewName . '/' .  "index.php";
  }

}