<?php

// Putem GET metode stranica prima 
// parametre koji su brojevi
// ispišite najveći primljeni broj

// ?x=3&y=4&z=1
// 4

// ?x=-3&y=-4&z=-1&k=-8&l=-6
// 8
// https://www.php.net/manual/en/reserved.constants.php
$najveci = PHP_INT_MIN; #koristili smo predefiniranu konstantu
foreach($_GET as $v){
    if($v>$najveci){
        $najveci=$v;
    }
}echo $najveci;