<?php

use Core\classes\Database;

$config = require basePath("config.php");
$credentials = $config['credentials'];

$db = new Database($config['database'], $credentials['username'], $credentials['password']);
$heading = 'My Notes';

$query = "select * from notes where userId = 5";
$notes = $db->query($query)->findAll();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);
