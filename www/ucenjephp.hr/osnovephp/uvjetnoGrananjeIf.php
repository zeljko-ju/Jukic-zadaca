<?php

#if je binarno grananje, mora raditi na boolean
#primjer: pretpostavka je da korisnik unosi vrijednost 2
$i = 2;

$uvjet = $i > 0;

echo gettype($uvjet), '<hr />'; 

if($uvjet){
    echo"$i je veći od 0", '<hr />'; #ispisati će vrijendost varijable zbog dvostrukih navodnika
    echo '$i je veće od 0', '<hr />'; #ne ispisuje zbog jednostrukih navodnika
}
#u if grananje ulazi ako je istina a ako nije u else!!!
if($i<0){
    echo 'OK', '<hr />';

}else {
    echo 'nije ok', '<hr />';
}

$t=0;
if($i>2){
    $t=1;
}else{
    $t=33;
}

echo $t, '<hr />';

#treba izbjegavati praksu stavljanja vrijednosti bez {} kod će raditi ali neće biti pregledno

#ugnježđivanje if naredbe
$i=1;$j=2;
if($i==1) #opreator provjere jednakosti po vrijednosti
    if($j===2){ #=== operator provjere jednakosti po tipu i po vrijednosti
        echo 'Huraa!', '<hr />';
    }else{
        echo 'Bura!', '<hr />';
    }

#logički operatori and &, or(|) i not !
if($i===1 & $j===2){
    echo 'Bravo!', '<hr />';
}
#( | ili & )-provjeravaju se oba uvjeta i ( || ili &&)-u slučaju da prvi ne prođe drugi se ne provjerava 


#dva načina pisanja iste naredbe, dolje inline
if(isset($_GET['x'])){
    echo $_GET['x'];

}else{
    echo 2;
}

$x= isset($_GET['x'])?$_GET['x']: 2;