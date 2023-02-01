<?php

namespace Core\classes;


class Container
{

    protected $bindings = [];

    function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new \Exception("No matching finding found for your ${key}");
        }
        if (array_key_exists($key, $this->bindings)) {
            return call_user_func($this->bindings[$key]);
        }
    }
}
