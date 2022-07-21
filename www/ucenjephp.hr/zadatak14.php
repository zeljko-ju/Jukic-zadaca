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


$niz= [2,5,4,7,5,11,7,8];
function zbroj($niz):int|float
{
    $suma=0;
    foreach($niz as $vrijednost){
        $suma+=$vrijednost;
    }    echo $suma;

}
echo zbroj($niz);
