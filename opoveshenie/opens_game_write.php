
<?
if($tip=='1' || $tip=='2') { $width='800'; } else if($tip=='3') { $width='900'; } else if($tip=='4') { $width='900'; } else if($tip=='12') { $width='900'; } else if($tip=='8' || $tip=='9' || $tip=='10') { $width='900'; } else $width='80%';
?>





<? 


$df2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( !file_exists($df2) ) { 

//echo 'no='.$df2; 

$openchatdb=fopen($df2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 
















if($name!=$exxo[2]) { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix3='0';
$time_save='0';
$game_save='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]=='0') { $status_save='0'; } else $status_save='1';
                            } else $status_save='2';

if($exxo[8]!='0' || $exxo[5]!='0') { $status_save='3'; $time_save='/-/';  }

if($tip=='1') { $nix3=$nomer_doski; }
if($tip=='2') { $nix3=$nomer_doski2; }
if($tip=='3') { $nix3=$nomer_doski3; }
if($tip=='4') { $nix3=$nomer_doski4; }
if($tip=='5') { $nix3=$nomer_doski5; }
if($tip=='6') { $nix3=$nomer_doski6; }
if($tip=='7') { $nix3=$nomer_doski7; }
if($tip=='8') { $nix3=$nomer_doski8; }
if($tip=='9') { $nix3=$nomer_doski9; }
if($tip=='10') { $nix3=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save='1 сутки'; }

if(!$exxo[13]) { $no_save='1'; } else $no_save='2';

if($exxo[19]=='Extol ( обычная )') { $game_save='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save='4.1'; }



$xrq2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xrq2) )   { 

$openchatdb=fopen($xrq2,"a");

if($no_save=='2' && $nix3>'  ' && $time_save!='0') {
if(fwrite($openchatdb,$name.':'.$exxo[2].':'.$tip.':'.$nix3.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save."\n")) { ;  }
                            }
fclose($openchatdb);
      
}

} //конец if $exxo[2]












//записываем игрока №2 на игрока №1


if($name==$exxo[2] && $name!=$exxo[1]) { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix4='0';
$time_save='0';
$game_save='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]) { $status_save='1'; } 
                            } else $status_save='2';

if($exxo[8]!='0' || $exxo[5]!='0') { $status_save='3'; $time_save='/-/';  }

if($tip=='1') { $nix4=$nomer_doski; }
if($tip=='2') { $nix4=$nomer_doski2; }
if($tip=='3') { $nix4=$nomer_doski3; }
if($tip=='4') { $nix4=$nomer_doski4; }
if($tip=='5') { $nix4=$nomer_doski5; }
if($tip=='6') { $nix4=$nomer_doski6; }
if($tip=='7') { $nix4=$nomer_doski7; }
if($tip=='8') { $nix4=$nomer_doski8; }
if($tip=='9') { $nix4=$nomer_doski9; }
if($tip=='10') { $nix4=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save='1 сутки'; }

if(!$exxo[13]) { $no_save2='1'; } else $no_save2='2';

if($exxo[19]=='Extol ( обычная )') { $game_save='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save='4.1'; }



$xrq2='./archive_doski/'.$exxo[1].'/anketa/list_game.txt'; 

if ( file_exists($xrq2) )   { 

$openchatdb=fopen($xrq2,"a");

if($no_save2=='2' && $nix4>'  ' && $time_save!='0') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix4.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save."\n")) { ;  }
                            }
fclose($openchatdb);
      
}

} //конец if $exxo[2]



//записываем игрока №2 на игрока №1





















//записываем игроку №2 в анкету чужую игру

//записываем игрока №2 на игрока №1


if($name==$exxo[2] && $name!=$exxo[1]) { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix='0';
$time_save='0';
$game_save='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]) { $status_save='1'; } 
                            } else $status_save='2';

if($exxo[8]!='0' || $exxo[5]!='0') { $status_save='3'; $time_save='/-/';  }

if($tip=='1') { $nix=$nomer_doski; }
if($tip=='2') { $nix=$nomer_doski2; }
if($tip=='3') { $nix=$nomer_doski3; }
if($tip=='4') { $nix=$nomer_doski4; }
if($tip=='5') { $nix=$nomer_doski5; }
if($tip=='6') { $nix=$nomer_doski6; }
if($tip=='7') { $nix=$nomer_doski7; }
if($tip=='8') { $nix=$nomer_doski8; }
if($tip=='9') { $nix=$nomer_doski9; }
if($tip=='10') { $nix=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save='1 сутки'; }

if(!$exxo[13]) { $no_save='1'; } else $no_save='2';

if($exxo[19]=='Extol ( обычная )') { $game_save='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save='4.1'; }



$xrq2='./archive_doski/'.$exxo[2].'/anketa/list_game.txt'; 

if ( file_exists($xrq2) )   { 

$openchatdb=fopen($xrq2,"a");

if($no_save=='2' && $time_save!='0') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save."\n")) { ;  }
                            }
fclose($openchatdb);
      
}

} //конец if $exxo[2]



//записываем игроку №2 в анкету чужую игру




















$file_guest5='./archive_doski/'.$name.'/anketa/list_game.txt';  
 
if($file = fopen($file_guest5, "r")) { echo ''; $bu4=0;

while(!feof($file)) { 
if($stroki_n[]= fgets ($file)){$bu4++;} }
fclose ($file); 

 }













$xrt2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xrt2) )   { 

$openchatdb=fopen($xrt2,"w");



for($a=0;$a<$bu4+'1';$a++) { 

$stroki_n[$a] = preg_replace("|[\n\r]+|", "", $stroki_n[$a]);
$stroki_n[$a+1] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+1]);
$stroki_n[$a+2] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+2]);
$stroki_n[$a+3] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+3]);
$stroki_n[$a+4] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+4]);
$stroki_n[$a+5] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+5]);
$stroki_n[$a+6] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+6]);
$stroki_n[$a+7] = preg_replace("|[\n\r]+|", "", $stroki_n[$a+7]);

if($stroki_n[$a]==$stroki_n[$a+1]) { $stroki_n[$a+1]=''; }
if($stroki_n[$a]==$stroki_n[$a+2]) { $stroki_n[$a+2]=''; }
if($stroki_n[$a]==$stroki_n[$a+3]) { $stroki_n[$a+3]=''; }
if($stroki_n[$a]==$stroki_n[$a+4]) { $stroki_n[$a+4]=''; }
if($stroki_n[$a]==$stroki_n[$a+5]) { $stroki_n[$a+5]=''; }
if($stroki_n[$a]==$stroki_n[$a+6]) { $stroki_n[$a+6]=''; }
if($stroki_n[$a]==$stroki_n[$a+7]) { $stroki_n[$a+7]=''; }

if($stroki_n[$a]>'0') { if(fwrite($openchatdb,$stroki_n[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb);
      
}


unset($stroki);
unset($stroki_n);


















if($bu4>'60') {

$xri2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xri2) )   { 

$openchatdb=fopen($xri2,"w");

 if(fwrite($openchatdb,' ')) { ;  } 

fclose($openchatdb);
      
}

} //end if $b4

?>


</table></center>