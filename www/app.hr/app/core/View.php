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
        ob_start();
        extract($parametri); // ključeve asocijativnog niza pretbara u varijable
        include_once BP_APP . 'view' . 
            DIRECTORY_SEPARATOR . $phtmlStranica . '.phtml';
        $sadrzaj = ob_get_clean();
        include_once BP_APP . 'view' . 
            DIRECTORY_SEPARATOR . $this->predlozak . '.phtml';
    }
}