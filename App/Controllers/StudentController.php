<?php

namespace App\Controllers;

use Core\View;


class StudentController
{

    public function index()
    {
        View::render('students');
    }

    public function create()
    {
        
        View::render('create_student');
    }

    public function store()
    {
    }

    public function destroy()
    {
    }
}
