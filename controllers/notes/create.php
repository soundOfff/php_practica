<?php

use Core\classes\Database;
use Core\classes\Validator;


require basePath('Core/classes/Validator.php');

$config = require basePath("config.php");
$credentials = $config['credentials'];

$db = new Database($config['database'], $credentials['username'], $credentials['password']);
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    if (!Validator::STRING($_POST['body'], 1, 255)) {
        $errors['body'] = 'A body is required or pass';
    };


    if (!Validator::STRING($_POST['title'], 1, 20)) {
        $errors['title'] = 'A title is required or pass';
    };



    if (empty($errors)) {
        $db->query('insert into notes(userId, title, body) values(:userId, :title, :body )', [
            'body' => $_POST['body'],
            'title' => $_POST['title'],
            'userId' => 5,
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create a Note',
    'errors' => $errors
]);
