<?php
#nije dobra praksa
echo 'Hello', '<br />';
echo 'Hello', '<br />';
echo 'Hello', '<br />';
echo 'Hello', '<br />';
echo 'Hello', '<br />';



echo '<hr />';

#sintaksa for(od kuda; do kuda; uvećanje/umanjenje)

for ($i=0;$i<5;$i++){
    echo 'Hello', '<br />';
}

echo '<hr />';

#for petlja mora imati varijablu koja mijenja vrijednost
for($i=0;$i<25;$i++){
    echo $i+1, '<br />'; #+1 je dodano da ne kreće od 0
}

echo '<hr />';
for($i=100;$i>0; $i-=7){
    echo $i, '<br />';
}

echo '<hr />';

$sum=0;
for($i=1;$i<=100;$i++){
    $sum+=$i;
}
echo $sum, '<br />';

echo '<hr />';

echo '<table style="border-style:solid">';
for($i=1;$i<=10;$i++){
    echo '<tr>';
    for($j=1;$j<=10;$j++){
        echo '<td>', $i*$j, '</td>';
    }
    echo '<tr>';
}
echo '</table>';

//petlja se može preskočiti
for($i=0;$i<10;$i++){
    if($i===2){
        continue;
    }
    echo $i, '<br />';
}
echo '<hr />';

for($i=1;$i<1000;$i++){
    if($i===6){
        break;
    }echo $i, '<br />';
}
echo '<hr />';
//rad s nizovima
//radi sa indeksnim nizom
$niz= [2,5,'Kemijska', false,2.99];


for($i=2;$i<count($niz);$i++){
    echo $niz[$i], '<br />';
}
echo '<hr />';

#beskonačna petlja ako se desi da ugasi apache
for(;;){
    echo 2;
    break;
}
echo '<hr />';
#u for se ne mora ući! ne mora se izvesti ni jednom.
$i=10; //unio korisnik
for($t=$i;$t<5;$t++){ #uvjet kaže da će se operacija izvoditi samo za brojeve manje od 5(znači petlja se ne izvodi)
    echo $t, '<br />';
}

