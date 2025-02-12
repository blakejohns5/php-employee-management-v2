<?php

class Controller
{
  function __construct ()
  {
    $this->view = new View();
  }

  function loadModel($model) 
  {
    $url = MODELS . '/' . $model . 'Model.php';

    if (file_exists($url)) {
      require $url;

      $modelName = ucfirst($model) . 'Model'; 
      $this->model = new $modelName();  
    }
  }
}

