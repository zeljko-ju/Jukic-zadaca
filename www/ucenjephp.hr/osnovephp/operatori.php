<?php
$i=2; $j=1;
$rez=$i + $j;
echo $rez, '<hr />';

//modulo operator- razlika od dva podjeljena broja(kod parnih uvijek 0)

$rez= 9%2;
echo $rez , '<hr />';
#duži način
$suma=0;
$suma = $suma + 2;
echo $suma, '<hr />';
#kraći način
$suma += 2;
echo $suma, '<hr />';

#uvećanje/umanjenje za 1
$i=0;
echo $i, '<hr />';
$i=$i+1;
$i+=1;
$i++;
echo $i, '<hr />';

#korištenje: uvećanje/umanjenje varijable (redosljed)
$i=1;
echo $i++, '<hr />';#prvo koristi pa uveća (u memoriji je 2, ali prikazuje 1 zbog redosljeda)
echo ++$i, '<hr />';#prvo uveća pa koristi(prikazuje 3)


#tipski zadatak:
$i=2; $j=3;
$k=$i++ + $j; #i=3 + j=3 = k=6
$j+=++$j; 
echo $i+$j+$k; #=16