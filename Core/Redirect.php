<?php

namespace Core;

use App\Config;
use Core\Flash;

class Redirect
{

    public $Flash = 'test';


    public function to($location)
    {
        return header('Location: ' . Config::BASE_URL . $location);
        die();
        exit;
    }

    public function back()
    {
        echo "<script>javascript:history.go(-1)</script>";
        //$_SESSION['url'] = $_SERVER['REQUEST_URI'];
        
    }
}
