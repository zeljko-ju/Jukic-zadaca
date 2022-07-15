<?php

// napisati funckciju koja ne prima parametre
// i ne vraća vrijednost te 
// koja ispisuje sve parne brojeve
// od 2 do 85,
// pozvati tu funkciju

function parniBrojevi()
{
    for($i=2;$i<=85;$i++){
        if($i%2===0){
            echo $i, '<br />';
        }
    }
}

parniBrojevi();


// napisati funkciju koja prima parametar i ne 
// vraća vrijednost
// fukncija prima indeksni niz brojeva
// i ispisuje zbroj svih brojeva u primljenom nizu
// Deklarirati niz, pozvati funkciju

echo '<hr />';

$niz=[6,4,2,5,1,5,6,3,12,2];

function zbroj($niz)
{
    $sum =0;
    foreach($niz as $vrijednost){
    $sum +=$vrijednost;
}
echo $sum;
}

zbroj($niz);
