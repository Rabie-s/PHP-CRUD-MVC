<?php

namespace App\Models\Database;

use App\Config;
use PDO;
use PDOException;

class Database
{


    public static $db;

    function __construct()
    {

        try {
            self::$db = new PDO("mysql:host=" . Config::DATABASE['DB_HOST'] . ";dbname=" . Config::DATABASE['DB_NAME'],
            Config::DATABASE['DB_USER'], Config::DATABASE['DB_PASS']);
        } catch (\PDOException $e) {
            echo $e;
        }
    }
}
