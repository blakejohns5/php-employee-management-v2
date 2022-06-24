<?php

class Controller
{
  function __construct ()
  {
    echo "<p>This is base controller</p>";
    $this->view = new View();
  }

  function loadModel($model) 
  {
    $url = '.models/' . $model . 'Model.php'; // ?? 

    if (file_exists($url)) {
      require $url;

      $modelName = $model . 'Model';   // ??? Need capital letter?
      $this->model = new $modelName();
    }

  }
}

