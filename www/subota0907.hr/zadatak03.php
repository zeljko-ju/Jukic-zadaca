<?php


//u odnosu na primljenu brojčanu vrijednost ocijene ispisati naziv

$ocjena = isset($_GET['ocjena'])? $_GET['ocjena'] : 0;

$ocjena = (int)$ocjena;
if($ocjena===0){
    echo 'mora biti broj', '<br />';
}else{
    switch($ocjena){
        case 1:
            echo 'Nedovoljan', '<br />';
            break;
        case 2:
            echo 'Dovoljan', '<br />';
            break;
        case 3:
            echo 'Dobar', '<br />';
            break;
        case 4:
            echo 'Vrlo dobar', '<br />';
            break;
        case 5: 
            echo 'Odličan', '<br />';
            break;
        default:
            echo 'nije ocjena', '<br />';
    }
}