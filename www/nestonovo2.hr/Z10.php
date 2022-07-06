<?php

// Ispišite sve vrijednosti $_SERVER niza
// jedno pokraj drugoga

foreach($_SERVER as $key => $value){
    echo $value, ': ', '<br />';
}