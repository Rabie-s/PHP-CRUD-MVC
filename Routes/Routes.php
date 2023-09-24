<?php
use Core\Redirect;
$router = new \Bramus\Router\Router();
$router->setNamespace('App\Controllers');


//Routes
//login
$router->get('/','UserController@index');
$router->post('/login','UserController@login');
$router->get('/logout','UserController@logOut');
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
$router->post('admin/students/store','StudentController@store');
$router->get('admin/students/edit/{id}','StudentController@edit');
$router->post('admin/students/update/{id}','StudentController@update');
$router->get('admin/students/delete/{id}','StudentController@destroy');
$router->get('admin/students/about','StudentController@about');



$router->set404(function() {
    echo 'Error page not found';
});


$router->run();