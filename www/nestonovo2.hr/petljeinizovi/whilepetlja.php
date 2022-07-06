<?php
#radi sa booleanom
$i=0;
$uvjet = $i<10;

while($uvjet){
    echo $i, '<br />';
    $uvjet =++$i<10;
}

#jednostavnije
$i=0;
while($i<10){
    echo $i++, '<br />';
}
echo '<hr />';
#prekidanje ugnježđene petlje
$i=3;$j=3;
while($i<10){
    while($j<10){
        if($i===0){
            break 2;
        }
    }
}

#u while petlju se ne mora ući
$i=0;
while($i<0){

}#neće ući u petlju jer nije ispunjen uvjet

//beskonačna petlja
while(true){
    break;
}
