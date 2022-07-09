<?php

#5 puta ispisano alo ba (1.loš način )(2.dobar način)
#1.
echo 'Alo ba!', '<br />';
echo 'Alo ba!', '<br />';
echo 'Alo ba!', '<br />';
echo 'Alo ba!', '<br />';
echo 'Alo ba!', '<br />';
echo '<hr />';

#sintaksa for petlje: (od kuda; do kuda; uvećanje/umanjenje)

for($i=0;$i<=4;$i++){
    echo 'Alo ba!', '<br />';
}

#for MORA imati varijablu koja mijenja vrijednost!!!

for($i=0;$i<25;$i++){
    echo $i+1, '<br />';
}
echo '<hr />';
for($i=70;$i>0;$i-=10){
    echo $i, '<br />';
}

echo '<hr />';

echo '<table border="10" style="background-color:grey">';
for($i=1;$i<=10;$i++){
    echo '<tr>';
    for($j=1;$j<=10;$j++){
        echo '<td>', $i++, '</td>';
    }
    echo '</tr>';
}

echo'</table>';

echo '<hr />';
#petlja se može preskočiti/nastaviti koju smo joj zadali ali će nastaviti sa ostalim operacijama
#1. sa continue će petlja preskočiti vriednost 
for($i=0;$i<10;$i++){
    if($i===2){
        continue;
    }echo $i, '<br />';
}

echo '<hr />';
#2. break-petlja staje kod zadane vrijednosti
for($i=0;$i<10;$i++){
    if($i===5){
        break;
    }echo $i;
}
echo '<hr />';

// u for se ne mora ući
$i=10; //ovo je unio čovjek
for($t=$i;$t<5;$t++){
    echo $t;}


$s=1; #parne ili neparne brojeve možemo dobiti promjenom vrijednosti $s
for($i=1;$i<=100;$i++){
    echo $i+=$s, '<br />';
}

for($i=2, $s=0;$i<=100;$i++){
    echo $i++;
}

