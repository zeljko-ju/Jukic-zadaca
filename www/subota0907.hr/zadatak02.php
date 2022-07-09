<?php

$x = isset($_GET['x']) ? $_GET['x'] : 0;

$y = isset($_GET['y']) ? $_GET['y'] : 0;

echo $x. ', '. $y, '<br />' ;

/* 
Primljeni parametar GET metode naziv ispisati crvenom bojom
*/
$var=isset($_GET['naziv'])? $_GET['naziv']: 'nije postavljena';
echo '<span style="color:red;">', $var, '</span>','<br />';


$x = isset($_GET['x']) ? (int)$_GET['x'] : 3;
$y = isset($_GET['y']) ? (int)$_GET['y'] : 3;
$y=(int)$y;
echo gettype($y);
echo $r= $x+ $y, '<br />';
echo $r*=2, '<br />';

//program prima parametar x ako je vrijednost cijeli broj ispisuje ga inače ispisuje poruku da mora biti cijeli broj

$stringX = isset($_GET['x']) ? (int)$_GET['x'] : 'bla';
$intX = (int)$stringX;

if($intX !== 0){
    echo $intX , '<br />';
}else{
   echo 'mora biti cijeli broj', '<br />';
} 