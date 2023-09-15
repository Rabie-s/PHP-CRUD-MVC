<?php
use Core\Helper\Validate;
use Core\Flash;
use Core\View;

$router = new \Bramus\Router\Router();
$router->setNamespace('App\Controllers');


//Routes
$router->get('/','UserController@index');
$router->get('/register','UserController@register');

$router->post('/register/store','UserController@storeRegister');

$router->get('/students','StudentController@index');
$router->get('/students/create','StudentController@create');



$router->set404(function() {
    echo 'Error page not found';
});


$router->run();