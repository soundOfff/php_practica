<?php

namespace Core\classes;

class Validator
{


    public static function STRING($value = null, $min = 1, $max = INF)
    {
        $len = strlen(trim($value));
        return $len >= $min && $len <= $max;
    }

    public static function EMAIL($value)
    {
        return filter_Var($value, FILTER_VALIDATE_EMAIL);
    }
}
