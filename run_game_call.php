<? include('./shapka_load_style.php'); ?>

<? if(isset($_COOKIE['name'])) { ?>

<center>

<? include('shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Предложить игру</a></strong><br><br></font></center></td></tr></table>

<br>

<center><table border="0" width="90%" border=0 class=button bgcolor="" ><tr>
<td class=td_center><center><br><strong>







<?


//$dir = './chat_igrok/igrok_message/';
$dir = './btc/';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$list_message=count($dir_file_cnt);













echo '&nbsp;&nbsp;&nbsp;<font size=1><em>Всего игроков '.$list_message;

if($list!='yes') {

echo '&nbsp;&nbsp;&nbsp;<a href=run_game_call.php?list=yes>Показать не активные</a>';

                }



if($list=='yes') {

echo '&nbsp;&nbsp;&nbsp;<a href=run_game_call.php?list=no>Скрыть не активные</a>';

                 }

echo '</em></font><br><br>';















?>

<? if($popo=='2') { ?>
<center><table width=70%>

<tr bgcolor=#444444><td><br><font size=3><strong><em><center>Игрок</center></em></strong></font><br></td>
<td bgcolor=#444444><font size=3><strong><em><center>Рейтинг</center></em></strong></font></td>
<td bgcolor=#444444><center><font size=3><strong><em>Баланс </em></strong></font><font size=1><strong>( BTC )</strong></font></center></td>
</tr>
<? } ?>

<?

$f='1';
$dx='1';
$numer_color='0';
for($s=2;$s<$list_message+2;$s++) {   //начало for

//$f=$f+'1';
$numer_color=$numer_color+'1';

$effy[$s] = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
$effy[$s] = preg_replace("|[\r\n]+|", "", $effy[$s]);
//$dir_file_cnt[$s] = preg_replace("/.txt/", "", $dir_file_cnt[$s]);


//$color_green='#90EE90';
//$color_red='f50000';

$index_1='#484848';
$index_2='#444444';
//$index_1_green='#004600';
//$index_2_red='#860000';


if($style_run=='16') { $index_2_red='#A0522D'; $index_1_green='#CD853F';
                                 $color_green='#DAA520'; $color_red='#DAA520'; }

if($style_run=='11') { $index_2_red='#5159B0'; $index_1_green='#6495ED';
                                 $color_green='#87CEFA'; $color_red='#87CEFA'; }

if($style_run=='6') { $index_2_red='#8B008B'; $index_1_green='#BA55D3';
                                 $color_green='#DA70D6'; $color_red='#DA70D6'; }

if($style_run=='4') { $index_2_red='#A0522D'; $index_1_green='#CD853F';
                                 $color_green='#DAA520'; $color_red='#DAA520'; }



if($numer_color=='1') { $bg_color=$index_1; }
if($numer_color=='2') { $bg_color=$index_2; }



















$adres='./archive_doski/'.$effy[$s].'/anketa/email.txt';

if ( !file_exists($adres) )   { 
// считываем из файла ходы записанные
//echo '<em>Анкеты нет</em>';
} else if ( file_exists($adres) )   { // start if ( !file_exists($adres) )   { 
 
if($name!=$effy[$s]) { //start if $name $effy





















$zapas='<tr><td bgcolor='.$bg_color.'><strong><center>'.$f.'.'.$effy[$s].'</center></strong></td> ';
$zapas_null='<tr><td bgcolor='.$bg_color.'><strong><center>'.$dx.'.'.$effy[$s].'</center></strong></td> ';




$zet = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
$zet=$zet.'.txt';

$file_guest_mx='./rating/'.$zet;

if ( !file_exists($file_guest_mx) )   {  echo '<br>Не считался рейтинг '.$zet.':';



if($openchatdb=fopen($file_guest_mx,"w")) { echo 'Открылось для записи /rating/'.$zet;

 if(fwrite($openchatdb,'1500'."\n".'0'."\n".'0'."\n")) { }
fclose($openchatdb);
}

}












if ( file_exists($file_guest_mx) )   { 
if($file = fopen($file_guest_mx, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($ride[]= fgets ($file)){$b4++;} }
fclose ($file); 

}

$r='1';
if ( $r=='2' && $zet=='Guest475_.txt')   {  echo '<br>Не считался рейтинг баллов '.$zet.':';


if($openchatdb=fopen($file_guest_mx,"w")) { echo 'Открылось для записи /btc/'.$zet;

//$ride[0] = preg_replace("/n0/", "", $ride[0]);
//$ride[1] = preg_replace("/n/", "", $ride[1]);

//$ride[0]=rand(1450,1560);
//$ride[1]=rand(0,45);
//$ride[2]=rand(0,45);

$ride[0]='1475';
$ride[1]='0';
$ride[2]='25';

 if(fwrite($openchatdb,$ride[0]."\n".$ride[1]."\n".$ride[2]."\n")) { }
fclose($openchatdb);
}
}














$zet = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
$zet=$zet.'.txt';

$file_guest_m='./btc/'.$zet;

if ( !file_exists($file_guest_m) )   {  echo '<br>Не считался баланс '.$zet.':';



if($openchatdb=fopen($file_guest_m,"w")) { echo 'Открылось для записи /btc/'.$zet;

 if(fwrite($openchatdb,'1'."\n".'0'."\n".'0'."\n")) { }
fclose($openchatdb);
}

}






if ( file_exists($file_guest_m) )   { 
if($file = fopen($file_guest_m, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($vd_r[]= fgets ($file)){$b4++;} }
fclose ($file); 

}


if ( file_exists($file_guest_m) && !$vd_r[1] && !$vd_r[2] )   {  echo '<br>Не считался рейтинг баллов '.$zet.':';

$vd_r[0] = preg_replace("|[\r\n]+|", "", $vd_r[0]);
$vd_r[1] = preg_replace("|[\r\n]+|", "", $vd_r[1]);
$vd_r[2] = preg_replace("|[\r\n]+|", "", $vd_r[2]);

if($openchatdb=fopen($file_guest_m,"w")) { echo 'Открылось для записи /btc/'.$zet;

 if(fwrite($openchatdb,$vd_r[0]."\n".$vd_r[1]."\n".$vd_r[2]."\n")) { }
fclose($openchatdb);
}
}



 










$zet = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
$zet=$zet.'.txt';

$file_guest_p='./wins_losses/'.$zet;

if ( !file_exists($file_guest_p) )   {  echo '<br>Не считались победы проигрыши '.$zet.':';



if($openchatdb=fopen($file_guest_p,"w")) { echo 'Открылось для записи /btc/'.$zet;

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) { }
fclose($openchatdb);
}

}

















if ( file_exists($file_guest_mx) )   { 
if($file = fopen($file_guest_mx, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

if($numer_color=='1') { $bg_color=$index_1; }
if($numer_color=='2') { $bg_color=$index_2; }

if($v[2]>$v[1]) { $bg_color=$index_2_red; }
if($v[1]>$v[2]) { $bg_color=$index_1_green; }

//echo '<td bgcolor='.$bg_color.'> &nbsp;&nbsp;&nbsp;&nbsp;<center>  <font size=2><strong>'.$v[0].'</strong></font> <font color='.$color_green.'>+'.$v[1].'</font> <font color='.$color_red.'>-'.$v[2].'</font></center></td>';

$v[0] = preg_replace("|[\r\n]+|", "", $v[0]);

if($v[0]!='1500') { $f=$f+'1';
$list_summa[$s]=$zapas.'<td bgcolor='.$bg_color.'> &nbsp;&nbsp;&nbsp;&nbsp;<center>  <font size=2><strong>'.$v[0].'</strong></font> <font color='.$color_green.'>+'.$v[1].'</font> <font color='.$color_red.'>-'.$v[2].'</font></center></td>';
                          
                          } else if($v[0]=='1500') { $dx=$dx+'1';
$list_summa_null[$s]=$zapas_null.'<td bgcolor='.$bg_color.'> &nbsp;&nbsp;&nbsp;&nbsp;<center>  <font size=2><strong>'.$v[0].'</strong></font> <font color='.$color_green.'>+'.$v[1].'</font> <font color='.$color_red.'>-'.$v[2].'</font></center></td>';
                          }

}  






if ( file_exists($file_guest_m) )   { 
if($file = fopen($file_guest_m, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($vd[]= fgets ($file)){$b4++;} }
fclose ($file); 

if($numer_color=='1') { $bg_color=$index_1; }
if($numer_color=='2') { $bg_color=$index_2; }

if($vd[1]>$vd[2]) { $bg_color=$index_1_green; } else if($vd[2]>$vd[1]) { $bg_color=$index_2_red; }

//echo ' <td bgcolor='.$bg_color.'>&nbsp;&nbsp;&nbsp;&nbsp;<center><font size=2><strong>'.$vd[0].' </strong></font> <font color='.$color_green.'>+'.$vd[1].'</font> <font color='.$color_red.'>-'.$vd[2].'</font></center><br></td>';

if($v[0]!='1500') {
$list_summa[$s]=$list_summa[$s].' <td bgcolor='.$bg_color.'>&nbsp;&nbsp;&nbsp;&nbsp;<center><font size=2><strong>'.$vd[0].' </strong></font> <font color='.$color_green.'>+'.$vd[1].'</font> <font color='.$color_red.'>-'.$vd[2].'</font></center><br></td>';
                          
                          } else if($v[0]=='1500') {
$list_summa_null[$s]=$list_summa_null[$s].' <td bgcolor='.$bg_color.'>&nbsp;&nbsp;&nbsp;&nbsp;<center><font size=2><strong>'.$vd[0].' </strong></font> <font color='.$color_green.'>+'.$vd[1].'</font> <font color='.$color_red.'>-'.$vd[2].'</font></center><br></td>';
                          }


}  






if ( file_exists($file_guest_p) )   { 
if($file = fopen($file_guest_p, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($mex[]= fgets ($file)){$b4++;} }
fclose ($file); 

if($numer_color=='1') { $bg_color=$index_1; }
if($numer_color=='2') { $bg_color=$index_2; }

if($mex[0]>$mex[1]) { $bg_color=$index_1_green; } else if($mex[1]>$mex[0]) { $bg_color=$index_2_red; }

//echo ' <td bgcolor='.$bg_color.'> <strong><center><font color='.$color_green.'>+'.$mex[0].'</strong></font>  <font color='.$color_red.'>-'.$mex[1].'</font> </center></td>';

}  















$zeto = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
//$zet=$zet.'.txt';

$file_guest_pn='./archive_doski/'.$zeto.'/anketa/opoveshenie.txt';


if ( file_exists($file_guest_pn) )   { 
if($file = fopen($file_guest_pn, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($opov[]= fgets ($file)){$b4++;} }
fclose ($file); 

} else $b4='-';  

if($numer_color=='1') { $bg_color=$index_1; }
if($numer_color=='2') { $bg_color=$index_2; }

//echo ' <td bgcolor='.$bg_color.'> <strong><center><font size=2>'.$b4.'</strong></font> </center></td>';

$summa=$mex[0]+$mex[1];
if($summa=='0') { $summa='-'; }

//echo ' <td bgcolor='.$bg_color.'> <strong><center><font size=2>'.$summa.'</strong></font> </center></td>';


if($v[0]!='1500' && $effy[$s]!='Comp') {
$didi='<td bgcolor='.$bg_color.'> <strong><center><font size=1>

 <FORM method=post action="">


<select class="button" size=1 name=game_nomer>
 <option  class="button" value=1>   Вариант #1</option>
  <option  class="button" value=2>Вариант #2</option>
 <option  class="button" value=3>Вариант #3</option>
    <option class="button" value=4>Вариант #4</option>
 <option  class="button" value=5>Вариант #5</option>
 <option  class="button" value=6>Вариант #6</option>
 <option  class="button" value=7>Вариант #7</option>
 <option  class="button" value=8>Вариант #8</option>
 </select>

<select class="button" size="1" name=igrok>
 <option  class="button" value='.$effy[$s].'></option>
 </select>


&nbsp;&nbsp;<input type="submit"   class="button" name="run" value="     Предложить игру     ">
</form>

</strong></font> </center><br></td></tr>';
} else $didi='<td bgcolor='.$bg_color.'> <strong><center><font size=1>Не активно</strong></font> </center><br></td></tr>';



 




if($v[0]!='1500') {
$list_summa[$s]=$list_summa[$s].$didi;
                          
                          } else if($v[0]=='1500') {
$list_summa_null[$s]=$list_summa_null[$s].$didi;
                          }











} // end if $name $effy

} // end if ( !file_exists($adres) )   { 


































unset($v);  
unset($vd);  
unset($vd_r);  
unset($mex);  
unset($ride);  
unset($opov);  
unset($didi);

if($numer_color>'1') { $numer_color='0'; }


 } // echo '</table></center><br>';

?>































































<center><table width=80%>

<tr bgcolor=#444444><td><br><font size=3><strong><em><center>Игрок</center></em></strong></font><br></td>
<td bgcolor=#444444><font size=3><strong><em><center>Рейтинг</center></em></strong></font></td>
<td bgcolor=#444444><center><font size=3><strong><em>Баланс </em></strong></font><font size=1><strong>( BTC )</strong></font></center></td>
<td bgcolor=#444444><center><font size=3><strong><em>Выбор </em></strong></font><font size=1><strong></strong></font></center></td>
</tr>


<?
for($s=2;$s<$list_message+2;$s++) {   //начало for

echo $list_summa[$s];

}

if($list=='yes') {

for($s=2;$s<$list_message+2;$s++) {   //начало for

echo $list_summa_null[$s];

}

} //end if $list

echo '</table></center><br>';

?>










</strong></td></tr></table>

<? } ?>


















<?

if($_POST['run']) {  $index_tip=$game_nomer; $run_igrok=$igrok; 
 
 echo "<meta http-equiv='refresh' content='1;url=index.php?name=$name&tip=$index_tip&sopernik=$run_igrok'>";
  }



?>
<br>
<? include('podval.php'); ?>