<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\Flash;
use Rakit\Validation\Validator;




//validation
class UserController extends Controller
{

    public function index()
    {
        $this->View->render('login');
    }

    public function registerIndex()
    {
        $this->View->render('register');
    }

    public function storeRegister()
    {
        $validator = new Validator;

        $validation = $validator->validate($_POST, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validation->fails()) {
            // validation fail
            $errors = $validation->errors();
            Flash::setFlash('error', $errors->firstOfAll());
            $this->Redirect->to('/register');
        } else {
            // validation passes
            $User = new User();

            if($User->existsEmail($_POST)){
                Flash::setFlash('error', ['The email is exists.']);
                $this->Redirect->to('/register');
            }else{
                $User->store($_POST);
                $this->Redirect->to('/');
            }


        }
    }

    public function login()
    {
        $User = new User();
        if($User->login($_POST)){
            $this->Redirect->to('/admin/students');
        }else{
            echo 'no';
        }
        
    }

    public function logOut()
    {
    }
}
