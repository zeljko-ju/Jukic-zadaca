<?php

$najveci = PHP_INT_MIN ;
foreach($_GET as $v){
    if($v>$najveci){
        $najveci=$v;
    }
}echo $najveci;