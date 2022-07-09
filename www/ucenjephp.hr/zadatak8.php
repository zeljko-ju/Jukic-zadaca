<?php

// Ispišite sve parne brojeve između
// dva primljena broja putem GET metode
// ulaz ?x=26&y=3
// ulaz ?x=3&y=26
// izlaz mora biti


$x = isset($_GET['x'])? $_GET['x'] : '290';
$y = isset($_GET['y'])? $_GET['y'] : '266';
#lošiji način
for($i=$x;$i<$y;$i++){
    if($i%2===0){
        echo $i;
    }
}
for($i=$y;$i<$x;$i++){
    if($i%2===0){
        echo $i;
    }
}
echo '<hr />';

#sve u istoj petlji
$x = isset($_GET['x'])? $_GET['x'] : '290';
$y = isset($_GET['y'])? $_GET['y'] : '266';

#ako je?tada je: a inače je
$min= $x<=$y?x:$y;
$max=$x>=$y?$x:$y;

for($i=$min;$i<=$max;$i++){
    if($i%2!==0){
        continue;
    }echo $i, '<br />';
}

$min=$x<=$y?$x:$y;
$max=$x>=$y?$x:$y;
echo '<hr />';
for($i=$min;$i<=$max;$i++){
    if($i%2===0){
        continue;
    }echo $i, '<br />';
}