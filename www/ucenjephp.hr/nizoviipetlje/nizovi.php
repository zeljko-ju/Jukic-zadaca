<?php
//nije dobra praksa
$t1=-2;
$t2=2;
//..
$t12=1;

#indeksni niz (niz koji ima index i vrijednost)
$temp=[]; //inicijalno deklariranje niza niz je array();
#index niza kreće od 0
$temp[0]=-2;
$temp[]=2; #kada se u [] ne stavi index računalo preuzme sljedeću slobodnu vrijednost i dodaje ju tom indexu (u ovom slučaju 1)

echo '<pre>';
print_r($temp);
echo '</pre>';
echo '<pre>';
var_dump($temp);
echo '</pre>';

echo $temp[0], '<hr />';


//istovremeno deklariranje i dodjeljivanje vrijednosti nizu

$temp = [1,2,1,2,5,2,4,6,7,6,11];
echo count($temp); #dobit ćemo broj dodjeljenih vrijednosti u nizu

//asocijativni nizovi (niz koji se sastoji od ključa i vrijednosti)

$niz = [];
$niz['sifra']=2;
$niz['naziv']= 'PHP programiranje';
$niz['cijena']=5999.99;
$niz['verificiran']=false;
echo '<pre>';
print_r($niz);
echo '</pre>';

#kraći način 

$niz=[
    'sifra'=>'2',
    'naziv'=>'PHP programiranje',
    'cijena'=>5999.99,
    'verificiran'=>true
];


$polaznik= [
    'sifra'=> 5,
    'Ime'=>'Slavko',
    'Prezime'=>'Slavkić',
    'grupa'=>'JP 26'
];

echo '<pre>';
print_r($niz);
echo '</pre>';


echo '<pre>';
print_r($polaznik);
echo '</pre>';


#combo index+ asocijativno - loš!
$combo = [
    2,
    'Osijek',
    'skola'=>'Edunova'
];
echo '<pre>';
print_r($combo);
echo '</pre>';

#combo dobra praksa
$combo= [
    ['sifra'=> 5,
'Ime'=>'Slavko',
'Prezime'=>'Slavkić',
'grupa'=>'JP 26'
],
[ 'sifra'=>'2',
'naziv'=>'PHP programiranje',
'cijena'=>5999.99,
'verificiran'=>true

]
];
echo '<pre>';
print_r($combo);
echo '</pre>';


echo $combo[1]['cijena'], '<br />';