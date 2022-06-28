<?php


$p1 = isset($_GET['p1']) ? $_GET['p1'] : 7;
$p2 = isset($_GET['p2']) ? $_GET['p2'] : 7;
$p3 = isset($_GET['p3']) ? $_GET['p3'] : 2;


if($p1>$p2 && $p1>$p3){
    echo $p1;
}
else if($p2>$p1 && $p2>$p3){
    echo $p2;
}
else  if($p3>$p1 && $p3>$p2){
    echo $p3, '<hr />';
}
else if($p2=$p1 && $p2=$p3){
    echo $p2;
}


