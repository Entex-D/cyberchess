<? include('./shapka_load_style.php'); ?>

<? if(isset($_COOKIE['name']) || !isset($_COOKIE['name'])) { ?>

<center>

<? include('shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Рейтинги игроков</a></strong><br><br></font></center></td></tr></table>

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

$igry_total='0';











echo '&nbsp;&nbsp;&nbsp;<font size=1><em>Всего игроков '.$list_message;

if($list!='yes') {

echo '&nbsp;&nbsp;&nbsp;<a href=ratings_user.php?list=yes>Показать не активные</a>';

                }



if($list=='yes') {

echo '&nbsp;&nbsp;&nbsp;<a href=ratings_user.php?list=no>Скрыть не активные</a>';

                 }

echo '</em></font><br><br>';














if($block=='2') {
?>
<center><table width=80%>

<tr bgcolor=#444444><td><br><font size=3><strong><em><center>Игрок</center></em></strong></font><br></td>
<td bgcolor=#444444><font size=3><strong><em><center>Рейтинг</center></em></strong></font></td>
<td bgcolor=#444444><center><font size=3><strong><em>Баланс </em></strong></font><font size=1><strong>( BTC )</strong></font></center></td>
<td bgcolor=#444444><font size=3><strong><em><center>Победы</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>Оповещения</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>Партии</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>Дата</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>/-/</center></em></strong></font></td> 
</tr>


<?
} // end if $block

$f='1';
$dx='1';
$numer_color='0';
for($s=2;$s<$list_message+2;$s++) {   //начало for

//$f=$f+'1';
$numer_color=$numer_color+'1';

//$dir_file_cnt[$s]=$dir_file_cnt[$s].'.txt';

$effy[$s] = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
//$dir_file_cnt[$s] = preg_replace("/.txt/", "", $dir_file_cnt[$s]);

//$color_green='#90EE90';
//$color_red='f50000';

$index_1='#444444';
$index_2='#404040';
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

//echo '<tr><td bgcolor='.$bg_color.'><strong><center>'.$f.'.'.$effy[$s].'</center></strong></td> ';

$tip_x=rand(1,8);

$zapas='<tr><td bgcolor='.$bg_color.'><strong><center>'.$f.'. <a target=_blank href=variant'.$tip_x.'/archive_doski_tip4.php?namer='.$effy[$s].'&tip='.$tip_x.'>'.$effy[$s].'</a></center></strong></td> ';
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





include ('ratings_user_clear_error.php');






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

if ( !file_exists($file_guest_p) )   {  //echo '<br>Не считались победы проигрыши1 '.$zet.':';



if($openchatdb=fopen($file_guest_p,"w")) { //echo 'Открылось для записи /btc/'.$zet;

 if(fwrite($openchatdb,'0'."\n".'0'."\n")) { }
fclose($openchatdb);
}

}

//дата 
$zet = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
$zet=$zet.'.txt';

$file_guest_d4='./guest/data_rating/'.$zet;

if ( !file_exists($file_guest_d4) )   {  //echo '<br>Не считались победы проигрыши2 '.$zet.':';



if($openchatdb=fopen($file_guest_d4,"w")) { //echo 'Открылось для записи /btc/'.$zet;

 if(fwrite($openchatdb,'/-/'."\n")) { }
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
 

if($v[2]>$v[1]) { $bg_color=$index_2_red; } else if($v[1]>$v[2]) { $bg_color=$index_1_green; }

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


if($v[0]!='1500') {
$list_summa[$s]=$list_summa[$s].' <td bgcolor='.$bg_color.'> <strong><center><font color='.$color_green.'>+'.$mex[0].'</strong></font>  <font color='.$color_red.'>-'.$mex[1].'</font> </center></td>';
                          
                          } else if($v[0]=='1500') {
$list_summa_null[$s]=$list_summa_null[$s].' <td bgcolor='.$bg_color.'> <strong><center><font color='.$color_green.'>+'.$mex[0].'</strong></font>  <font color='.$color_red.'>-'.$mex[1].'</font> </center></td>';
                          }


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























































if($v[0]!='1500') {
$list_summa[$s]=$list_summa[$s].' <td bgcolor='.$bg_color.'> <strong><center><font size=2>'.$b4.'</strong></font> </center></td>'.' <td bgcolor='.$bg_color.'> <strong><center><font size=2>'.$summa.'</strong></font> </center></td>';

$igry_total=$igry_total+$summa;
                          
                          } else if($v[0]=='1500') {
$list_summa_null[$s]=$list_summa_null[$s].' <td bgcolor='.$bg_color.'> <strong><center><font size=2>'.$b4.'</strong></font> </center></td>'.' <td bgcolor='.$bg_color.'> <strong><center><font size=2>'.$summa.'</strong></font> </center></td>';

                          }















//дата

$zet = preg_replace("/.txt/", "", $dir_file_cnt[$s]);
$zet=$zet.'.txt';

$file_guest_r2='./guest/data_rating/'.$zet;

if ( file_exists($file_guest_r2) )   { 
if($file = fopen($file_guest_r2, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($mex_x[]= fgets ($file)){$b4++;} }
fclose ($file); 

if($numer_color=='1') { $bg_color=$index_1; }
if($numer_color=='2') { $bg_color=$index_2; }

if(!$mex_x[0]) { $mex_x[0]='/-/'; }

if($v[0]!='1500') {
$list_summa[$s]=$list_summa[$s].' <td bgcolor='.$bg_color.'> <strong><center><font color=#D3D3D3>'.$mex_x[0].'</strong></font>   </center></td>';
                          
                          } else if($v[0]=='1500') {
$list_summa_null[$s]=$list_summa_null[$s].' <td bgcolor='.$bg_color.'> <strong><center><font color=#D3D3D3>'.$mex_x[0].'</strong></font>  </center></td>';
                          }


//выбор "ВЫ"

if($name==$effy[$s]) { $text='ВЫ'; }
if($name!=$effy[$s]) { $text='/-/'; }

if($v[0]!='1500') {
$list_summa[$s]=$list_summa[$s].' <td bgcolor='.$bg_color.'> <strong><center><font color=#D3D3D3>'.$text.'</strong></font>   </center></td>';
                          
                          } else if($v[0]=='1500') {
$list_summa_null[$s]=$list_summa_null[$s].' <td bgcolor='.$bg_color.'> <strong><center><font color=#D3D3D3>'.$text.'</strong></font>  </center></td>';
                          }


}  


















?>




































<?

unset($v);  
unset($vd);  
unset($vd_r);  
unset($mex);  
unset($ride);  
unset($opov);  
unset($mex_x);  

if($numer_color>'1') { $numer_color='0'; }


 }  //echo '</table></center><br>';

?>









<center><table width=80%>

<tr bgcolor=#444444><td><br><font size=3><strong><em><center>Игрок</center></em></strong></font><br></td>
<td bgcolor=#444444><font size=3><strong><em><center>Рейтинг</center></em></strong></font></td>
<td bgcolor=#444444><center><font size=3><strong><em>Баланс </em></strong></font><font size=1><strong>( BTC )</strong></font></center></td>
<td bgcolor=#444444><font size=3><strong><em><center>Победы</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>Оповещения</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>Партии</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>Дата</center></em></strong></font></td> 
<td bgcolor=#444444><font size=3><strong><em><center>/-/</center></em></strong></font></td> 
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

$igry_total=$igry_total/2;

echo '</table></center><br>

<center><table width=80%>

<tr bgcolor=#444444><td width=50%><br><font size=2><strong><em><center>Всего завершено партий</center></em></strong></font><br></td>
<td bgcolor=#444444><font size=2><strong><em><center>'.$igry_total.'</center></em></strong></font></td></tr>

</table></center><br>
';

?>

















</strong></td></tr></table><br>


<? } ?>

<? include('podval.php'); ?>