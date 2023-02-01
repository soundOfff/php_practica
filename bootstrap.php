<?php

use Core\classes\Container;
use Core\classes\App;
use Core\classes\Database;

$container = new Container();

$container->bind('Core\classes\Database', function () {
    $config = require basePath("config.php");
    $credentials = $config['credentials'];
    return new Database($config['database'], $credentials['username'], $credentials['password']);
});

App::setContainer($container);
