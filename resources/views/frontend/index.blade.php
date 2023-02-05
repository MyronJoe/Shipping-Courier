<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
    '/' => 'views/home.php',

    '/about' => 'views/about.php',

    '/tracking' => 'views/tracking.php',

    '/contact' => 'views/contact.php',

    '/air' => 'views/air.php',

    '/road' => 'views/road.php',

    '/warehouse' => 'views/warehouse.php',

    '/storage' => 'views/storage.php',
];


function abort($code = 404){
    http_response_code($code);

    require 'views/error.php';

    die();
}


if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}else{
    abort();
}



?>