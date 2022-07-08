<?php

#switch je višestruko grananje i nije binaran, radi s bilo kojim tipom podatka

$grad = isset($_GET['grad'])?$_GET['grad']: '';
switch($grad){
    case 'Osijek':
        echo 'Najbolji grad';
        break;
    case 'Dubrovnik':
        echo 'Vlasi';
        break;
    case 'Zagreb':
    case 'Spolit':
        echo 'Preveliko';
        break;
    default:
    echo 'odaberi grad';
}