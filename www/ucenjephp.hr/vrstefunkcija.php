<?php

$niz = [5,4,5,3,2,1];

#kreiranje funkcije 

function logiranje()
{
    echo '<pre>';
   #varijablaj iam prodručje djelovanja unutar funkcije. Stoga se u ovoj funkciji ne vidi varijabla $niz
    echo '</pre>';
}

logiranje(); # na ovaj način ćemo pozvati funkciju

#1. ne prima parametre, ne vraća vrijednost

function ispisiSifru()
{
    #ako želimo generirati šifru tipa A-Z 0-100 random
    $slova=[];
    for($i=65;$i<=90;$i++){
        $slova[]=chr($i); #chr ascii--> određene vrijednosti date za slova
    }
    $slova = array_merge($slova, ['Č','Ć','Ž','Š','Đ']);
    $slovo=$slova[rand(0,29)];
    $broj=rand(0,100);
    echo $slovo, $broj;

}

for($i=0;$i<10;$i++){
    echo ispisiSifru(), '<br />';
}

echo '<hr />';
#2. prima parametre ne vraća vrijednost

function logiranjeDobro($sto)
{
    echo '<pre>';
    print_r($sto);
    echo '</pre><hr />';
}
logiranjeDobro($niz);
logiranjeDobro($_GET);

function slucajniBroj($min=1,$max=10) #10 je opcionalni parametar, nije morao biti tu da bi funkcioniralo
{
    echo rand($min,$max);
}

slucajniBroj(); #ovdje odabiremo dodatne vrijednosti ako želimo suziti odabir,  a)ostaviti prazno i funkcija će raditi po gore zadanim parametrima
                    #b)staviti jedan c)staviti dva broja - i s njima dobiti granične vrijednosti
echo '<hr />';

#3. ne prima parametre, ne vraća vrijednost

function dovuciPodatkeGradova()
{
    return json_decode(file_get_contents( // vjerojatno neće raditi na hostingu od edunove
        'https://raw.githubusercontent.com/ndekic/popis_naselja_u_republici_hrvatskoj/master/json/popis_naselja_u_republici_hrvatskoj.json')
    );
}
function grad()
{
    $gradovi=dovuciPodatkeGradova();
    return $gradovi[rand(0,count($gradovi)-1)]->mjesto;
}

echo grad(), '<hr />';

#prima parametre, vraća vrijednost

function gradovi($brojGradova)
{
    $gradovi=dovuciPodatkeGradova();
    $vrati=[];
    while($brojGradova>0){
        $sb = rand(0,count($gradovi)-1);
        $vrati[]=$gradovi[$sb]->mjesto;
        array_slice($gradovi,$sb,1);
        $brojGradova--;
    }

    return $vrati;
}

foreach(gradovi(2) as $grad){
    echo $grad, '<br />';
}