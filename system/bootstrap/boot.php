<?php

session_start();

use System\Bootstrap\Autoload;
use System\Router\Routing;

require_once 'system/config.php';
require_once 'system/bootstrap/Autoload.php';

$autoload = new Autoload();
$autoload->autoLoader();

$router = new Routing();
$router->run();