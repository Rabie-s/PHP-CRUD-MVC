<?php
use Core\Redirect;
$router = new \Bramus\Router\Router();
$router->setNamespace('App\Controllers');


//Routes
//login
$router->get('/','UserController@index');
$router->post('/login','UserController@login');
//register
$router->get('/register','UserController@registerIndex');
$router->post('/register/store','UserController@storeRegister');

//middleware
$router->before('GET|POST', '/admin/.*', function() {
    if (!isset($_SESSION['name'])) {
        $Redirect = new Redirect();
        $Redirect->to('/');
    }
    
});

$router->get('admin/students','StudentController@index');
$router->get('admin/students/create','StudentController@create');



$router->set404(function() {
    echo 'Error page not found';
});


$router->run();