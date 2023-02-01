<?php
// This is for routing by <a> tags to map the real route.

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');

$router->post('/notes/create', 'controllers/notes/store.php');
$router->delete('/note', 'controllers/notes/destroy.php');
