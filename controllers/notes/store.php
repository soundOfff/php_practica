<?php

use Core\classes\App;
use Core\classes\Validator;
use Core\classes\Database;

$db = App::resolve(Database::class);

$errors = [];

if (!Validator::STRING($_POST['body'], 1, 255)) {
    $errors['body'] = 'A body is required(Min 255 chars)';
};


if (!Validator::STRING($_POST['title'], 1, 20)) {
    $errors['title'] = 'A title is required(Min 20 chars)';
};

// Return to the create for display errors.
if (!empty($errors)) {
    return view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors
    ]);
}
// errors is empty so return to notes for show the new note in the list
else {
    $db->query('insert into notes(userId, title, body) values(:userId, :title, :body )', [
        'body' => $_POST['body'],
        'title' => $_POST['title'],
        'userId' => 5,
    ]);

    header('location: /notes');
    die();
}
