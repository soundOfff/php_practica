<?php

use Core\classes\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize($cond, $status = Response::FORBIDDEN)
{
    if (!$cond) {
        abort($status);
    }
}

function basePath($path)
{
    return BASE_PATH . $path;
}

function view($path, $atributtes = [])
{
    extract($atributtes);
    require basePath('views/' . $path);
}
