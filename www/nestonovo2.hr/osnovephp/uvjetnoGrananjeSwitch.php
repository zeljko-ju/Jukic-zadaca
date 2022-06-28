<?php

$rijeka='Sava';

switch($rijeka){
    case 'Sava':
        echo 'teče tiho';
        break;
    case 'Drava':
        echo 'brzo ide';
        break;
    case 'Dunav':
    case 'Nill':
        echo 'poje pola svijeta';
    default:
    echo 'ne teče';
}

$grad='Osijek';

switch($grad){
    case 'Osijek':
        echo 'Najbolji grad';
        break;
    case 'Donji Miholjac':
        echo 'Tamo se okreće lova';
        break;
    case 'Zagreb':
    case 'Split':
        echo 'Preveliko';
        break;
    default:
        echo 'Nepoznato';
}