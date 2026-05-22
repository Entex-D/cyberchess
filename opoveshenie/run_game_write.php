
<?
if($tip=='1' || $tip=='2') { $width='800'; } else if($tip=='3') { $width='900'; } else if($tip=='4') { $width='900'; } else if($tip=='12') { $width='900'; } else if($tip=='8' || $tip=='9' || $tip=='10') { $width='900'; } else $width='80%';
?>





<? 


$df2s='./archive_doski/'.$name.'/anketa/list_game_run.txt'; 

if ( !file_exists($df2s) ) { 

//echo 'no='.$df2; 

$openchatdb=fopen($df2s,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 










//$sopernik_zapas='Guest615';


if($sopernik_zapas && $exxo[2]) { // start if($sopernik_zapas && $exxo[2]) { 



if($name!=$exxo[2]) { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix3s='0';
$time_save_s='0';
$game_save_s='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]=='0') { $status_save_s='0'; } else $status_save_s='1';
                            } else $status_save_s='2';

if($exxo[8]!='0' || $exxo[5]!='0') { $status_save_s='3'; $time_save_s='/-/';  }

if($tip=='1') { $nix3s=$nomer_doski; }
if($tip=='2') { $nix3s=$nomer_doski2; }
if($tip=='3') { $nix3s=$nomer_doski3; }
if($tip=='4') { $nix3s=$nomer_doski4; }
if($tip=='5') { $nix3s=$nomer_doski5; }
if($tip=='6') { $nix3s=$nomer_doski6; }
if($tip=='7') { $nix3s=$nomer_doski7; }
if($tip=='8') { $nix3s=$nomer_doski8; }
if($tip=='9') { $nix3s=$nomer_doski9; }
if($tip=='10') { $nix3s=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save_s='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save_s='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save_s='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save_s='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save_s='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save_s='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save_s='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save_s='1 сутки'; }

if(!$exxo[13]) { $no_save='1'; } else $no_save='2';

if($exxo[19]=='Extol ( обычная )') { $game_save_s='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save_s='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save_s='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save_s='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save_s='4.1'; }



$mic='./archive_doski/'.$name.'/anketa/list_game_run.txt'; 

if ( file_exists($mic) )   { 
$toka=fopen($mic,"a");

if($no_save=='2' && $nix3s>'  ' && $time_save_s!='0') {

$bik=$name.':'.$exxo[2].':'.$tip.':'.$nix3s.':'.$time_save_s.':'.$exxo[20].':'.$game_save_s.':'.$status_save_s."\n";
//echo $bik;
if(fwrite($toka,$name.':'.$exxo[2].':'.$tip.':'.$nix3s.':'.$time_save_s.':'.$exxo[20].':'.$game_save_s.':'.$status_save_s."\n")) { echo '<br>Запись себе в анкету';  }
if(fwrite($toka,$bik)) { }
                            }
fclose($toka);
      
}

}



// блок оповещений при предложенной игре


 $deb='./logi.txt'; 

$logi_text5='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок '.$name.' предложил игру на варианте #'.$tip.' игроку '.$sopernik_zapas.' , игра '.$exxo[19].' ';
$openchatdb=fopen($deb,"a");
 if(fwrite($openchatdb,$logi_text5."\n")) { echo '<br>Запись в логи';  }
fclose($openchatdb);


// записываем оповещения о зачислении btc
 $dipa='./archive_doski/'.$name.'/anketa/opoveshenie.txt'; 

$ddxs='Вы предложили игру на варианте #'.$tip.' игроку '.$sopernik_zapas.'  , игра '.$exxo[19].'  ';
if ( file_exists($dipa) )   { 

$openchatdb=fopen($dipa,"a");
if(fwrite($openchatdb,$ddxs."\n")) { echo '<br>Запись себе в оповещения';  }
          fclose($openchatdb);

}

// записываем оповещения о зачислении btc
 $ixa='./archive_doski/'.$sopernik_zapas.'/anketa/opoveshenie.txt'; 
$ddxsd='Вам предложили игру на варианте #'.$tip.' от игрока '.$name.'  , игра '.$exxo[19].'  ';
if ( file_exists($ixa) )   { 

$openchatdb=fopen($ixa,"a");
if(fwrite($openchatdb,$ddxsd."\n")) { echo '<br>Запись сопернику в оповещения';  }
          fclose($openchatdb);

}

// блок оповещений при предложенной игре


















//записываем игрока №2 на игрока №1


if($name!=$exxo[2]) { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix4d='0';
$time_save_d='0';
$game_save_d='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]) { $status_save_d='1'; } 
                            } else $status_save_d='2';

if($exxo[8]!='0' || $exxo[5]!='0') { $status_save_d='3'; $time_save_d='/-/';  }

if($tip=='1') { $nix4d=$nomer_doski; }
if($tip=='2') { $nix4d=$nomer_doski2; }
if($tip=='3') { $nix4d=$nomer_doski3; }
if($tip=='4') { $nix4d=$nomer_doski4; }
if($tip=='5') { $nix4d=$nomer_doski5; }
if($tip=='6') { $nix4d=$nomer_doski6; }
if($tip=='7') { $nix4d=$nomer_doski7; }
if($tip=='8') { $nix4d=$nomer_doski8; }
if($tip=='9') { $nix4d=$nomer_doski9; }
if($tip=='10') { $nix4d=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save_d='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save_d='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save_d='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save_d='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save_d='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save_d='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save_d='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save_d='1 сутки'; }

if(!$exxo[13]) { $no_save2='1'; } else $no_save2='2';

if($exxo[19]=='Extol ( обычная )') { $game_save_d='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save_d='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save_d='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save_d='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save_d='4.1'; }



$xrq2d='./archive_doski/'.$exxo[1].'/anketa/list_game_run.txt'; 

if ( file_exists($xrq2d) )   { 

$openchatdb=fopen($xrq2d,"a");

if($no_save2=='2' && $nix4d>'  ' && $time_save_d!='0') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix4d.':'.$time_save_d.':'.$exxo[20].':'.$game_save_d.':'.$status_save_d."\n")) { ;  }
                            }
fclose($openchatdb);
      
}

} //конец if $exxo[2]



//записываем игрока №2 на игрока №1





















//записываем игроку №2 в анкету чужую игру

//записываем игрока №2 на игрока №1




if($name!=$exxo[2]) { // начало if $exxo2]


$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix_f='0';
$time_save_f='0';
$game_save_f='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]) { $status_save_f='1'; } 
                            } else $status_save_f='2';

if($exxo[8]!='0' || $exxo[5]!='0') { $status_save_f='3'; $time_save_f='/-/';  }

if($tip=='1') { $nix_f=$nomer_doski; }
if($tip=='2') { $nix_f=$nomer_doski2; }
if($tip=='3') { $nix_f=$nomer_doski3; }
if($tip=='4') { $nix_f=$nomer_doski4; }
if($tip=='5') { $nix_f=$nomer_doski5; }
if($tip=='6') { $nix_f=$nomer_doski6; }
if($tip=='7') { $nix_f=$nomer_doski7; }
if($tip=='8') { $nix_f=$nomer_doski8; }
if($tip=='9') { $nix_f=$nomer_doski9; }
if($tip=='10') { $nix_f=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save_f='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save_f='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save_f='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save_f='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save_f='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save_f='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save_f='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save_f='1 сутки'; }

if(!$exxo[13]) { $no_save='1'; } else $no_save='2';

if($exxo[19]=='Extol ( обычная )') { $game_save_f='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save_f='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save_f='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save_f='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save_f='4.1'; }



$diko='./archive_doski/'.$exxo[2].'/anketa/list_game_run.txt'; 

if ( !file_exists($diko) ) { 
$openchatdb5=fopen($diko,"w");
 if(fwrite($openchatdb5,' ')) {   } 
fclose($openchatdb5);
} 


if ( file_exists($diko) )   { 

$openchatdb4=fopen($diko,"a");

if($no_save=='2' && $time_save_f!='0') {
if(fwrite($openchatdb4,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix_f.':'.$time_save_f.':'.$exxo[20].':'.$game_save_f.':'.$status_save_f."\n")) { echo '<br>Запись в анкету соперника<br><br>';  }
                            }
fclose($openchatdb4);
      
}

} //конец if $exxo[2]



//записываем игроку №2 в анкету чужую игру



} //end if($sopernik_zapas && $exxo[2]) {
















$file_guest5f='./archive_doski/'.$name.'/anketa/list_game_run.txt';  
 
if($file = fopen($file_guest5f, "r")) { echo ''; $bu4f=0;

while(!feof($file)) { 
if($stroki_n[]= fgets ($file)){$bu4++;} }
fclose ($file); 

 }













$xrt2f='./archive_doski/'.$name.'/anketa/list_game_run.txt'; 

if ( file_exists($xrt2f) )   { 

$openchatdb44=fopen($xrt2f,"w");



for($a=0;$a<$bu4f+'1';$a++) { 

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

if($stroki_n[$a]>'0') { if(fwrite($openchatdb44,$stroki_n[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb44);
      
}


unset($stroki);
unset($stroki_n);


















if($bu4f>'60') {

$xri2f='./archive_doski/'.$name.'/anketa/list_game_run.txt'; 

if ( file_exists($xri2f) )   { 

$openchatdb55=fopen($xri2f,"w");

 if(fwrite($openchatdb55,' ')) { ;  } 

fclose($openchatdb55);
      
}

} //end if $b4

?>


</table></center>