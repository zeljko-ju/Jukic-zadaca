<?php

class SmjerController extends Controller
{   
    private $putanja = 'privatno' . DIRECTORY_SEPARATOR .
    'smjer' . 
    DIRECTORY_SEPARATOR . 'index'
    public function index()
    {
       $view = new view();
       $this->view->render($this->putanja .'index'
 , [
    'grad'= 'Osijek', 
    'brojevi' =>[
        1,6,7,4
    ]
 ]    }
}