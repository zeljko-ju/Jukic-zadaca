<?php
#osnovni operatori
$j=3; $i=1;
$rez = $i + $j;
echo $rez, '<hr />';

#modulo operator % - daje nam razliku od podjeljene vrijednosti
$rez = 7 % 2;

echo $rez, '<hr />';

#sporiji način
$suma = 0;
$suma = $suma + 2;
echo $suma, '<hr />';
#brži način
$suma = 44;
$suma += 2;
echo $suma, '<hr />';

#uvećanje za 1
$i = 99;

$i++;
echo $i, '<hr />';

#korištenje, uvećanje i umanjenje varijable
$i = 1;
echo $i++, '<hr />'; #ispisao je 1 zato što u echo gleda redosljed, po tome je 1 prvi a onda tek ++(+1)
echo ++$i, '<hr />'; #ispisao je 3 jer je uzeo vrijednost od gornjeg zbroja i dodao zbroj u ovoj naredbi
##umanjenje (ista pravila)
$j = 5;
echo $j--, '<hr />';
 echo --$j, '<hr />';


 #provjera
 $i = 5; $j = 1;
 $k =$i + $j;
 $i -= --$k - $j;
 echo $i + $j +$k, '<hr />';

$x=2; $y=(-1);
$k= $x+$y;
$y += $k+ ++$x;
echo $x + $y + $k, '<hr />';


 $i = 5; $j = 1;
 $k =$i + $j;
 $i -= --$k - $j;
 echo $i + $j +$k, '<hr />';

 $x=4; $y=5;
 $k= $x + ++$y;
 $y += --$x + ++$k;
 echo $y+$x+$k, '<hr />';


 $x=2; $y=2;
 $k= $x+$y;
 $y += --$x + ++$k;
 echo $y+$x+$k, '<hr />';

 $x=3; $y=2;
 $k= ++$x+ ++$y;
 $x += $k + ++$y;
 $y -= $k - $x;
 echo $y+$x+$k, '<hr />';

 $x=1; $y=1;
 $k= $x + $y; //k=2
 $y += ++$x; // 
 $x += ++$y; //2+ 2
 echo $y+$x+$k, '<hr />';


