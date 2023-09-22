<?php
namespace App;

class Config{

    const DATABASE = [
        'DB_HOST' => 'localhost',
        'DB_USER' => 'root',
        'DB_PASS' => '',
        'DB_NAME' => 'MVC-Project',
    ];

    const BASE_URL = 'http://192.168.0.103/MVC-Project/Public';
    const ASSETS = 'http://192.168.0.103/MVC-Project/Public/assets/';
    const LAYOUTS = __DIR__.'/Views/layouts/';
    
}