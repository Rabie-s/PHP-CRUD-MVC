<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Student;



class StudentController extends Controller
{

    public function index()
    {
        $Students = new Student();
        $this->View->render('students/students',['students'=>$Students->getStudents()]);
    }

    public function create()
    {

        $this->View->render('students/students/create_student');
    }

    public function store()
    {
    }

    public function destroy()
    {
    }
}
