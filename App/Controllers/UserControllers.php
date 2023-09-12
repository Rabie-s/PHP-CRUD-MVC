<?php
namespace App\Controllers;
use Core\View;
use Core\Flash;

class UserControllers{


    public function index(){
        $View = new View(__DIR__.'/../Views');
        $Flash = new Flash();
        $Flash->setFlash('error','test error');

        
        $View->render('Welcome');
    }

}