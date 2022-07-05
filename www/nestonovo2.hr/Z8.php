<?php
// Ispišite sve parne brojeve između
// dva primljena broja putem GET metode

/*
$x = isset($_GET['x']) ? $_GET['x'] : 110; 
$y = isset($_GET['y']) ? $_GET['y'] : 30; 

for($i=$x;$i<$y;$i++){
    if($i%2===0){
        echo $i, '<br />';
    }
}
for($i=$y;$i<$x;$i++){
    if($i%2===0){
        echo $i, '<br />';
    }
}

$x = isset($_GET['x']) ? $_GET['x'] : 3; 
$y = isset($_GET['y']) ? $_GET['y'] : 30; 
#drugi način 
for($i=$x;$i<$y;$i++){
    if($i%2!==0){
        continue;
    }
    echo $i, '<br />';
}
*/
#bolji način za obje situacije (x>y ili X<Y)
#stvori si min i max varijable
$x = isset($_GET['x']) ? $_GET['x'] : 39; 
$y = isset($_GET['y']) ? $_GET['y'] : 30; 
$min = $x<=$y ? $x : $y; #ako je?tada je: a inače je
$max = $x>=$y ? $x :$y; #ako je?tada je: a inače je

for($i=$min;$i<$max;$i++){
    if($i%2!==0){
        continue;
    }
    echo $i, '<br />';
}
