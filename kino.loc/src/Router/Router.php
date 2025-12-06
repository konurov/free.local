<?php
namespace App\Router;
class Router{
    public function dispatch(string $uri){
         $routes = require_once APP_PATH.'/config/routes.php';

            $routes[$uri]();
        

    }

} 

?>