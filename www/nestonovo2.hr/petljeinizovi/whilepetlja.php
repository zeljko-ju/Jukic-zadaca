<?php


$i=0;
$uvjet =$i<10;

while($uvjet){
    echo$i, '<br />';
    $uvjet=$i++;$i<10;
}

echo '<hr />';
$i=0;
while($i<10){
    echo $i++, '<br />';
}

$i=0;
while($i<0){
    //neće ući
}

