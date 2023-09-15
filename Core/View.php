<?php

namespace Core;




class View
{

    protected static $path = __DIR__ . '/../App/Views';
    protected static $page;
    protected static ?array $data;


    public static function render($page, $data = null)
    {
        self::$page = $page;
        self::$data = $data;
        include(self::$path . '/' . self::$page . '.php');
    }
}
