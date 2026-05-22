<?


// считываем ходы на отдельную доску

$base_hod_ip2='../sea_battle2/igrok/hod/'.$nick.'_hod.txt'; 

if ( !file_exists($base_hod_ip2) )   { 

$openchatdb=fopen($base_hod_ip2,"w");

 if(fwrite($openchatdb,'')) { ;  }

fclose($openchatdb);
 } 


// считываем ходы из отдельного файла на каждую доску

if($file = fopen($base_hod_ip2, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($hody[]= fgets ($file)) { $b5++; } }

fclose ($file); 



echo '<center><table width='.$width_variant2_doska_niz.' bgcolor=#202020>
<tr><td width=5%></td><td><center>Записей ходов: '.$b5.'</center><br></td><td></td><td width=5%></td></tr>';

$e='0';
$t='1';
$tet='1';
$summ1='0';
$summ2='0';
$death1='0';
$death2='0';

for($r=$b5+1;$r>-1;$r--) {
$d=$r+1;
if($hody[$r]>'  ') {

$ee='0';

if($tet=='1') { $color_g='#484848'; }
if($tet=='2') { $color_g='#424242'; }
if($tet=='3') { $color_g='#424242'; }
if($tet=='4') { $color_g='#484848'; }

if($style_run=='4') { $style_color='#DEB887'; }
if($style_run=='6') { $style_color='#D8BFD8'; }
if($style_run=='11') {  $style_color='#B0E0E6';  }
if($style_run=='12') {  $style_color='#9400D3';  }
if($style_run=='16') {  $style_color='#FFE4B5';  } 

if(preg_match('/ранили/',$hody[$r]) && preg_match('/Человек/',$hody[$r])) { $color_g=$style_color; $ee='1'; $summ1=$summ1+'1'; }
if(preg_match('/ранил/',$hody[$r]) && preg_match('/Компьютер/',$hody[$r])) { $color_g=$style_color; $ee='1'; $summ2=$summ2+'1'; }

if(preg_match('/убили/',$hody[$r]) && preg_match('/Человек/',$hody[$r])) { $color_g=$style_color; $ee='1'; $summ1=$summ1+'1'; $death1=$death1+'1'; }
if(preg_match('/убил/',$hody[$r]) && preg_match('/Компьютер/',$hody[$r])) { $color_g=$style_color; $ee='1'; $summ2=$summ2+'1';  $death2=$death2+'1';  }

if($e=='0') { $td1='<tr><td width=5%></td><td bgcolor='.$color_g.'>'; }
if($e=='1') { $td1='<td bgcolor='.$color_g.'>'; }

if($t=='1') { $td2='</td>'; }
if($t=='2') { $td2='</td><td width=5%></td></tr>'; }

if($ee=='1' && $style_color!='#C0C0C0') { $dex='<font color=#505050>'; $dex2='</font>'; } 
if($ee=='0') { $dex='<font color=#DCDCDC>'; $dex2='</font>'; } 

echo $td1.$dex.$d.'. '.$hody[$r].'<br>'.$dex2.$td2;

$color_g='';

$e=$e+'1';
if($e>'1') { $e='0'; }

$t=$t+'1';
if($t>'2') { $t='1'; }

$tet=$tet+'1';
if($tet>'4') { $tet='1'; }
}                      }

//} //end if $exxo18
?>

<tr><td width=5%></td><td><br></td><td></td><td width=5%></td></tr>


<? if($b5>'1') { ?>
<tr>
<td width=5%></td>
<td>Человек "ранил" <strong><? echo $summ1;?></strong> , "убил" <strong><? echo $death1; ?></strong> кораблей</td>
<td>Компьютер "ранил" <strong><? echo $summ2;?></strong> , "убил" <strong><? echo $death2; ?></strong> кораблей</td>
<td width=5%></td></tr>
<? } ?>
<tr><td width=5%></td><td><br></td><td></td><td width=5%></td></tr>

</table></center>