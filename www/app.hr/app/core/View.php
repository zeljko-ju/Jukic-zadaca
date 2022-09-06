<?php

class View
{
    private $predlozak;

    public function __construct($predlozak='predlozak')
    {
        $this->predlozak = $predlozak;
    }

    public function render($phtmlStranica, $parametri=[])
    {
        //Log::log($parametri);
        $viewDatoteka = BP_APP . 'view' . 
        DIRECTORY_SEPARATOR . $phtmlStranica . '.phtml';
        if(file_exists($viewDatoteka)){
            ob_start();
            extract($parametri); // ključeve asocijativnog niza pretbara u varijable
            include_once $viewDatoteka;
            $sadrzaj = ob_get_clean();
        }else{
            $sadrzaj = 'View datoteka ne postoji: ' . $viewDatoteka;
        }
        
        include_once BP_APP . 'view' . 
            DIRECTORY_SEPARATOR . $this->predlozak . '.phtml';
    }
}