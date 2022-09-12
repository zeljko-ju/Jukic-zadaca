<?php

//phpinfo();

//echo 'hello';

//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';
//echo $_SERVER['REDIRECT_PATH_INFO'];

session_start();

define('BP',__DIR__ . DIRECTORY_SEPARATOR);
define('BP_APP', BP . 'app' . DIRECTORY_SEPARATOR);
//echo BP, '<br />';
//echo BP_APP, '<br />';

$zaAutoload = [
    BP_APP . 'core',
    BP_APP . 'controller',
    BP_APP . 'model'
];

$putanje = implode(PATH_SEPARATOR,$zaAutoload);

set_include_path($putanje);

//echo $putanje , '<br />';

//https://www.php.net/manual/en/function.spl-autoload-register.php
spl_autoload_register(function($klasa){
   //echo 'U spl_autoload_register funkciji sam, tražim klasu ' . $klasa , '<br />'; 
   $putanje = explode(PATH_SEPARATOR,get_include_path());
    
    foreach($putanje as $p){
        //echo $p, '<br />';
        $datoteka = $p . DIRECTORY_SEPARATOR . $klasa . '.php';
        //echo $datoteka, '<br />';
        if(file_exists($datoteka)){
            require_once $datoteka;
            break;
        }
    }
});

App::start();


//require  BP_APP . 'controller/SmjerController.php';
//$c = new SmjerController(); //ovdje se okida poziv funkcija spl_autoload_register
//$c->index();
