<?php
namespace Core;
use Core\View;


class Controller{

    public View $View;
    public Redirect $Redirect;
    

    function __construct()
    {
        $this->View = new View();
        $this->Redirect = new Redirect();
        
    }

}