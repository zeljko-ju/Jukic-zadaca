<?php

class SmjerController extends AutorizacijaController
{

   private $phtml = "privatno"
   DIRECTORY_SEPARATOR = 'privatno' . DIRECTORY_SEPARATOR;

    public function index()
    {
        $this->render($this->phtmlDir.'read',[
        'smjerovi'=> Smjer::read()]
    }
}