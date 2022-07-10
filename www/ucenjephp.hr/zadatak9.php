<?php

// Ispišite tablicu 3 x 3 na način
// da u ćelijama kuteva stavite znak X

// DZ: Napraviti da radi za bilo koja dva unesena broja
//     Putem GET metode

$x = isset($_GET['x']) ? $_GET['x'] :15;
$y = isset($_GET['y']) ? $_GET['y'] : 15;
$start=0;

echo '<table border="4" style="background-color:grey">';
for($i=0;$i<$x;$i++){
    echo '<tr>';
for($j=0;$j<$y;$j++){
    echo '<td>';
    if(
        ($i===0 && $j===0)
        ||
        ($i===0 && $j===$y-1)
        ||
        ($i===$x-1 && $j===0)
        ||
        ($i===$x-1 && $j===$y-1)
        ){
        echo $start++;
    }else{
        echo '&nbsp;';
        
    }echo '</td>';
}
echo '</tr>';
}
echo '</table>';

/*
$x = isset($_GET['x']) ? $_GET['x'] :;
$y = isset($_GET['y']) ? $_GET['y'] : 5;
$start=1;
echo '<table border="4" style="background-color:grey">';
for($i=0;$i<$x;$i++){
    echo '<tr>';
for($j=0;$j<$y;$j++){
    echo '<td>';
    while(
        
        (($i===$x-1 && $j===$y-1) < ($i===$x-1 &&$j===0))
        
        
        ){
        echo $start++, '<br />';
    
    }else{
        echo '&nbsp;';
    }
    
    
    '</td>';
}
echo '</tr>';
}
echo '</table>';
*/


echo '<table border="4" style="background-color:grey">';
for($i=0;$i<$x;$i++){
    echo '<tr>';
for($j=0;$j<$y;$j++){
    echo '<td>';
    for()
     '</td>';
}
echo '</tr>';
}
echo '</table>';


while($i===$x-1){
    while($j===$y-1){
        if($i===$x-1 && $j===0){
            break 2;
        }
    }
}
