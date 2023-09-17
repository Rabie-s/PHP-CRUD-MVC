<?php

namespace App\Models;

use App\Models\Database\Database;

class Student extends Database
{

    public function getStudents()
    {
        $sql = 'SELECT * FROM `students`';
        $stmt = self::$db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        if (!$data == null) {
            return $data;
        }else{
            return [];
        }
        
    }
}
