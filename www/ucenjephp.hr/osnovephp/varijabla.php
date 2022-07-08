<?php

//PHP je interpreter, nije nam potreban tip podatka, sam će ga "otkriti"
$varijabla= 13;
echo $varijabla, '=', gettype($varijabla), '<hr />';//gettype nam vraća tip podatka varijable

$varijabla = true;
echo $varijabla, '=', gettype($varijabla), '<hr />'; 

$varijabla=3.14;
echo $varijabla, '=', gettype($varijabla), '<hr />'; 

$varijabla = 'Osijek';
echo $varijabla, '=', gettype($varijabla), '<hr />'; 

$varijabla = [];
echo gettype($varijabla), '<hr />';

$varijabla = new stdClass();
echo gettype($varijabla), '<hr />';

echo $_GET['brojDanaUGodini'], '<hr />';
$bgd= $_GET['brojDanaUGodini'];
echo $bgd, '=', gettype($bgd), '<hr />'; 

echo $bgd * 2, '<hr />';//implicitnak konveerzija
//eksplicitna konverzija
$bgd = (int)$_GET['brojDanaUGodini'];

$v=4;
$t=$v;
$t+=$t++;
echo $t, '<hr />';
echo $v;

