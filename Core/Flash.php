<?php
namespace Core;


class Flash{

    private array $message = [];

    
    function __destruct() {
        $_SESSION['message'] = $this->message;
        
    }
    
    public function setFlash($key,$value){
        $this->message[$key] = $value;
    }

    public function getFlash($key){
        if(!isset($_SESSION['message'][$key])){
            return null;
        }
        return $_SESSION['message'][$key];
    }

}