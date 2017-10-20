<?php

ini_set('display_errors', 1);
error_reporting(~0);
session_start();

include 'helpers/Router.php';
include 'helpers/View.php';
include 'helpers/fn.php';
include 'database/Database.php';
include 'controllers/BaseController.php';

$router = new Router();
include 'router.php';

$router->setConteollerPath(__DIR__ . "/controllers");
$found = $router->run();

if(!$found){
	echo '404';
}
