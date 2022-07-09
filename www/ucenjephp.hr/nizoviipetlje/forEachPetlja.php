<?php

#specijalizirana za rad sa array
#indeksni -postoji for petlja

$niz= [2,5,4,7,3,1,4,2];

foreach($niz as $value){
    echo $value, '<br />';
}
echo '<hr />';

#asocijativni niz
$niz=[
    'sifra'=>1,
    'Ime'=>'Pero'
];

foreach($niz as $key => $value){
    echo $key, ':', $value, '<br />';
}
#bez pristupa ključu/može i obratno, bez vrijednosti
echo '<hr />';
foreach($niz as $value){
    echo $value, '<br />';
}

#sva ostala pravila za ostale petlje vrijede i ovdje, beskonačne foreach petlje nema