<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Student;
use Core\Flash;
use Rakit\Validation\Validator;



class StudentController extends Controller
{

    public function index()
    {
        $Students = new Student();
        $this->View->render('students/students', ['students' => $Students->getStudents()]);
    }

    public function create()
    {

        $this->View->render('students/create_student');
    }

    public function store()
    {
        $validator = new Validator;

        $validation = $validator->validate($_POST, [
            'full_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|min:8|max:15',
            'address' => 'required',
        ]);

        if ($validation->fails()) {
            $errors = $validation->errors();
            Flash::setFlash('errors', $errors->firstOfAll());
            $this->Redirect->to('/admin/students/create');
        } else {
            $Student = new Student();
            $Student->store($_POST);
            Flash::setFlash('success', 'Inserted successful');
            $this->Redirect->to('/admin/students/create');
        }
    }

    public function destroy($id)
    {
        $Student = new Student();
        $Student->destroy($id);
        $this->Redirect->to('/admin/students/');
    }

    public function edit($id)
    {
        $Student = new Student();
        $this->View->render('students/edit_student', ['student' => $Student->getStudent($id)]);
    }

    public function update($id)
    {
        $Student = new Student();
        $Student->updateStudent($_POST,$id);
        $this->Redirect->back();
    }

    public function about(){
        $this->View->render('students/about');
    }
}
