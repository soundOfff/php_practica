<?php

use Core\classes\Database;

$config = require basePath("config.php");
$credentials = $config['credentials'];

$db = new Database($config['database'], $credentials['username'], $credentials['password']);
$heading = 'Note';

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->find();

// 403
authorize($note['userId'] === 5);



view("notes/show.view.php", [
    'heading' => 'My Note',
    'note' => $note,
]);
