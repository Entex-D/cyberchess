<?
 $base_hod_x=$base_hody; 

// считываем ходы на отдельную доску

if ( !file_exists($base_hod_x) )   {  //echo '<br>файл '.$base_hod_ip3.' отсутствует';

$openchatdb=fopen($base_hod_x,"w");

 if(fwrite($openchatdb," "."\n")) { ;  }

fclose($openchatdb);
 } 


 if($exxo[18]=='0' && $exxo[5]=='0') { //начало если не нажато отмена-то  показываем "Ваш ход (Белыми)"

echo '<br><font size=1><strong>';

// считываем ходы из отдельного файла на каждую доску

if($file = fopen($base_hod_x, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($hody[]= fgets ($file)) { $b5++; } }

fclose ($file); 


$width=$shirina;


echo '</tr></td</table><center>

<table width='.$width.' align=center bgcolor=#101010>
<tr><td width=5% class=td_center></td><td class=td_center><center>Записей ходов: '.$b5.'</center><br></td><td></td><td width=5% class=td_center></td></tr>';

$e='0';
$t='1';
$tet='1';
$summ1='0';
$summ2='0';
$summ3='0';

for($r=0;$r<$b5+1;$r++) {
$d=$r+1;
if($hody[$r]>'  ') {

$ee='0';

if($tet=='1') { $color_g='#606060'; }
if($tet=='2') { $color_g='#565656'; }
if($tet=='3') { $color_g='#565656'; }
if($tet=='4') { $color_g='#606060'; }

if($style=='4' || $style_run=='4') { $style_color='#DEB887'; }
if($style=='6' || $style_run=='6') { $style_color='#D8BFD8'; }
if($style=='11' || $style_run=='11') { $style_color='#B0E0E6'; }
if($style=='16' || $style_run=='16') { $style_color='#FFE4B5'; }

if(preg_match('/взяли/',$hody[$r]) && preg_match('/Белые/',$hody[$r])) { $color_g=$style_color; $ee='1'; $summ1=$summ1+'1'; }
if(preg_match('/взяли/',$hody[$r]) && preg_match('/Черные/',$hody[$r])) { $color_g=$style_color; $ee='1'; $summ2=$summ2+'1'; }
if(preg_match('/детонатор/',$hody[$r])) {  $summ3=$summ3+'1'; }

if($e=='0') { $td1='<tr><td width=5%></td><td bgcolor='.$color_g.'>'; }
if($e=='1') { $td1='<td bgcolor='.$color_g.'>'; }

if($t=='1') { $td2='</td>'; }
if($t=='2') { $td2='</td><td width=5%></td></tr>'; }

if($ee=='1' && $style_color!='#848484') { $dex='<font color=#505050>'; $dex2='</font>'; } 
if($ee=='0') { $dex='<font color=#DCDCDC>'; $dex2='</font>'; } 

echo $td1.$dex.$d.'. '.$hody[$r].$dex2.'<br>'.$td2;

$color_g='';

$e=$e+'1';
if($e>'1') { $e='0'; }

$t=$t+'1';
if($t>'2') { $t='1'; }

$tet=$tet+'1';
if($tet>'4') { $tet='1'; }
}                      }

} //end if $exxo18
?>

<tr><td width=5% class=td_center></td><td class=td_center><br></td><td class=td_center></td><td width=5% class=td_center></td></tr>

<? if($b5>'1') { ?>
<tr><td width=5% class=td_center></td><td class=td_center>Белые "взяли" <strong><? echo $summ1;?></strong> фигур<br></td><td class=td_center>Черные "взяли" <strong><? echo $summ2;?></strong> фигур</td><td width=5% class=td_center></td></tr>
<? } ?>

<? if($summ3>0) { ?>
<tr><td width=5% class=td_center></td><td class=td_center>Детонатор "взорвал" <strong><? echo $summ3;?></strong> раз<br></td><td class=td_center></td><td width=5% class=td_center></td></tr>
<? } ?>

<tr><td width=5% class=td_center></td><td class=td_center><br></td><td class=td_center></td><td width=5% class=td_center></td></tr>

</table></center>




<?
// проверяем черные ли владелец доски,и белые ли игрок

echo '<table width='.$width.' align=center bgcolor=#101010>
<tr><td width=5% class=td_center></td><td class=td_center><center>';


?>

<center>
<font size=3><em>
<?
if($hod_dostup=='1') {   //echo 'Ваш ход ( белыми )'; 
$no='1';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script>
<? } else 
if($hod_dostup=='2') {  //echo 'Ваш ход ( черными )'; 
$no='1';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else 
if($exxo[9]=='0' && $hod_dostup=='3') { //echo 'Первыми ходят белые';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else
 if($hod_dostup=='4') { echo 'Партия завершена,белые выиграли'; $no='2';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else 
 if($hod_dostup=='5') { echo 'Партия завершена,черные выиграли'; $no='2';
?> <script language="JavaScript">
  var hod_shto =  document.cookie;   
var hod_kuda = document.cookie; 
 </script> <? } else $no='2';
 
  if($no=='2') { //echo 'Не ваш ход; 
$hod_shto='1000'; $hod_kuda='1000'; } 
  ?>

</center></td></tr></table></center>
<?
//echo '$hod_dostup= '.$hod_dostup; 
?>