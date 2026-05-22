
<?
$width='100%';
?>

<center><table width=<? echo $width; ?>><tr>

<td bgcolor=#404040><br><strong><font size=1><center>Игрок #1</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Игрок #2</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Вариант</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Номер</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Время</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Ставка</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Игра</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Статус</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Баланс</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Рейтинг</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Выбор</center></font></strong><br></td>

</tr>



<? //$ChatDB=file("./archive_doski/'.$name.'/anketa/list_game.txt");


$df2='./archive_doski/'.$name.'/anketa/list_game_close.txt'; 

if ( !file_exists($df2) ) { 

//echo 'no='.$df2; 

$openchatdb=fopen($df2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 



unset($gamex);
unset($status);
unset($game_text);
unset($status_text);
unset($igrok);
unset($numer);
unset($time);
unset($stavka);
unset($igrok2);
unset($type);

$f='0';
$s2='./archive_doski/'.$name.'/anketa/list_game_close.txt';

 $ChatDB3=file($s2);

while($a=array_pop($ChatDB3))
{
list($igrok,$igrok2,$type,$numer,$time,$stavka,$gamex_d,$status_d,$balance_d,$rating_d)=split(":",$a,10);

$f=$f+'1';
// echo " ".$igrok." ".$type." ".$numer." ".$time." ".$gamex." ".$stavka." ".$status."<br>";

if($igrok>' ') { //if igrok

$status_d = preg_replace("|[\n\r]+|", "", $status_d);
$status_d = preg_replace("|[ ]+|", "", $status_d);

$gamex_d = preg_replace("|[\n\r]+|", "", $gamex_d);
$gamex_d = preg_replace("|[ ]+|", "", $gamex_d);

$balance_d = preg_replace("|[\n\r]+|", "", $balance_d);
$balance_d = preg_replace("|[ ]+|", "", $balance_d);

$type = preg_replace("|[\n\r]+|", "", $type);
$type = preg_replace("|[ ]+|", "", $type);

$igrok = preg_replace("|[\n\r]+|", "", $igrok);
$igrok = preg_replace("|[ ]+|", "", $igrok);

$numer = preg_replace("|[\n\r]+|", "", $numer);
$numer = preg_replace("|[ ]+|", "", $numer);

if($igrok2=='0') { $igrok2='Нет'; }
if($status_d=='1') { 



if($style=='4' || $style_run=='4') { $color='#DEB887'; }
if($style=='6' || $style_run=='6') { $color='#D8BFD8'; }
if($style=='11' || $style_run=='11') { $color='#B0E0E6'; }
if($style=='16' || $style_run=='16') { $color='#FFE4B5'; }

 }

 if($status_d=='0') { $color='#606060'; $status_text='Свободно'; }
 if($status_d=='2') { $color='#606060'; $status_text='Завершено'; }
 if($status_d=='1') { $status_text='Занято'; }
 if($status_d=='3') { $color='#606060'; $status_text='Завершено'; }

if($status_d=='0' || $status_d=='1') { 

if($type=='1') { $n_desk='nomer';   }
if($type=='2') { $n_desk='nomer2';   }
if($type=='3') { $n_desk='nomer3';   }
if($type=='4') { $n_desk='nomer4';   }
if($type=='5') { $n_desk='nomer5';  }
if($type=='6') { $n_desk='nomer6';   }
if($type=='7') { $n_desk='nomer7';   }
if($type=='8') { $n_desk='nomer8';   }
if($type=='9') { $n_desk='nomer9';   }
if($type=='10') { $n_desk='nomer10';   }

}

if($status_d=='0') {
$run_text='<a href=index.php?doska='.$igrok.'&tip='.$type.'&'.$n_desk.'='.$numer.'><font size=1><strong>Нет соперника</strong></font></a>'; } 
                        
if($status_d=='1') {

if($igrok==$name) { $text_to='Соперник '.$igrok2; }
if($igrok2==$name) { $text_to='Соперник '.$igrok; }

$run_text='<a href=index.php?doska='.$igrok.'&tip='.$type.'&'.$n_desk.'='.$numer.'><font size=1><strong>'.$text_to.'</strong></font></a>'; } 
                        
if($status_d=='3') {

//корректировка из за uvel
if($type=='1') {  $error_archive='4'; }
if($type=='2') {  $error_archive='4'; }
if($type=='3') {  $error_archive='4'; }
if($type=='4') {  $error_archive='4'; }
if($type=='5') {  $error_archive='4'; }
if($type=='6') {   $error_archive='4'; }
if($type=='7') {   $error_archive='4'; }
if($type=='8') {   $error_archive='4'; }
if($type=='9') {   $error_archive='4'; }
if($type=='10') {   $error_archive='4'; }
//корректировка из за uvel

if($type=='1') {  $didi=''; }
if($type=='2') {  $didi='2'; }
if($type=='3') {  $didi='3'; }
if($type=='4') {  $didi='4'; }
if($type=='5') {  $didi='5'; }
if($type=='6') {  $didi='6'; } // этот didi из завершенных игр,ссылка $nomer была голая вот ниже
if($type=='7') {  $didi='7'; } // проверил - работает)
if($type=='8') {  $didi='8'; }
if($type=='9') {  $didi='9'; }
if($type=='10') {  $didi='10'; }

$run_text='<a href=variant'.$type.'/archive_d_tip'.$error_archive.'_uvel.php?namer='.$igrok.'&tip='.$type.'&nomer'.$didi.'='.$numer.'><font size=1><strong>Посмотреть в архиве</strong></font></a>';  
                     }

if(preg_match('/d/',$balance_d)) { $color_l1='#90EE90'; $balance_d = preg_replace("/d/", "", $balance_d);

 } else if(preg_match('/-/',$balance_d)) { $color_l1='#F08080'; }


if(preg_match('/d/',$rating_d)) { $color_l2='#90EE90'; $rating_d = preg_replace("/d/", "", $rating_d);

} else if(preg_match('/-/',$rating_d)) { $color_l2='#F08080'; }

if($numer<' ') { $run_text='Нет номера ('; }

if($gamex_d=='1') { $game_text='Extol обычная'; }
if($gamex_d=='2') { $game_text='Trox упрощенная 1'; }
if($gamex_d=='3') { $game_text='Lixa упрощенная 2'; }
if($gamex_d=='4') { $game_text='Detra упрощенная 3'; }
if($gamex_d=='4.1') { $game_text='Классический 8х8'; }

echo '
<tr><td bgcolor=#464646><br><strong><font size=1><center>'.$igrok.'</center></font></strong><br></td>
<td bgcolor='.$color.'><br><strong><font size=1><center>'.$igrok2.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=2><center>'.$type.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$numer.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$time.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$stavka.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$game_text.'</center></font></strong><br></td>
<td bgcolor='.$color.'><br><strong><font size=1><center>'.$status_text.'</center></font></strong><br></td>
<td bgcolor='.$color.'><br><strong><font size=2 color='.$color_l1.'><center>'.$balance_d.'</center></font></strong><br></td>
<td bgcolor='.$color.'><br><strong><font size=2 color='.$color_l2.'><center>'.$rating_d.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$run_text.'</center></font></strong><br></td></tr>
        ';                                                                       
} // end if igrok
          
unset($color_l1);
unset($color_l2);
       }



echo '</table></center>';

if($igrok<'  ') { ?>
<center><table width=<? echo $width; ?>
<? echo '<tr><td bgcolor=#404040 width=100%><br><strong><font size=1><center>Нет завершенных игр</center></font></strong><br></td></tr></table></center>';
                 }


if($tip) { //начало if $tip




if($name!=$exxo[2]) { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix='0';
$time_save='0';
$game_save='0';

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]=='0') {
if($exxo[2]=='0') { $status_save='0'; } else $status_save='1';
                            } else $status_save='2';

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
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save='4'; }



$xr2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xr2) )   { 

$openchatdb=fopen($xr2,"a");

if($no_save=='2') {
if(fwrite($openchatdb,$name.':'.$tip.':'.$nix.':'.$time_save.':'.$exxo[20].':'.$game_save.':'.$status_save."\n")) { ;  }
                            }
fclose($openchatdb);
      
}

} //конец if $exxo[2]















$file_guest1='./archive_doski/'.$name.'/anketa/list_game.txt';  
 
if($file = fopen($file_guest1, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($stroki[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }













$xr2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xr2) )   { 

$openchatdb=fopen($xr2,"w");



for($a=0;$a<$b4+'1';$a++) { 

$stroki[$a] = preg_replace("|[\n\r]+|", "", $stroki[$a]);
$stroki[$a+1] = preg_replace("|[\n\r]+|", "", $stroki[$a+1]);
$stroki[$a+2] = preg_replace("|[\n\r]+|", "", $stroki[$a+2]);
$stroki[$a+3] = preg_replace("|[\n\r]+|", "", $stroki[$a+3]);
$stroki[$a+4] = preg_replace("|[\n\r]+|", "", $stroki[$a+4]);
$stroki[$a+5] = preg_replace("|[\n\r]+|", "", $stroki[$a+5]);
$stroki[$a+6] = preg_replace("|[\n\r]+|", "", $stroki[$a+6]);
$stroki[$a+7] = preg_replace("|[\n\r]+|", "", $stroki[$a+7]);

if($stroki[$a]==$stroki[$a+1]) { $stroki[$a+1]=''; }
if($stroki[$a]==$stroki[$a+2]) { $stroki[$a+2]=''; }
if($stroki[$a]==$stroki[$a+3]) { $stroki[$a+3]=''; }
if($stroki[$a]==$stroki[$a+4]) { $stroki[$a+4]=''; }
if($stroki[$a]==$stroki[$a+5]) { $stroki[$a+5]=''; }
if($stroki[$a]==$stroki[$a+6]) { $stroki[$a+6]=''; }
if($stroki[$a]==$stroki[$a+7]) { $stroki[$a+7]=''; }

if($stroki[$a]>'0') { if(fwrite($openchatdb,$stroki[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb);
      
}














if($b4>'24') {

$xr2='./archive_doski/'.$name.'/anketa/list_game.txt'; 

if ( file_exists($xr2) )   { 

$openchatdb=fopen($xr2,"w");

 if(fwrite($openchatdb,' ')) { ;  } 

fclose($openchatdb);
      
}

 

} //end if $b4


















} // конец if $tip









if($d=='ok') {

$xr2='./archive_doski/'.$name.'/anketa/list_game_close.txt'; 

if ( file_exists($xr2) )   { 

$openchatdb=fopen($xr2,"w");

 if(fwrite($openchatdb,' ')) { ;  } 

fclose($openchatdb);
      
}

echo "<meta http-equiv='refresh' content='1;url=anketa.php'>";
 

} //end if $b4




?>