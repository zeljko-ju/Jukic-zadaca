<?php 

$niz = [2,2,4,6,7,4,33,2,6,43,12,2];

echo '<pre>';
print_r($niz);
echo '</pre>';

echo $niz[0], '<br />';

#zamjena
$niz[0]=6;
echo '<pre>';
print_r($niz);
echo '</pre>';


#brisanje elementa zajedno sa indexom 
unset($niz[0]);
echo '<pre>';
print_r($niz);
echo '</pre>';


# renumeriranje indexa
#array_splice($niz,1,8);
sort($niz); #po vrijednostima sortira prema najmanjem ka najvećem
echo '<pre>';
print_r($niz);
echo '</pre>';

$niz = [
    'sifra'=>1,
    'naziv'=>'Edustara',
    'Cijena'=>5999.99,
    'verificiran'=>false
];
echo '<pre>';
print_r($niz);
echo '</pre>';
echo $niz['naziv'], '<hr />';

$o = (object) $niz;
echo '<pre>';
print_r($o);
echo '</pre>';

echo $o->naziv, '<hr />';
