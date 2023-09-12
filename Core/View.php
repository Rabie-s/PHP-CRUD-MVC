<?php

namespace Core;




class View
{

    public static $path = __DIR__ . '/../App/Views';
    public static $page;
    public static ?array $data;


    public static function render($page, $data = null)
    {
        self::$page = $page;
        self::$data = $data;
        include(self::$path . '/' . self::$page . '.php');
    }
}
