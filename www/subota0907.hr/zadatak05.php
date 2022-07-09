<?php

//program ispisuje zbroj svih vrijednosti primljenih GET parametara
$suma=0;
foreach($_GET as $value){
    
    $value=(int)$value;
    echo $value, '<br />';
    $suma+=$value;

    echo $suma;

}echo $suma, '<hr />';


//ispisati umnožak
$umnozak=1;
foreach($_GET as $value){
    
    $value=(int)$value;
    echo $value, '<br />';
    if($vrijednost==='0'){
        $umnozak = 0;
        break;
    }
    $value = (int($value);
    if($value===0){
        continue;
    })
   
    $umnozak*=$value;

    echo $umnozak;

}echo $umnozak, '<hr />';
