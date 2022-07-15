<?php


$boja=isset($_GET['boja'])?$_GET['boja']:'hallo';
echo '<span style="color: red;">', $boja;

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