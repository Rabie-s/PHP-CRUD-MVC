<?php

namespace Core\Helper;


class Validate
{

    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function int($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        return strlen($value); //intlen($value) >= $min && strlen($value) <= $max;
    }

    public static function checkEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }


    public static function checkNumber($int)
    {
        if (!filter_var($int, FILTER_VALIDATE_INT)) {
            return false;
        }
        return true;
    }

    

    public static function isNumber($val)
    {
        if (is_numeric($val) or is_float($val)) {
            return true;
        }
        return false;
    }
}
