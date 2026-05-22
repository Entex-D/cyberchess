
<?
if($tip=='1' || $tip=='2') { $width='800'; } else if($tip=='3') { $width='900'; } else if($tip=='4') { $width='900'; } else if($tip=='12') { $width='900'; } else if($tip=='8' || $tip=='9' || $tip=='10') { $width='900'; } else $width='80%';
?>





<?


if(!$db) { $de2='./archive_doski/'.$name.'/anketa/list_game_close.txt';  } else if($db) { $de2='../archive_doski/'.$name.'/anketa/list_game_close.txt';  }

if ( !file_exists($de2) ) { 

//echo 'no='.$df2; 

$openchatdb=fopen($de2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 

if($exxo[2]>' ') {

if(!$db) { $de2='./archive_doski/'.$exxo[2].'/anketa/list_game_close.txt'; } else if($db) { $de2='../archive_doski/'.$exxo[2].'/anketa/list_game_close.txt'; } 

if ( !file_exists($de2) ) { 

//echo 'no='.$df2; 

$openchatdb=fopen($de2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 

}



















//записываем игрока №2 на игрока №1


$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix5='0';
$time_save='0';
$game_save='0';

if($exxo[2]=='0') {  }

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]) { $status_save2='1'; } 
                            } 

  if($exxo[5]>'0' || $exxo[8]>'0' || $exxo[13]=='00:00' || $exxo[14]=='00:00') { $status_save2='3'; }

if($tip=='1') { $nix5=$nomer_doski; }
if($tip=='2') { $nix5=$nomer_doski2; }
if($tip=='3') { $nix5=$nomer_doski3; }
if($tip=='4') { $nix5=$nomer_doski4; }
if($tip=='5') { $nix5=$nomer_doski5; }
if($tip=='6') { $nix5=$nomer_doski6; }
if($tip=='7') { $nix5=$nomer_doski7; }
if($tip=='8') { $nix5=$nomer_doski8; }
if($tip=='9') { $nix5=$nomer_doski9; }
if($tip=='10') { $nix5=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save='1 сутки'; }

//if(!$exxo[13]) { $no_save2='1'; } else $no_save2='2';

if($exxo[19]=='Extol ( обычная )') { $game_save='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save='4.1'; }




if($name==$exxo[1]) {

if($exxo[5]==$name) { $balance_r1='d+'.$exxo[20]; $rating_r1='d+'.$index_win; } else if($exxo[5]!=$name) { $balance_r1='-'.$exxo[20];  $rating_r1='-'.$index_win;  } 


if(!$db) { $xrqr2='./archive_doski/'.$exxo[1].'/anketa/list_game_close.txt'; } else if($db) { $xrqr2='../archive_doski/'.$exxo[1].'/anketa/list_game_close.txt'; } 

if ( file_exists($xrqr2) )   { 

$openchatdb=fopen($xrqr2,"a");

if($status_save2=='3' && $index_win>' ') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix5.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save2.':'.$balance_r1.':'.$rating_r1."\n")) { ;  }
                            }
fclose($openchatdb);

                             }



if($exxo[5]==$exxo[2]) { $balance_r1='d+'.$exxo[20]; $rating_r1='d+'.$index_win; } else if($exxo[5]!=$exxo[2]) { $balance_r1='-'.$exxo[20];  $rating_r1='-'.$index_win;  } 


if(!$db) { $xrqr2='./archive_doski/'.$exxo[2].'/anketa/list_game_close.txt'; } else if($db) { $xrqr2='../archive_doski/'.$exxo[2].'/anketa/list_game_close.txt'; } 

if ( file_exists($xrqr2) )   { 

$openchatdb=fopen($xrqr2,"a");

if($status_save2=='3' && $index_win>' ') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix5.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save2.':'.$balance_r1.':'.$rating_r1."\n")) { ;  }
                            }
fclose($openchatdb);
      
                            }


}



if($name==$exxo[2]) {

if($exxo[5]==$name) { $balance_r1='-'.$exxo[20]; $rating_r1='-'.$index_win; } else if($exxo[5]!=$name) { $balance_r1='d+'.$exxo[20];  $rating_r1='d+'.$index_win;  } 


if(!$db) { $xrqr2='./archive_doski/'.$exxo[1].'/anketa/list_game_close.txt'; } else if($db) { $xrqr2='../archive_doski/'.$exxo[1].'/anketa/list_game_close.txt'; } 

if ( file_exists($xrqr2) )   { 

$openchatdb=fopen($xrqr2,"a");

if($status_save2=='3' && $index_win>' ') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix5.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save2.':'.$balance_r1.':'.$rating_r1."\n")) { ;  }
                            }
fclose($openchatdb);

                            }



if($exxo[5]==$exxo[2]) { $balance_r1='d+'.$exxo[20]; $rating_r1='d+'.$index_win; } else if($exxo[5]!=$exxo[2]) { $balance_r1='-'.$exxo[20];  $rating_r1='-'.$index_win;  } 


if(!$db) { $xrqr2='./archive_doski/'.$exxo[2].'/anketa/list_game_close.txt'; } else if($db) { $xrqr2='../archive_doski/'.$exxo[2].'/anketa/list_game_close.txt'; } 

if ( file_exists($xrqr2) )   { 

$openchatdb=fopen($xrqr2,"a");

if($status_save2=='3' && $index_win>' ') {
if(fwrite($openchatdb,$exxo[1].':'.$exxo[2].':'.$tip.':'.$nix5.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save2.':'.$balance_r1.':'.$rating_r1."\n")) { ;  }
                            }
fclose($openchatdb);
      
                            }
                            
}





















































































$file_guest5='./archive_doski/'.$name.'/anketa/list_game_close.txt';  
 
if($file = fopen($file_guest5, "r")) { echo ''; $br4=0;

while(!feof($file)) { 
if($stroki_r[]= fgets ($file)){$br4++;} }
fclose ($file); 

 }













$xrt2='./archive_doski/'.$name.'/anketa/list_game_close.txt'; 

if ( file_exists($xrt2) )   { 

$openchatdb=fopen($xrt2,"w");



for($a=0;$a<$br4+'1';$a++) { 


$stroki_r[$a] = preg_replace("|[\n\r]+|", "", $stroki_r[$a]);
$stroki_r[$a+1] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+1]);
$stroki_r[$a+2] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+2]);
$stroki_r[$a+3] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+3]);
$stroki_r[$a+4] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+4]);
$stroki_r[$a+5] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+5]);
$stroki_r[$a+6] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+6]);
$stroki_r[$a+7] = preg_replace("|[\n\r]+|", "", $stroki_r[$a+7]);

if($stroki_r[$a]==$stroki_r[$a+1]) { $stroki_r[$a+1]=''; }
if($stroki_r[$a]==$stroki_r[$a+2]) { $stroki_r[$a+2]=''; }
if($stroki_r[$a]==$stroki_r[$a+3]) { $stroki_r[$a+3]=''; }
if($stroki_r[$a]==$stroki_r[$a+4]) { $stroki_r[$a+4]=''; }
if($stroki_r[$a]==$stroki_r[$a+5]) { $stroki_r[$a+5]=''; }
if($stroki_r[$a]==$stroki_r[$a+6]) { $stroki_r[$a+6]=''; }
if($stroki_r[$a]==$stroki_r[$a+7]) { $stroki_r[$a+7]=''; }

if($stroki_r[$a]>'0') { if(fwrite($openchatdb,$stroki_r[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb);
      
}


unset($stroki);
unset($stroki_n);
unset($stroki_r);


















if($br4>'260') {

$xri2='./archive_doski/'.$name.'/anketa/list_game_close.txt'; 

if ( file_exists($xri2) )   { 

$openchatdb=fopen($xri2,"w");

 if(fwrite($openchatdb,' ')) { ;  } 

fclose($openchatdb);
      
}

} //end if $b4

?>