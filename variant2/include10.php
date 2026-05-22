<?

 if($sopernik>' ') {  $dlina_e = strlen ($sopernik); if($dlina_e>16) { $sopernik_zapas='0'; setcookie ("sopernik_zapas", $sopernik_zapas, time() + 1); }  }

if(!$sopernik) { $sopernik_zapas='0'; setcookie ("sopernik_zapas", $sopernik_zapas, time() + 1); }

if($sopernik) { $sopernik_zapas=$sopernik; setcookie ("sopernik_zapas", $sopernik_zapas, time() + 3600*24); }

if($sopernik) { if($nomer2 || $nomer_doski2) { unset($nomer2);  unset($nomer_doski2);
                              setcookie ("nomer2", $nomer2, time() );  setcookie ("nomer_doski2", $nomer_doski2, time() );         }
                   }



 if($doska>' ') {  $dlina = strlen ($doska); if($dlina>16) { $doska=$name; }  }

if($doska) { if(!preg_match('/^[^a-zA-Z]+$/',$doska) | !preg_match('/^[^a-zA-Z0-9]+$/',$doska)) { echo ''; }} else

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) { $doska=$name; } } else $d='error';

if($d=='error') { $f=rand(1,1000); echo '<table width=90%><tr><td class=td_center><br><br><font size=2><strong><center><eml>Логин не пропустился,в символах логина не может быть русских букв или запятых<br><br>Попробуйте </eml><a href=index.php>вернуться</a> и ввести логин на латинице<br><br>Или войдите гостем под логином <a href=index.php?name=Guest'.$f.'&tip=22>Guest'.$f.'</a></center></strong></font><br><center><br><br><br></center></td></tr></table><br><br>'; } 

if(isset($_COOKIE['name'])) { if(!preg_match('/^[^a-zA-Z]+$/',$name) | !preg_match('/^[^a-zA-Z0-9]+$/',$name)) {  }}

 // setcookie ("doska_kuki_nomer2", $doska, time() + 10000);
 // setcookie ("doska_kuki_tip", $tip, time() + 10000);

//echo '$doska= '.$doska;

global $hod_one;
global $hod_two;

 $hod_one='1000';
$hod_two='1000';

include('./variant2/config_type4.php');

// echo '$base = '.$base.' ]';

// пешка черная =1 , тура черная =2 ,конь черный =3,  слон черный =4, ферзь черный = 5 ,король черный =6

if ( !file_exists($base) )   {  // echo 'файл '.$base.' отсутствует';

$openchatdb=fopen($base,"w");

 if(fwrite($openchatdb,""."\n")) { ;  }

fclose($openchatdb);
   
 }       // exit("файл D не существует");

if($file = fopen($base, "r")) {  // echo '<table width=99% bgcolor=#202020><tr><td><center><br>файл <b> '.$base.' </b> открыт <br><br>' ; $b4=0;
} 
while(!feof($file)) { 
if($sh[]= fgets ($file)){ $b4=$b4+1; }
//$sh[] = preg_replace("|[\r\n]+|", "", $sh[]);
 }
fclose ($file);

include ('type_verh.php');

echo '<table  align=center width= 92% bgcolor=#202020><tr><td class=td_center>';
for($g=0;$g<200;$g++) {
$sh[$g] = preg_replace("|[\r\n]+|", "", $sh[$g]);
} // }
?>

<?
if($nomer_doski2) {

$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';




if(!file_exists($sxx))   {  //echo 'файл '.$sxx.' присутствует';

                          setcookie ("nomer_doski2", $nomer_doski2, time() + 1);
                          setcookie ("nomer2", $nomer2, time() + 1);
                     ?>
<script>location.reload();</script>                     
<?
// echo "<meta http-equiv='refresh' content='1;url=index.php?doska=$name&tip=$tip'>";
}


 include('./variant2/hod_vertical/hod_vertical_off.php'); 


if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
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

//  конец считываем данные регистрации

if($file = fopen($base_hod_ip, "r")) {   $b4=0;} 
while(!feof($file)) { 
if($hody[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);
 
if($b4<'2' || $exxo[5]!='0' || $exxo[8]!='0' ) { $dex='ok'; } else $dex='not';

} else $dex='ok';

if($exxo[16]=='Без времени' || $exxo[5]!='0') { $dex='ok'; }
?>

<center>

<? if($dex!='ok') { $knopka='disabled'; } ?>


 <FORM method=post action="">
<? if($doska==$name && !$nomer_doski2) { ?>
<input type="submit"   class="button" name="novaya_igra" value="             Создать игру             "> <? 
include('./select_time.php'); }  ?>
</form>
 
<FORM method=post action="">
<?   if($doska==$name && $nomer_doski2) { ?>
<input type="submit" <? echo $knopka; ?>  class="button" name="otmenit_igru" value="             Отменить / Завершить игру            "> <? } ?>
</form>

</td><td class=td_center><center>
 
<FORM method=post action="">
<?   if($nomer_doski2) { ?>
<input type="submit"   class="button" name="sbros" value="             Новая игра            "> <? } ?>
</form>

</center>

<?

if($dex=='ok') {
if($_POST['novaya_igra'] || $_POST['otmenit_igru']) { 

$openchatdb=fopen($base,"w");
 if(fwrite($openchatdb,"")) {  // echo 'Записано в файл '.$base.'&nbsp;&nbsp;&nbsp;';
                                               }
fclose($openchatdb);

 $name=preg_replace("/_/", "", $name);
 $base_hod_ip = 'ip2/hod/'.$name.'.txt';

$openchatdb=fopen($base_hod_ip,"w");
 if(fwrite($openchatdb,"")) { // echo 'Записано в файл '.$base_hod_ip.'</font><strong></center><br>';
                                           }
fclose($openchatdb);
}}   else if($dex=='not' && $_POST['otmenit_igru']) { 
echo '<strong><center><font size=1>Вы не можете отменить игру,если ходов больше 2,и если нет победителя</font></center></strong>'; }



if($_POST['novaya_igra']) { 

if($game_nomer=='game1') { $game='1'; }
if($game_nomer=='game2') { $game='2'; }
if($game_nomer=='game3') { $game='3'; }
if($game_nomer=='game4') { $game='4'; }

 setcookie ("game", $game, time() + 4);
 setcookie ("nomer_doski2", $nomer_doski2, time() + 1);  
 setcookie ("timer", $timer, time() + 3600*24*700);  
setcookie ("btc", $btc, time() + 60);  
setcookie ("igrok", $igrok, time() + 60);  

//echo '$timer='.$timer;

$rrt='4'; }

if($_POST['sbros']) { 
//$game='5'; 
//$nomer2_rezet=''; $nomer2=$nomer2_rezet;
setcookie ("game", $game, time() + 4);
 setcookie ("nomer_doski2", $nomer_doski2, time() + 1);  
 setcookie ("nomer2", $nomer2, time() + 1);  
 setcookie ("timer", $timer, time() + 1);  
setcookie ("btc", $btc, time() + 1);  
$rrt='4'; 
unset($nomer2);
unset($nomer_doski2);
                                                        }


if($_POST['otmenit_igru'] && $dex=='ok') { 
$game='5'; 
//$nomer2_rezet=''; $nomer2=$nomer2_rezet;
setcookie ("game", $game, time() + 4);
 setcookie ("nomer_doski2", $nomer_doski2, time() + 1);  
// setcookie ("nomer2", $nomer2,4 time() + 1);  
 setcookie ("timer", $timer, time() + 1);  
setcookie ("btc", $btc, time() + 1);  
$rrt='4'; 






if($nomer_doski2) {

if($exxo[5]=='0' && $exxo[8]=='0') { $exxo[18]='Отменена'; } else $exxo[18]='Завершено';

$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

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

fclose($openchatdb);

} 







}









if($ilost=='yes') { 

if($exxo[11]=='Белые') { if($name!=$exxo[3]) { unset($ilost); } } else
if($exxo[11]=='Черные') { if($name!=$exxo[4]) { unset($ilost); } } 
 
                        }






// Начало если нажата ссылка "сдаться"


//если нажата кнопка сдаться

if($ilost=='yes') {













$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
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

//  конец считываем данные регистрации
 











if($exxo[1]==$name || $exxo[2]==$name) {

$exxo[8]=$name;
if($name==$exxo[1]) { $exxo[5]=$exxo[2]; $win=$exxo[2]; $loss=$exxo[1]; } else if($name==$exxo[2]) { $exxo[5]=$exxo[1];  $win=$exxo[1]; $loss=$exxo[2]; }
if($name==$exxo[3]) { $exxo[7]='Черные'; } else if($name==$exxo[4]) { $exxo[6]='Белые'; }

$sxx='./archive_doski/'.$doska.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

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

fclose($openchatdb);

include('./calculation_btc.php');
include('./calculation_rating.php');
include('./opoveshenie/close_game_write.php'); 

} //else echo '==';
} //else echo 'GG'; echo ', $ilost='.$ilost;

//если нажата кнопка сдаться


// Конец если нажата ссылка "сдаться"
















                                         

?>
</td></tr></table>
 







<?

//если есть своя игра,и открываю свою игру из оповещений
if($nomer2>' ') {  setcookie ("nomer2", $nomer2, time() +3600);  }

//если нет своей игры,и открываю свою игру из оповещений
if(!$nomer_doski2 && $nomer2) { $nomer_doski2=$nomer2; setcookie ("nomer_doski2", $nomer_doski2, time() +3600*24*700); }

//echo '<br>$nomer2='.$nomer2;
//echo '<br>$nomer_doski2='.$nomer_doski2;
?>

<table width=92%><tr><td class=td_center>

<? include('./panel.php'); ?>

    <? if($nomer_doski2 || $nomer2) {
    include('chat_igrok/chat.php');
    } ?>

</td></tr></table>

<?
if($_POST['novaya_igra'] || $_POST['otmenit_igru'] || $_POST['sbros']) { 
echo "<meta http-equiv='refresh' content='4;url=index.php?name=$doska&tip=$tip'>";
    }
  ?>
<br>