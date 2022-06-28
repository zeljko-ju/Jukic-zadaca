<?php


$p1 = isset($_GET['p1']) ? $_GET['p1'] : 2;
$p2 = isset($_GET['p2']) ? $_GET['p2'] : 2;
$p3 = isset($_GET['p3']) ? $_GET['p3'] : 1;
$p4 = isset($_GET['p4']) ? $_GET['p4'] : 3;


$rez1 = (($p1+$p2)*($p3+$p4));
echo "$rez1";


$rez2 =($p3 + $p4);

$rez = ($rez1 * $rez2);

