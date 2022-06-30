<?php

#indexni nizovi

$temp=[]; #inicijalno deklariranje
$temp[0]=-2;
$temp[]=2; #index će biti 1, jer kad je prazna zagrada dodaje se sljedeća vrijednost od predhodne
$temp[11]= 1;

echo '<pre>';
print_r($temp);
echo '</pre>';

echo $temp[1], '<hr />';

#istovremeno više vrijednosti
$temp = [-7,1,5,8,7,6,5,-2,-1,1,4];
echo count($temp), '<hr />'; 
echo $temp[6], '<hr />';

#asocijativni niz
#ključ + vrijednost, što znači da moraš deklarirati  [], a onda dati vrijednost 

$niz = [];
    $niz['sifra']=2;
    $niz['naziv']='PiEhjčPi programiranje';
    $niz['cjena']=5999.99;

    echo '<pre>';
    print_r($niz);
    echo '</pre>';

#istovremeno deklariranje i dodjeljivanje vrijendosti i to za dva niza
$niz = [
    [
    'sifra'=>1,
    'naziv'=>'Php Programiranje',
    'cijena'=>5999.99

],
['sifra'=>1,
'naziv'=>'Php Programiranje',
'cijena'=>5999.99

]
];
echo '<pre>';
    print_r($niz);
    echo '</pre>';