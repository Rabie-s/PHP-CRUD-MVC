<?php
namespace App\Models;
use App\Models\Database\Database;


class User extends Database{

    public function store($data){

        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUE (?,?,?)";
        $stmt = self::$db->prepare($query);
        $stmt->bindValue(1,$name);
        $stmt->bindValue(2,$email);
        $stmt->bindValue(3,$password);
        $stmt->execute();
    }

}