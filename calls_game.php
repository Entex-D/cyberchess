<? if(isset($_COOKIE['sopernik_zapas'])) {  } ?>

<? include('create_login_anketa.php'); ?>
<?  if($sopernik_zapas) { }
 include('opoveshenie/run_game_write.php'); 
  ?>
<? include('opoveshenie/opens_game_write.php'); ?>
<? include('opoveshenie/close_game_write.php'); ?>
<? include('troxa/ip_write.php'); ?>

<?

if(!$sopernik_zapas) {

$width=$shirina;

?>

<center><table width=<? echo $width; ?>><tr>

<td bgcolor=#303030><br><strong><font size=1><center>Игрок</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Вариант</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Номер</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Время</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Ставка</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Игра</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Статус</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Выбор</center></font></strong><br></td>

</tr>

<? $fd='0'; ?>

<? $ChatDB=file("calls_game.txt");
while($a=array_pop($ChatDB))
{
list($igrok_n,$type_n,$numer_n,$time_n,$stavka_n,$gamex_n,$status_n)=split(":",$a,7);

// echo " ".$igrok_n." ".$type_n." ".$numer_n." ".$time_n." ".$gamex_n." ".$stavka_n." ".$status_n."<br>";
$fd=$fd+'1';



$nomer_x[$b]=$numer_n;

if($nomer_x[$b]==$nomer_x[$b-1]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-1]=''; }
if($nomer_x[$b]==$nomer_x[$b-2]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-2]=''; }
if($nomer_x[$b]==$nomer_x[$b-3]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-3]=''; }
if($nomer_x[$b]==$nomer_x[$b-4]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-4]=''; }
if($nomer_x[$b]==$nomer_x[$b-5]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-5]=''; }
if($nomer_x[$b]==$nomer_x[$b-6]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-6]=''; }
if($nomer_x[$b]==$nomer_x[$b-7]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-7]=''; }
if($nomer_x[$b]==$nomer_x[$b-8]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-8]=''; }
if($nomer_x[$b]==$nomer_x[$b-9]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-9]=''; }
if($nomer_x[$b]==$nomer_x[$b-10]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-10]=''; }

$b=$b+'1'; 





if($igrok && $ttred!='Da') { //if igrok

$status_n = preg_replace("|[\n\r]+|", "", $status_n);
$status_n = preg_replace("|[ ]+|", "", $status_n);

$gamex_n = preg_replace("|[\n\r]+|", "", $gamex_n);
$gamex_n = preg_replace("|[ ]+|", "", $gamex_n);

$type_n = preg_replace("|[\n\r]+|", "", $type_n);
$type_n = preg_replace("|[ ]+|", "", $type_n);

$igrok_n = preg_replace("|[\n\r]+|", "", $igrok_n);
$igrok_n = preg_replace("|[ ]+|", "", $igrok_n);

$numer_n = preg_replace("|[\n\r]+|", "", $numer_n);
$numer_n = preg_replace("|[ ]+|", "", $numer_n);

if($status_n=='0') { 



if($style=='4' || $style_run=='4') { $color='#DEB887';  $dd='color=#505050'; }
if($style=='6' || $style_run=='6') { $color='#D8BFD8'; $dd='color=#505050'; }
if($style=='11' || $style_run=='11') { $color='#B0E0E6';  $dd='color=#505050';  }
if($style=='16' || $style_run=='16') { $color='#FFE4B5'; $dd='color=#505050'; }


$status_text='Свободно'; }

 if($status_n=='1') { $color='#525252'; $dd='color=#DCDCDC'; $status_text='Занято'; }
 if($status_n=='2') { $color='#606060'; $dd='color=#DCDCDC';  $status_text='Отменена'; }
 if($status_n=='3') { $color='#606060'; $dd='color=#DCDCDC';  $status_text='Завершено'; }

if($status_n=='0') { 

if($type_n=='1') { $n_desk='nomer'; }
if($type_n=='2') { $n_desk='nomer2'; }
if($type_n=='3') { $n_desk='nomer3'; }
if($type_n=='4') { $n_desk='nomer4'; }
if($type_n=='5') { $n_desk='nomer5'; }
if($type_n=='6') { $n_desk='nomer6'; }
if($type_n=='7') { $n_desk='nomer7'; }
if($type_n=='8') { $n_desk='nomer8'; }
if($type_n=='9') { $n_desk='nomer9'; }
if($type_n=='10') { $n_desk='nomer10'; }


$run_text='<a href=index.php?doska='.$igrok_n.'&tip='.$type_n.'&'.$n_desk.'='.$numer_n.'><font size=1><strong>И Г Р А</strong></font></a>'; } else if($status_n=='1') { $run_text='-'; }
else if($status_n=='3') { $run_text='-'; }

if($gamex_n=='1') { $game_text='Extol обычная'; }
if($gamex_n=='2') { $game_text='Trox упрощенная 1'; }
if($gamex_n=='3') { $game_text='Lixa упрощенная 2'; }
if($gamex_n=='4') { $game_text='Detra упрощенная 3'; }
if($gamex_n=='4.1') { $game_text='Классический 8х8'; }

if($color_x=='#404040') { $color_x='#484848'; } else 
if($color_x=='#484848') { $color_x='#404040'; }  

if(!$color_x) { $color_x='#404040'; }

echo '
<tr><td bgcolor='.$color_x.'><br><strong><font size=1><center>'.$igrok_n.'</center></font></strong><br></td>
<td bgcolor='.$color_x.'><br><strong><font size=2><center>'.$type_n.'</center></font></strong><br></td>
<td bgcolor='.$color_x.'><br><strong><font size=1><center>'.$numer_n.'</center></font></strong><br></td>
<td bgcolor='.$color_x.'><br><strong><font size=1><center>'.$time_n.'</center></font></strong><br></td>
<td bgcolor='.$color_x.'><br><strong><font size=1><center>'.$stavka_n.'</center></font></strong><br></td>
<td bgcolor='.$color_x.'><br><strong><font size=1><center>'.$game_text.'</center></font></strong><br></td>
<td bgcolor='.$color.'><br><strong><font size=1 '.$dd.' ><center>'.$status_text.'</center></font></strong><br></td>
<td bgcolor='.$color_x.'><br><strong><font size=1><center>'.$run_text.'</center></font></strong><br></td></tr>
        ';                                                                       
} // end if igrok

unset($run_text);
$ttred='';               
  }




?></table></center><?

if($fd=='0') { ?>
<center><table width=<? echo $width; ?>
<? echo '<tr><td bgcolor=#404040 width=100%><br><strong><font size=1><center>Нет открытых игр</center></font></strong><br></td></tr></table></center>';
                 }




if($name==$exxo[1] && $exxo[2]=='0') { $dobro='da'; $nick=$name; }
if($name==$exxo[2]) { $dobro='da'; $nick=$exxo[1]; }




if($dobro=='da') { // начало if $exxo2]

$name = preg_replace("|[\n\r]+|", "", $name);
$name = preg_replace("|[ ]+|", "", $name);
$tip = preg_replace("|[\n\r]+|", "", $tip);
$tip = preg_replace("|[ ]+|", "", $tip);

$nix_n='0';
$time_save_n='0';
$game_save_n='0';

if(!$exxo[20]) { $exxo[20]='0'; }

if($exxo[18]!='0') {   $status_save_n='2'; }

if($exxo[18]=='0') {
if($exxo[2]=='0') { $status_save_n='0'; } else $status_save_n='1';
                            } else if($exxo[5]>'0' || $exxo[8]>'0' || $exxo[13]=='00:00' || $exxo[14]=='00:00') { $status_save_n='3'; }

if($tip=='1') { $nix_n=$nomer_doski; }
if($tip=='2') { $nix_n=$nomer_doski2; }
if($tip=='3') { $nix_n=$nomer_doski3; }
if($tip=='4') { $nix_n=$nomer_doski4; }
if($tip=='5') { $nix_n=$nomer_doski5; }
if($tip=='6') { $nix_n=$nomer_doski6; }
if($tip=='7') { $nix_n=$nomer_doski7; }
if($tip=='8') { $nix_n=$nomer_doski8; }
if($tip=='9') { $nix_n=$nomer_doski9; }
if($tip=='10') { $nix_n=$nomer_doski10; }

if($exxo[13]=='Без времени' || $exxo[14]=='Без времени') { $time_save_n='Не ограничено'; }
if($exxo[13]=='10:00' || $exxo[14]=='10:00') { $time_save_n='10 минут'; }
if($exxo[13]=='15:00' || $exxo[14]=='15:00') { $time_save_n='15 минут'; }
if($exxo[13]=='30:00' || $exxo[14]=='30:00') { $time_save_n='30 минут'; }
if($exxo[13]=='1:00:00' || $exxo[14]=='1:00:00') { $time_save_n='1 час'; }
if($exxo[13]=='2:00:00' || $exxo[14]=='2:00:00') { $time_save_n='2 часа'; }
if($exxo[13]=='6:00:00' || $exxo[14]=='6:00:00') { $time_save_n='6 часов'; }
if($exxo[13]=='23:59:59' || $exxo[14]=='23:59:59') { $time_save_n='1 сутки'; }

//if(!$exxo[13]) { $no_save='1'; } else $no_save='2';

if($exxo[19]=='Extol ( обычная )') { $game_save_n='1'; }
if($exxo[19]=='Trox ( упрощенная 1 )') { $game_save_n='2'; }
if($exxo[19]=='Lixa ( упрощенная 2 )') { $game_save_n='3'; }
if($exxo[19]=='Detra ( упрощенная 3 )') { $game_save_n='4'; }
if($exxo[19]=='Классический ( Доска 8х8 )') { $game_save_n='4.1'; }



$xrd2='calls_game.txt'; 

if ( file_exists($xrd2) )   { 

$openchatdb=fopen($xrd2,"a");

if($nix_n>'  ' && $time_save_n!='0') {
if(fwrite($openchatdb,$nick.':'.$tip.':'.$nix_n.':'.$time_save_n.':'.$exxo[20].':'.$game_save_n.':'.$status_save_n."\n")) { ;  }
                            }
fclose($openchatdb);
      
}

} //конец if $exxo[2]















$file_guest1='calls_game.txt';  
 
if($file = fopen($file_guest1, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($stroki[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }













$xr2='calls_game.txt'; 

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














//ниже кусок запасной наладки,чтобы занятые игры не появлялись

$b='0';

 $ChatDB=file("calls_game.txt");
while($a=array_pop($ChatDB))
{
list($igrok_n,$type_n,$numer_n,$time_n,$stavka_n,$gamex_n,$status_n)=split(":",$a,7);

// echo " ".$igrok_n." ".$type_n." ".$numer_n." ".$time_n." ".$stavka_n." ".$gamex_n." ".$status_n."<br>";
               
$nomer_x[$b]=$numer_n;

if($nomer_x[$b]==$nomer_x[$b-1]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-1]=''; }
if($nomer_x[$b]==$nomer_x[$b-2]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-2]=''; }
if($nomer_x[$b]==$nomer_x[$b-3]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-3]=''; }
if($nomer_x[$b]==$nomer_x[$b-4]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-4]=''; }
if($nomer_x[$b]==$nomer_x[$b-5]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-5]=''; }
if($nomer_x[$b]==$nomer_x[$b-6]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-6]=''; }
if($nomer_x[$b]==$nomer_x[$b-7]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-7]=''; }
if($nomer_x[$b]==$nomer_x[$b-8]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-8]=''; }
if($nomer_x[$b]==$nomer_x[$b-9]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-9]=''; }
if($nomer_x[$b]==$nomer_x[$b-10]) { $ttred='Da'; $nomer_x[$b]=''; $nomer_x[$b-10]=''; }

//echo $b.'. '.$nomer_x[$b].' | '.$ttred.'<br>';

$b=$b+'1'; $ttred='';

  }




















if($b4>'24') {

$xr2='calls_game.txt'; 

if ( file_exists($xr2) )   { 

$openchatdb=fopen($xr2,"w");

 if(fwrite($openchatdb,' ')) { ;  } 

fclose($openchatdb);
      
}

} //end if $b4

} // end if $sopernik
?>