<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);

    require basePath("{$class}.php");
});

require basePath('bootstrap.php');

$router = new \Core\classes\Router();

$routes = require basePath('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// This is for the delete func works like isset() and a ternary
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
