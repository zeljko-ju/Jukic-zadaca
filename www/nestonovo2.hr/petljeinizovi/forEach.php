<?php

$niz = [2,5,3,1,2,6,7,6,54,4];

foreach($niz as $e){
    echo $e. '<br />';
}

echo '<hr />';

$niz = [
    'sifra'=>1,
    'naziv'=>'PHP'
];

foreach($niz as $key => $value){
    echo $key, ' :', $value '<br />';
}