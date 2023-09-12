<?php
use Core\View;
$router = new \Bramus\Router\Router();
$router->setNamespace('App\Controllers');


//Routes
$router->get('/',function(){
    
    View::render('login',['Name'=>'Rabie']);
});


$router->set404(function() {
    echo 'Error';
});


$router->run();