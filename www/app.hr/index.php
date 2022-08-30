<?php

//echo 'hello!';

//echo '<pre>';
//print_r($_SERVER);
//echo '</pre>';

define('BP',__DIR__ . DIRECTORY_SEPARATOR);
define('BP_APP', BP . 'app' . DIRECTORY_SEPARATOR);
//echo BP, '<br />';
//echo BP_APP, '<br />';


$zaAutoLoad = [
    BP_APP .'controller',
    BP_APP .'model',
    BP_APP .'core' 
];
$putanje = implode(PATH_SEPARATOR,$zaAutoLoad);

set_include_path($putanje);

//echo $putanje, '<br />';
spl_autoload_register(function($klasa){
    //echo 'U funkciji spl_autoload_register sam' . $klasa . '<br />';
    $putanje = explode(PATH_SEPARATOR,get_include_path());
    foreach($putanje as $p){
       // echo $p, '<br />';
       $datoteka = $p . DIRECTORY_SEPARATOR . $klasa . '.php';
       //echo $datoteka . '<br />';
       if(file_exists($datoteka)){
        require_once $datoteka;
        break;
       }
    }
});
//require BP_APP . 'controller/SmjerController.php';
//$c = new SmjerController();
//$c->index();

App::start();