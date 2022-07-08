<?php

//input
// GET parametar x i y
$x = isset($_GET['x']) ? $_GET['x'] : 1;
$y = isset($_GET['y']) ? $_GET['y'] : 0;

#obrada
$rez= $x + $y;
$rez *=50;
$rez = $rez + 15;

#izlaz
echo $rez;

echo '<hr />';

$x = isset($_GET['x']) ? $_GET['x'] : 1;
$y = isset($_GET['y']) ? $_GET['y'] : 0;
$z = isset($_GET['z']) ? $_GET['z'] : 0;


#obrada 
$k=$x+$y;
$x+=$z+$y;

#izlaz
echo $x+$k+$z+$y;