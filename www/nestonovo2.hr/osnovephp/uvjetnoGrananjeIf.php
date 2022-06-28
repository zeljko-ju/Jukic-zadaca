<?php

#if je binarno grananje
$i=1; $j=2; $x=1;
$uvjet = $i > 0;

echo gettype($uvjet), '<hr />'; #znači sa uvjetom smo dobili uvjet za if (boolean je binaran).

if($uvjet) {
    echo "$i je veći od 0", '<hr />'; #koristiti dvostruke navodnike
}

if($i > 2) {
    echo "OK",'<hr />'; 
}else{
    echo "neće ići", '<hr />'; 
}

$t=0;
if($i>2){
    $t=1;
}else if($i<-2){
    $t=2;
}else{
    $t=3;
}
echo $t, '<hr />'; 

# === je operator provjere jednakosti po tipu i po vrijednosti



#logički operatori and(&) or(|) not(!)
if($i===3 & $j===2){
    echo 'Letak',  '<hr />';
}else{
    echo 'Petak', '<hr />';
}

// razlika između & i &&
// & provjeravaju se oba uvjeta
// && u slučaju da prvi uvjet ne prođe ne provjerava se drugi


// razlika između | i ||
// | provjeravaju se oba uvjeta
// || u slučaju da prvi uvjet prođe ne provjerava se drugi

if(isset($_GET['x'])){
    $x=$_GET['x'];
}else{
    $x=2;
}

$x = isset($_GET['x']) ? $_GET['x'] : 2; #upitnik bi ovdje simulirao početak else, ako se ne varam