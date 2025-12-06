<?php
define('APP_PATH', __DIR__);
require_once APP_PATH.'/vendor/autoload.php';
use App\App;
//dd(['Bay! Я работаю']);
$app = new App();
$app->run();


?>