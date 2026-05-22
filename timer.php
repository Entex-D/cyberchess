<?

if(!$number) {
if($tip=='1') { if($name==$doska) { if(isset($_COOKIE['nomer_doski'])) { $number=$nomer_doski; }} else  $number=$nomer_doski;  } else
if($tip=='2') { if($name==$doska) { if(isset($_COOKIE['nomer_doski2'])) { $number=$nomer_doski2; }} else $number=$nomer_doski2; } else
if($tip=='3') { if($name==$doska) { if(isset($_COOKIE['nomer_doski3'])) { $number=$nomer_doski3; }} else $number=$nomer_doski3; } else
if($tip=='4') { if($name==$doska) { if(isset($_COOKIE['nomer_doski4'])) { $number=$nomer_doski4; }} else $number=$nomer_doski4; } else
if($tip=='5') { if($name==$doska) { if(isset($_COOKIE['nomer_doski5'])) { $number=$nomer_doski5; }} else $number=$nomer_doski5; } else
if($tip=='6') { if($name==$doska) { if(isset($_COOKIE['nomer_doski6'])) { $number=$nomer_doski6; }} else $number=$nomer_doski6; } else
if($tip=='7') { if($name==$doska) { if(isset($_COOKIE['nomer_doski7'])) { $number=$nomer_doski7; }} else $number=$nomer_doski7; } else
if($tip=='8') { if($name==$doska) { if(isset($_COOKIE['nomer_doski8'])) { $number=$nomer_doski8; }} else $number=$nomer_doski8; } else
if($tip=='9') { if($name==$doska) { if(isset($_COOKIE['nomer_doski9'])) { $number=$nomer_doski9; }} else $number=$nomer_doski9; } else 
if($tip=='10') { if($name==$doska) { if(isset($_COOKIE['nomer_doski10'])) { $number=$nomer_doski10; }} else $number=$nomer_doski10; } 
                   }


//echo '$number= '.$number;
//echo '$doska= '.$doska;


if(!$db) { $sxx='./archive_doski/'.$doska.'/tip'.$tip.'/'.$number.'/'.$number.'_statix.txt'; 
} else if($db) { $sxx='../archive_doski/'.$doska.'/tip'.$tip.'/'.$number.'/'.$number.'_statix.txt'; }



if($number && file_exists($sxx)) { 


if($file = fopen($sxx, "r")) {  echo '' ; $b14=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b14=$b14+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);
$exxo[3] = preg_replace("|[\r\n]+|", "", $exxo[3]);
$exxo[4] = preg_replace("|[\r\n]+|", "", $exxo[4]);
$exxo[5] = preg_replace("|[\r\n]+|", "", $exxo[5]);
$exxo[6] = preg_replace("|[\r\n]+|", "", $exxo[6]);
$exxo[7] = preg_replace("|[\r\n]+|", "", $exxo[7]);
$exxo[8] = preg_replace("|[\r\n]+|", "", $exxo[8]);
$exxo[9] = preg_replace("|[\r\n]+|", "", $exxo[9]);
$exxo[10] = preg_replace("|[\r\n]+|", "", $exxo[10]);
$exxo[11] = preg_replace("|[\r\n]+|", "", $exxo[11]);
$exxo[12] = preg_replace("|[\r\n]+|", "", $exxo[12]);
$exxo[13] = preg_replace("|[\r\n]+|", "", $exxo[13]);
$exxo[14] = preg_replace("|[\r\n]+|", "", $exxo[14]);
$exxo[15] = preg_replace("|[\r\n]+|", "", $exxo[15]);
$exxo[16] = preg_replace("|[\r\n]+|", "", $exxo[16]);
$exxo[17] = preg_replace("|[\r\n]+|", "", $exxo[17]);
$exxo[18] = preg_replace("|[\r\n]+|", "", $exxo[18]);
$exxo[19] = preg_replace("|[\r\n]+|", "", $exxo[19]);
$exxo[20] = preg_replace("|[\r\n]+|", "", $exxo[20]);
$exxo[21] = preg_replace("|[\r\n]+|", "", $exxo[21]);
$exxo[22] = preg_replace("|[\r\n]+|", "", $exxo[22]);
$exxo[23] = preg_replace("|[\r\n]+|", "", $exxo[23]);
$exxo[24] = preg_replace("|[\r\n]+|", "", $exxo[24]);


//echo '$b14='.$b14;

}




//если игра открыта до написания таймера
if($exxo[12]>'0') {
if($exxo[13]=='') { $exxo[13]='Без времени'; }
if($exxo[14]=='') { $exxo[14]='Без времени'; }
if($exxo[15]=='') { $exxo[15]='Без времени'; }
if($exxo[16]=='') { $exxo[16]='Без времени'; }
if($exxo[18]=='') { $exxo[18]='0'; }
if($exxo[19]=='') { $exxo[19]='Не назначено'; }
}
//если игра открыта до написания таймера







$sec=date("s ");
$min=date("i ");
$hour=date("G ");

$min_sec=$min*60;
if($hour>0) { $hour_sec=$hour*60*60; } //else $hour_sec='1'; 
$server_time_sec=$sec+$min_sec+$hour_sec;

//if($server_time_sec+'7200'<$exxo[17]) { $exxo[17]=$exxo[17]-'86400'; } //расчет на смену суток,на 24:00:00



if($exxo[11]=='Белые' && $exxo[17]>'0' && $exxo[5]=='0') { 
if($exxo[12]>'1' && $exxo[14]<>'Без времени') { 
$save1_timer=$exxo[15]+($exxo[17]-$server_time_sec);
if($min<'1' && $save1_timer-3200>$exxo[15]) { $save1_timer=$save1_timer-3600; }
}}


if($exxo[11]=='Черные' && $exxo[17]>'0' && $exxo[5]=='0') { 
if($exxo[12]>'1' && $exxo[14]<>'Без времени') { 
$save2_timer=$exxo[16]+($exxo[17]-$server_time_sec);
if($min<'1' && $save2_timer-3200>$exxo[16]) { $save2_timer=$save2_timer-3600; }
}}


$width=$shirina;

?>
<table align=center width=<? echo $width; ?> border=0>
<tr>
<td width=30% class=td_center><? include('./load_hody_total_timer.php'); ?></td>
<td class=td_center bgcolor=><font size=5><strong<em><center>
<?

if($exxo[18]<>'Отменена') {

if($exxo[13]=='Без времени') { $exxina13='00:00'; } else $exxina13=$exxo[13];
if($exxo[14]=='Без времени') { $exxina14='00:00'; } else $exxina14=$exxo[14];

if($name==$exxo[3]) {
 echo '&nbsp;&nbsp;<font size=4><em>Белые:</em></font> '.$exxina13.' ';
echo '&nbsp;&nbsp;<font size=4><em>Черные:</em></font> '.$exxina14.' ';
} else if($name==$exxo[4]) {
echo '&nbsp;&nbsp;<font size=4><em>Черные:</em></font> '.$exxina14.' ';
 echo '&nbsp;&nbsp;<font size=4><em>Белые:</em></font> '.$exxina13.' ';
} else if($name!=$exxo[3] && $name!=$exxo[4]) {
 echo '&nbsp;&nbsp;<font size=4><em>Белые:</em></font> '.$exxina13.' ';
echo '&nbsp;&nbsp;<font size=4><em>Черные:</em></font> '.$exxina14.' ';
}


//echo '<br>&nbsp;&nbsp;<font size=2><em>Белые:</em></font> '.$exxo[15].' <font size=2><em>сек</em></font>';
//echo '&nbsp;&nbsp;<font size=2><em>Черные:</em></font> '.$exxo[16].' <font size=2><em>сек</em></font>'; 
} else //echo 'Игра <a href#>'.$number.'</a> отменена игроком <a href=#>'.$exxo[1].'</a>';


?>
<font size=1></font></center></em></storng></td></tr></table>
<?




if($exxo[17]<>$server_time_sec && $exxo[17]>'0' && $exxo[12]>'1' && $exxo[14]<>'Без времени') {

if($server_time_sec<$exxo[17]) { 

if($exxo[11]=='Белые') { $exxo[15]=$exxo[15]-('86400'-$exxo[15]+$server_time_sec); }
if($exxo[11]=='Черные') {$exxo[16]=$exxo[16]-('86400'-$exxo[16]+$server_time_sec);  }

 }

if($server_time_sec>$exxo[17]) {  

if($exxo[11]=='Белые') { $exxo[15]=$save1_timer; }
if($exxo[11]=='Черные') { $exxo[16]=$save2_timer; }
                             
}

if($exxo[15]<'0' && $exxo[5]=='0') { 
$exxo[15]='0'; $exxo[13]='00:00'; $exxo[7]='Черные'; $exxo[5]=$exxo[4]; $win=$exxo[4]; $loss=$exxo[3]; 
//if(!$d) { include('./calculation_btc.php'); } else if($d) { include('../calculation_btc.php'); }
//if(!$d) { include('./calculation_rating.php'); } else if($d) { include('../calculation_rating.php'); }
} else
if($exxo[16]<'0' && $exxo[5]=='0') { 
$exxo[16]='0'; $exxo[14]='00:00'; $exxo[6]='Белые'; $exxo[5]=$exxo[3]; $win=$exxo[3]; $loss=$exxo[4]; 
//if(!$d) { include('./calculation_btc.php'); } else if($d) { include('../calculation_btc.php'); }
//if(!$d) { include('./calculation_rating.php'); } else if($d) { include('../calculation_rating.php'); }
}
  
if($exxo[5]=='0' && $exxo[11]=='Белые') { 

	$minutes = floor($exxo[15] / 60); // Считаем минуты
	$hours = floor($minutes / 60); // Считаем количество полных часов
	$minutes = $minutes - ($hours * 60);  // Считаем количество оставшихся минут

$sec_new=($hours*60*60)+($minutes*60);
$p=$exxo[15]-$sec_new;
if($p<10) { $p='0'.$p; }

if($hours>'0') {
$exxo[13]=$hours.':'.$minutes.':'.$p;
} else $exxo[13]=$minutes.':'.$p;
}



if($exxo[5]=='0' && $exxo[11]=='Черные') { 

	$minutes = floor($exxo[16] / 60); // Считаем минуты
	$hours = floor($minutes / 60); // Считаем количество полных часов
	$minutes = $minutes - ($hours * 60);  // Считаем количество оставшихся минут

$sec_new=($hours*60*60)+($minutes*60);
$g=$exxo[16]-$sec_new;
if($g<10) { $g='0'.$g; }

if($hours>'0') {
$exxo[14]=$hours.':'.$minutes.':'.$g;
} else $exxo[14]=$minutes.':'.$g;
}                     
     }





if(!$db) { $exxo[17]=$server_time_sec; } 

if(!$db) { $sxx='./archive_doski/'.$doska.'/tip'.$tip.'/'.$number.'/'.$number.'_statix.txt';
} else if($db) { $sxx='../archive_doski/'.$doska.'/tip'.$tip.'/'.$number.'/'.$number.'_statix.txt'; }


if($exxo[17]<>$server_time_sec && $exxo[17]>'0' && $number>' ' && file_exists($sxx) && !$db) { 

$openchatdb=fopen($sxx,"w");

 if(fwrite($openchatdb,$exxo[0]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[1]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[2]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[3]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[4]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[5]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[6]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[7]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[8]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[9]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[10]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[11]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[12]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[13]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[14]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[15]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[16]."\n")) { ;  }
 if(fwrite($openchatdb,$exxo[17]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[18]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[19]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[20]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[21]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[22]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[23]."\n")) { ;  }
if(fwrite($openchatdb,$exxo[24]."\n")) { ;  }

fclose($openchatdb);


}
//echo '$sxx='.$sxx;
//}
//echo '$exxo[12]='.$exxo[12];

global $index_win;

if(!$db) { include('calculation_btc.php'); } else if($db) { include('calculation_btc.php'); }
if(!$db) { include('calculation_rating.php'); } else if($db) { include('calculation_rating.php'); }

if(!$db) {  include('opoveshenie/close_game_write.php'); } else if($db) {  include('opoveshenie/close_game_write.php'); }

 
                        



?>