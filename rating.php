<?
if(isset($_COOKIE['name'])) {  } 

//Считывание btc
if($name) { $file_guest='./rating/'.$name.'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($rat[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}
//Считывание btc

if(!$rat[0] && !$rat[1] && !$rat[2]) { $rat[0]='0'; $rat[1]='0'; $rat[2]='0'; 

//Считывание btc на страницу оповещений
if($name) { $file_guest='../rating/'.$name.'.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($ratr[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }}}
//Считывание btc на страницу оповещений







if(!$ratr[0]) {  $ratr='0'; }
?>


<? if($rat[0]>'0') { ?>
&nbsp;&nbsp;&nbsp;&nbsp;<font size=1><strong><? echo 'Рейтинг <font size=4><em>'.$rat[0].'</em></font> <font color=#90EE90>+'.$rat[1].'</font> <font color=#F08080>-'.$rat[2].'</font>'; ?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></font>
<? } ?>
<? if($ratr[0]>'0') { ?>
&nbsp;&nbsp;&nbsp;&nbsp;<font size=1><strong><? echo 'Рейтинг <font size=4><em>'.$ratr[0].'</em></font>  <font color=#90EE90>+'.$ratr[1].'</font> <font color=#F08080>-'.$ratr[2].'</font>'; ?>&nbsp;&nbsp;&nbsp;&nbsp;</strong></font>
<? } ?>