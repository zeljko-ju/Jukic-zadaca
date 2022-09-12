<?php

class DB extends PDO 
{
    private static $instanca=null;
    private function __construct()
    {
        extract(App::config('baza'));
        $dsn='mysql:host=' $sever . ';dbname=' . $baza . 
        ';charset=utf8';

        parent::construct($dsn,$korisnik,$lozinka);
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    }


    public static function getInstance()
    {

        if(self::$instanca==null)
        {
            self::$instanca=new self();
        }
        return self::$instanca;
    }
}