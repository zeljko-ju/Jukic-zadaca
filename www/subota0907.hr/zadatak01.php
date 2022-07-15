<?php

// Program prima parametar x
// ako je vrijednost cijeli broj ispisuje ga
// inače ispisuje poruku da mora biti cijeli broj

$x= isset($_GET['x'])?$_GET['x']:'55';
$intX= (int)$x;

if($intX!==0){
    echo $intX;
}else{
    echo 'mora biti cijeli broj';
}