<?php

use Core\classes\App;
use Core\classes\Database;

$db = App::resolve(Database::class);

$heading = 'My Notes';

$query = "select * from notes where userId = 5";
$notes = $db->query($query)->findAll();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);
