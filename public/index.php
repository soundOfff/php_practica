<?php

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {

    $class = str_replace('\\', '/', $class);

    require basePath("{$class}.php");
});

require basePath('Core/router.php');

// Connect MySql db


// $db = new Database($config['database'], $credentials['username'], $credentials['password']);

// $id = $_GET['id'];
// $query = "select * from posts where id_posts = :id"; // could be ? instead of :id

// $posts = $db->query($query, [':id' => $id])->fetch();

// dd($posts);
