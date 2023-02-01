<?php

use Core\classes\App;
use Core\classes\Database;

$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->find();

authorize($note['userId'] === 5);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);


header('location: /notes');
exit();
