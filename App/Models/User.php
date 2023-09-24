<?php

namespace App\Models;

use PDO;
use Core\Model;
use Core\Helper\Sanitize;


class User extends Model
{

    public function store($data)
    {

        $name = Sanitize::stringSanitize($data['name']);
        $email = Sanitize::stringSanitize($data['email']);
        $password = Sanitize::stringSanitize($data['password']);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUE (?,?,?)";
        $stmt = self::$db->prepare($query);
        $stmt->bindValue(1, $name);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $hashedPassword);
        $stmt->execute();
    }

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];

        $sql = "SELECT * FROM `users` WHERE email = ? LIMIT 1";

        $stmt = self::$db->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();
        $count = $stmt->rowCount();

        if ($count > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                //comparison between the password from user and the password in database.
                if (password_verify($password, $row['password'])) {
                    $_SESSION['name'] = $row['name']; //store the email and role in session.
                    return true;
                } else {
                    return false;
                }
            }
        } else {
            return false;
        }
    }


    public function existsEmail($data)
    {
        $email = $data['email'];
        $sql = 'SELECT * FROM `users` WHERE email = ? LIMIT 1';
        $stmt = self::$db->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            return true;
        }
        return false;
    }
}
