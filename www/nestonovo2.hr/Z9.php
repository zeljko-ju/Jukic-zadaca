<?php
echo '<table border="1">';
for($i=0;$i<3;$i++){
    echo '<tr>';
    for($j=0;$j<3;$j++){
        echo '<td>';
        if(
        ($i===0 && $j===0)
        ||
        ($i===0 && $j===2)
        ||
        ($i===2 && $j===0)
        ||
        ($i===2 && $j===2)
        ){
            echo 'X';
        }else{
            echo '&nbsp;';
        }
        '</td>';
    }
    echo '<tr>';
}
echo '</table>';


echo '<hr />';
# V2- pokušaj istog sa gET parametrima

$x = isset($_GET['x']) ? $_GET['x'] : 13;
$y = isset($_GET['y']) ? $_GET['y'] : 13;
$min = 0;


echo '<table border="1">';
for($i=$min;$i<$x;$i++){
    echo '<tr>';
    for($j=$min;$j<$y;$j++){
        echo '<td>';if(
            ($i===0 && $j===0)
            ||
            ($i===0 && $j===$y-1)
            ||
            ($i===$x-1 && $j===0)
            ||
            ($i===$x-1 && $j===$y-1)
            )
      {
            echo 'X';
        }else{
            echo '&nbsp;';
        }
        '</td>';
    }
    echo '<tr>';
}
echo '</table>';


echo '<hr />';

