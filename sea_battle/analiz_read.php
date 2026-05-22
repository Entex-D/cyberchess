<?

$edixia='../sea_battle/igrok/analiz/'.$nick.'_analiz.txt';  
 
if($file = fopen($edixia, "r")) { echo ''; $d1=0;

while(!feof($file)) { 
if($analiz[]= fgets ($file)){$d1++;} }
fclose ($file); 

 }

$analiz[0] = preg_replace("|[\r\n]+|", "", $analiz[0]);
$analiz[1] = preg_replace("|[\r\n]+|", "", $analiz[1]);

if($analiz[0]<' ') { $analiz[0]='0'; }
if($analiz[1]<' ') { $analiz[1]='0'; }


?>

<center>
<table width=<? echo $width_variant2_doska_niz; ?>><tr><td>

<font size=1><strong><center>
Вы начали новую игру: <? echo $analiz[0]/2; ?> раз
<br>Вы сделали всего ходов: <? echo $analiz[1]/2; ?> 
</center></strong></font>

</td></tr></table>
</center>