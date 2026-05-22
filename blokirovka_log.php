



<?
$base_hod='logi.txt';

// считываем из файла ходы записанные

if($file = fopen($base_hod, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($zapisi[]= fgets ($file)){$b5++;} }

fclose ($file); 

?><center>



<font size=2><strong><br><center>Последняя активность:</center><em><center><br><a href=#>[[[</a> 

<? echo $zapisi[$b5-1]; ?>

 <a href=#>]]]</a></center></em></strong><br>









</center>