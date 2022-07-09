<?php

$niz= [3,2,5,7,1,3,5,7,4];

echo '<pre>';
print_r($niz);
echo '</pre>';

//promjena
$niz[4]='peti';
echo '<pre>';
print_r($niz);
echo '</pre>';

#brisanje elementa + niza unset
unset($niz[4]);
echo '<pre>';
print_r($niz);
echo '</pre>';

#renumeriranje array_splice
array_splice($niz,5,7);
echo '<pre>';
print_r($niz);
echo '</pre>';

sort($niz); #sortira po vrijednosti od najmanjeg prema većem
echo '<pre>';
print_r($niz);
echo '</pre>';

$niz = [
    'sifra'=>2,
    'naziv'=>'PHP programiranje',
    'cijena'=>5999.99,
    'verificiran'=>false
];
echo '<pre>';
print_r($niz);
echo '</pre>';
echo $niz['naziv'], '<hr />';

$o =(object) $niz;
echo '<pre>';
print_r($o);
echo '</pre>';
echo $o->naziv, '<hr />';


