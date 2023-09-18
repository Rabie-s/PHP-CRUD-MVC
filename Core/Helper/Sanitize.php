<?php
namespace Core\Helper;

class Sanitize{
    function Sanitize($string){
        return htmlspecialchars(trim($string));
    }
}
