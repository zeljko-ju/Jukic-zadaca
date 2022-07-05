<?php

// Ispišite sve parne brojeve od 1 do 21

for($i=0;$i<20;$i++){
    echo 2+$i++, '<br />';
}

#neparni
for($i=0;$i<20;$i++){
    echo 1+ $i++, '<br />';
}

#drugi način 
for($i=0;$i<=21;$i++){
    if($i%2===0){
        echo $i, '<br />';
    }
}

