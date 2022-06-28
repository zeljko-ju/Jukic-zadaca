<?php

#varijabla je prostor u memoriji


/*PHP je interpreter- to znači da ne treba kompajler, odnosno, ne moramo mu zadavati koji je tip podatka
kao u nekim drugim progr. jezicima. Kdo PHP-a C radi u pozadini i procesuira sve podatke te ih na taj način
i prepoznaje. Zato se smatra "sporijim" jezikom */

#prijmer dolje: zadali smo vrijednost varijabli (broj, decimalni broj, boolean, varchar itd) bez da smo upisali kakav je to tip podatka (int)

$varijabla=7948;

echo $varijabla,' = ',gettype($varijabla), '<hr />'; #gettype nam ispisuje koji je tip podatka

$varijabla=false;
echo $varijabla,' = ',gettype($varijabla), '<hr />';

$varijabla = 'New York';
echo $varijabla,' = ',gettype($varijabla), '<hr />';

$varijabla = ['a'];
echo gettype($varijabla), '<hr />';

$varijabla = new stdClass();
echo  gettype($varijabla), '<hr />';

echo $_GET['brojDanaUMjesecu'], '<hr />';
$bgm = $_GET['brojDanaUMjesecu'];
echo $bgm,'=' , gettype($bgm), '<hr />';
echo $bgm * 2, '<hr />';

$bdm =(int)$_GET['brojDanaUMjesecu'];

$v = 8; 
$t = $v;
echo $t;
