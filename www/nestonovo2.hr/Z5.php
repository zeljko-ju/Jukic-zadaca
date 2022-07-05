<?php

$x = isset($_GET['x']) ? $_GET['x'] : 2; 
$y = isset($_GET['y']) ? $_GET['y'] : 5; 
$z = isset($_GET['z']) ? $_GET['z'] : 504; 

if($x > $y && $x > $z ){
    echo $x;
}else if($y > $x && $y > $z) {
    echo $y;

}else {
    echo $z;
}