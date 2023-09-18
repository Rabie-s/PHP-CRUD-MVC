<?php

namespace App\Models;

use App\Models\Database\Database;

class Student extends Database
{

    public function store($data)
    {
        $full_name = $data['full_name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'];
        $address = $data['address'];

        $sql = 'INSERT INTO `students`(`full_name`, `email`, `phone_number`, `address`) VALUES 
        (?,?,?,?)';
        $stmt = self::$db->prepare($sql);
        $stmt->bindValue(1, $full_name);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $phone_number);
        $stmt->bindValue(4, $address);
        $stmt->execute();
    }

    public function getStudents()
    {
        $sql = 'SELECT * FROM `students`';
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if (!$data == null) {
            return $data;
        } else {
            return [];
        }
    }

    public function getStudent($id)
    {
        $sql = 'SELECT * FROM `students` WHERE id = ? LIMIT 1';
        $stmt = self::$db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if (!$data == null) {
            return $data;
        } else {
            return [];
        }
    }

    public function updateStudent($data,$id)
    {
        $full_name = $data['full_name'];
        $email = $data['email'];
        $phone_number = $data['phone_number'];
        $address = $data['address'];

        $sql = "UPDATE `students` SET `full_name`=?,`email`=?,`phone_number`=?,`address`=? WHERE `id` = ?";
        $stmt = self::$db->prepare($sql);
        $stmt->bindValue(1, $full_name);
        $stmt->bindValue(2, $email);
        $stmt->bindValue(3, $phone_number);
        $stmt->bindValue(4, $address);
        $stmt->bindValue(5, $id);
        $stmt->execute();
    }

    public function destroy($id)
    {
        $sql = "DELETE FROM `students` WHERE id = ?";
        $stmt = self::$db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}
