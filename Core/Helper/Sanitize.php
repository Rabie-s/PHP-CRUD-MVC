<?php
namespace Core\Helper;

class Sanitize{
    public static function stringSanitize($string){
        return htmlspecialchars(trim($string));
    }
}
