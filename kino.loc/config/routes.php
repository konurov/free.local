<?php 
    return [
        '/home' => function(){
           require_once APP_PATH. '/views/pages/home.php';
        },
        '/' => function(){
             require_once APP_PATH. '/views/pages/index.php';
       
        },
        '/movies' => function(){
            require_once APP_PATH. '/views/pages/movies.php';
        }
    ];

?>