<?php
namespace App;

class Config{

    const DATABASE = [
        'DB_HOST' => 'localhost',
        'DB_USER' => 'root',
        'DB_PASS' => '',
        'DB_NAME' => 'PHP-CRUD-MVC',
    ];

    const BASE_URL = 'http://localhost/PHP-CRUD-MVC/Public';
    const ASSETS = 'http://localhost/PHP-CRUD-MVC/Public/assets/';
    const LAYOUTS = __DIR__.'/Views/layouts/';
    
}