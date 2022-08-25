<?php

//kad je funkcija organizirana u klasi zovemo ju metoda
/*
class Osoba
{
    public function generirajSifru()
    {
        $s='';
        for($i=0;$i<8;$i++){
            $s.=chr(rand(20,130)); //brojevi ovdje su izvučeni iz ascii tablice
        }
        return $s;
    }
}
$o = new Osoba();
echo $o->generirajSifru();

***ova klasa nema svojstva, svojstva služe da bi se vrijednost mogla zapamtiti

*/
class Osoba
{
    public $sifra;
    public static function generirajSifru()
    {
        $s='';
        for($i=0;$i<8;$i++){
            $s.=chr(rand(20,130)); //brojevi ovdje su izvučeni iz ascii tablice
        }
        return $s;
    }
}
$o = new Osoba();
// da bi pozvao metodu generiraj sifru morao sam napraviti instancu klase
$o->sifra = $o->generirajSifru();// nije dobra praksa
echo $o->sifra;

//i objekt je varijabla!

echo '<hr />';

echo osoba::generirajSifru(); // naziv za :: paamayim nekudotayim-- na klasi poziva statičnu metodu (u metodu dodajemo static)