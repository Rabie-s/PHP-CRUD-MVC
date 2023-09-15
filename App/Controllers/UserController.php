<?php

namespace App\Controllers;

use App\Models\User;
use Core\View;
use App\Config;
use Core\Flash;

//validation
class UserController
{


    public function index()
    {
        View::render('login');
    }

    public function register()
    {
        View::render('register',['name'=>'ahmad']);
    }

    public function storeRegister(){
        


        $data = [
            'name'=>htmlspecialchars($_POST['name']),
            'email'=>htmlspecialchars($_POST['email']),
            'password'=>htmlspecialchars($_POST['password']),
        ];
        $User = new User();
        $User->store($data);

        //'Location: '.$_SERVER['HTTP_ORIGIN'].$_SERVER['PHP_SELF'].'/'
        return header('Location: '.Config::BASE_URL);

        
        
    }

    public function login()
    {
    }

    public function logOut()
    {
    }
}
