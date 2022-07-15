<?php

// u odnosu na primljenu brojčanu vrijednost ocjene
// ispisati naziv

$ocjena = isset($_GET['ocjena'])?$_GET['ocjena']: 6;
switch($ocjena){
    case 1:
        echo 'nedovoljan';
        break;
    case 2:
        echo 'dovoljan';
        break;
    case 3:
        echo 'dobar';
        break;
    case 4:
        echo 'vrlo dobar';
        break;
    case 5:
        echo 'odličan';
        break;
        default:
    echo 'Molim Vas odabrati vrijednost od 1 do 5';
}