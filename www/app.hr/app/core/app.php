<?php

class App 
{
    public static function start()
    {
        echo 'Hello from App::Start';
        $ruta = Request::getRuta();

        $djelovi = explode('/',$ruta);
        log::log($djelovi);

        $klasa='';
        if(!isset($djelovi[1]) || $djelovi[1]===''){
            $klasa = 'IndexController';
        }else{
            $klasa=ucfirst($djelovi[1] . 'Controller')
        }
        //log::log($klasa)
        
        metoda:'';
        if(!isset($djelovi[2]) || $djelovi[2]===''){
            $metoda='index';
        }else{
            $metoda=$djelovi[2];
        }
    //log::log($metoda);

    if (class_exists($klasa) && method_exists($klasa,$metoda)){
        $instanca = new $klasa();
        $instanca->$metoda();
    }else {
        echo 'Ne postoji ' .$klasa .'-&gt' .$metoda;
    }
    }

}