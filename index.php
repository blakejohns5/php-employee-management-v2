<?php

// echo "index.php";
require_once './config/constants.php';
require_once './src/libs/database.php';
require_once './src/libs/controller.php';
require_once './src/libs/model.php';
require_once './src/libs/view.php';

require_once './src/libs/router.php';

require_once './config/db.php';

$router = new Router();

