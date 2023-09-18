<?php
namespace Core;
use Core\View;


class Controller{

    public ?View $View = null;
    public ?Redirect $Redirect = null;
    

    function __construct()
    {
        $this->View = new View();
        $this->Redirect = new Redirect();
        
    }

}