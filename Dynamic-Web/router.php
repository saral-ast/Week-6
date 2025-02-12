<?php 

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/Dynamic-Web'=> 'controller/index.php',
    '/Dynamic-Web/about'=> 'controller/about.php',
    '/Dynamic-Web/contactUs'=> 'controller/contactUs.php', 
];
function routToController($uri, $routes){
    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }else{
        abort();
    }
}


function abort($code = 404){
    http_response_code(404);
    require "view/{$code}.php";
    die();
}


routToController($uri, $routes);