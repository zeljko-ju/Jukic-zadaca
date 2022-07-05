<?php
$najveci = 0;
foreach($_GET as $b){
    if($b>$najveci){
        $najveci=$b;
    }
}
echo $najveci;
