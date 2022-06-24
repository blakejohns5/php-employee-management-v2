<?php


$documentRoot = getcwd();

define('BASE_PATH', $documentRoot);

define('PROTOCOL', (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://');
define('DOMAIN', $_SERVER['HTTP_HOST']);
define('BASE_URL', preg_replace("/\/$/", '', PROTOCOL . DOMAIN . str_replace(array('\\', "index.php", "index.html"), '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))), 1) . '/');

echo BASE_PATH;
echo '<br>';
echo PROTOCOL;
echo '<br>';
echo DOMAIN;
echo '<br>';
echo BASE_URL;
echo '<br>';

//LIBS
define("LIBS", BASE_PATH . '/src/libs');   

//CONTROLLERS
define("CONTROLLERS", BASE_PATH . '/controllers');

//VIEWS
define("VIEWS", BASE_PATH . '/views');

//MODELS
define("MODELS", BASE_PATH . '/models');

