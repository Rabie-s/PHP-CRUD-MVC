<?php

namespace Core;

class Flash
{
    private static $key = 'message';

    public static function setFlash($name, $message)
    {
        if (isset($_SESSION[self::$key][$name])) {
            unset($_SESSION[self::$key][$name]);
        }

        $_SESSION[self::$key][$name] = $message;
    }

    public static function hasFlash($name)
    {
        if (!empty($_SESSION[self::$key][$name])) {
            return true;
        }
        return false;
    }

    public static function getFlash($name)
    {
        if (self::hasFlash($name)) {
            $message = $_SESSION[self::$key][$name];
            unset($_SESSION[self::$key][$name]);
            return $message;
        }
        return false;
    }
}
