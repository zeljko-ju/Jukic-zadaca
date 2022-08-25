<?php
//construct () metoda koja se poziva prilikom konstruiranja objekta (služi za konstruiranje potrebnih zavisnosti) vrlo korisno kod baza
class Skola
{   private $podaci;

    public function __construct()
    {
        echo 'pozvan konstruktor <hr />';
        $this->podaci=[];
    }
    public function __set($svojstvo,$vrijednost)
    {
        $this->podaci[$svojstvo]=$vrijednost;
        echo 'Postavljam ' . $svojstvo. '='. $vrijednost;
    }
    public function __get($svojstvo)
    { echo 'dohvaćaš' . $svojstvo . '<hr />';
        return isset($this->podaci[$svojstvo]) ? 
        $this->podaci[$svojstvo] : '';
        
    }
    public function imePrezime()
    {
        return (isset($this->podaci['ime']) ? 
        $this->podaci['ime'] : '') 
        . ' ' . 
        (isset($this->podaci['prezime']) ? 
        $this->podaci['prezime'] : '');
    }
    public function __toString()
    {
        return 'fiksno ispisano ali dođe ono što želim da mi predstavlja podatke objekta';
    }

    
   
}
//new je poziv kostruktora koji se implemetira  sve magične metode kreću sa __
$s = new Skola();


//poziv magične metode __set
$s ->ime='Edunova';

//poziv magične metode __ get
echo $s->ime;

echo '<hr />';
$s->prezime='Škola';
echo $s->imePrezime();
//poziv magične metode __toString
echo $s;