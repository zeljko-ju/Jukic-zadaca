<?php

class Smjer
{   //CRUD
    public static function read()
    {
        $veza = DB::getInstance();
        $izraz=$veza->prepare(
            '
            select * from smjer
            ');
            $izraz->execute(); //obavezna stavka
            return $izraz ->fetchAll();

    }
    public static function create()
    {
        
    }
    public static function update()
    {
        
    }
    public static function delete()
    {
        
    }
}