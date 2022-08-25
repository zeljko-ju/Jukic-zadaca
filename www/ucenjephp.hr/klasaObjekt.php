<?php

$ime='Pero';
$prezime='Perić';

$osoba = [
    'ime'=>'Pero',
    'prezime'=>'Perić'
]; // možemo odraditi na ovaj način preko array ali to nije najbolja praksa, OOP nam daje puno veće mogućnosti za kasnije( u array ne možemo ubacivati nikakav algoritam)

class Osoba //klasa je opisnik objekta!!!
{
    public $ime; //objekt --- instanca(pojavnost) klase
    public $prezime; //objekt --- instanca(pojavnost) klase
}
//new je konstuiranje objekta
$voditelj = new Osoba;

$voditelj->ime='Pero';
echo gettype($voditelj) . ': ' . $voditelj->ime . '<hr />';
var_dump($voditelj) . '<hr />';
echo $voditelj->ime . '<hr />';

$niz = (array) $voditelj;
echo '<pre>';
var_dump($niz);
echo '</pre>';


$voditelj = new stdClass();
$voditelj->ime='Pero';

echo gettype($voditelj) . ': ' . $voditelj->ime . '<hr />';
var_dump($voditelj) . '<hr />';
echo $voditelj->ime . '<hr />';

echo '<pre>';
var_dump($niz);
echo '</pre>';


$niz = (array) $voditelj;
$objekt = (object) $niz;
echo '<pre>';
var_dump($objekt); // kad objekt prebacimo u niz dobijemo instancu STD class
echo '</pre>';

$polaznik = new stdClass(); // koristiti ćemo ovo, bolja je praksa od primjera gore
$polaznik->ime='Jozo';
$polaznik->prezime='Jozić';
echo $polaznik->ime . ' '.  $polaznik->prezime;

echo '<pre>';
var_dump($niz);
echo '</pre>';

//svaki array možemo prebaciti u array i obratno, kad prebacujemo iz objekta u array dobit ćemo asocijativni niz


