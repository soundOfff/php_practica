<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = require basePath("routes.php");

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require basePath($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require basePath("views/{$code}.php");

    die();
}

routeToController($uri, $routes);
