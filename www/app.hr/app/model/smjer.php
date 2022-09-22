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
    public static function create($smjer)
    {
        $veza = DB::getInstance();
        $izraz= $veza->prepare('
        insert into 
    smjer(sifra,naziv,cijena,trajanje,
    upisnina,certificiran)
    values (null,:naziv,:cijena,:trajanje,
    :upisnina,:certificiran);
        
        ');
    }
    public static function update()
    {
        $veza = DB::getInstance();
        $izraz= $veza->prepare('
         update smjer set
         naziv=:naziv, 
         cijena=:cijena,
         trajanje=:trajanje,
         upisnina=:upisnina,
         certificiran=:certiiciran
         where sifra=:sifra
        
        ');  
    }

    select count(*) from grupa where smjer=:stream_filter_append

    $izraz->ecevute ([
        'sifra=>$sifra
        '
    ]);
    public static function delete($sifra)
    {
        $veza = DB::getInstance();
        $izraz= $veza->prepare('
         
         delete from smjer where sifra=:sifra
        
        ');  
        izraz->execute
    }
}