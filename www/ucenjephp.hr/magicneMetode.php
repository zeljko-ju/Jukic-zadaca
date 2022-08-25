<?php
//construct () metoda koja se poziva prilikom konstruiranja objekta (služi za konstruiranje potrebnih zavisnosti) vrlo korisno kod baza
class Skola
{
    public function __construct()
    {
        echo 'pozvan konstruktor <hr />';
    }
    public function __set($svojstvo,$vrijednost)
    {
        echo 'Postavljam ' . $svojstvo. '='. $vrijednost . '<hr />';
    }
    public function __get($svojstvo)
    {
        echo 'dohvaćaš' . $svojstvo . '<hr />';
    }
}
//new je poziv kostruktora koji se implemetira  sve magične metode kreću sa __
$s = new Skola();


//poziv magične metode __set
$s ->ime='Edunova';

//poziv magične metode __ get
echo $s->ime;