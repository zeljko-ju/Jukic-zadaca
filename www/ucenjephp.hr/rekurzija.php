<?php

// Rekurzija-stanje gdje funkcija zove samu sebe-uz uvjet prekida rekurzije


/* rekurzija- (funkcija zove samu sebe, ali nema uvjeta kojim bi ju prekinulo, to će izazvati stackoverflow error

function rekurzija()
{
    rekurzija();
}


rekurzija();
primjer koji dovodi do stack overflowa



#zbroj prvih 100 brojeva sa petljama

$suma=0;
for($i=1;$i<=100;$i++){
    $suma+=$i;
}
echo $suma;

echo '<hr />';

#zbroj prvih 100 brojeva sa rekurzijom

function zbroj($broj)
{
    if($broj===1){
        return 1;
    }
    return $broj + zbroj($broj-1);
}

echo zbroj(100), '<hr />';

#primjer rekurzije koju nije moguće realizirati sa petljama

require_once 'vrsteFunkcija.php';

function suma($var, $suma=0)
{
    if(gettype($var)==='integer'){
        return $var;
    }
$suma=0;
foreach($var as $e){
    $suma += suma($e, $suma);
}
return $suma;
}

$niz = 
[
    'x'=>[
        'y'=>2
    ],
    'z'=>3,
    'k'=>[
        'j'=>[
            'l'=>[
                'sdsd'=>2,
                'hh'=>3
            ]
        ]
    ]
        ];



echo suma($niz),'<hr />';
*/

#zadatak- postavi jedan niz sa više slojeva i napravi rekurzivnu fuknciju

$polaznik = [
    'ime'=>'Imenko',
    'prezime'=>'Prezimenko',
    'ustanova'=>[
        'Edunova'=>[
            'smjer'=>'PHP programiranje',
            'grupa'=>'PP25']
        ]
 ];


function jelvalja($array)
{
    echo '<ul>';
    foreach($array as $atribut=>$vrijednost){
        if(is_array($vrijednost)){
            echo   $atribut, '<br />';
            
            jelvalja($vrijednost);
           echo '<br />';
        }else{
            echo "$atribut : $vrijednost <br /> ";
        }
    }
    echo '</ul>';
}

jelvalja($polaznik);

#valjaaaa :)