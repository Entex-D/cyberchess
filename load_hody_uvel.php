
<table width=90%>
<tr><td class=td_center>

<center><table width=92%>
<tr><td width=1%></td><td></td><td></td><td width=1%></td></tr>

<?

$e='0';
$t='1';
$tet='1';

$summ1='0';
$summ2='0';
$summ3='0';



for($x='0';$x<$b4;$x++) { 
if($dx[$x]>' ') { 
if($x>'1') { $dx[$b4]=''; }
$dxx=$x+'1';

$ee='0';

if($tet=='1') { $color_g1='#646464'; }
if($tet=='2') { $color_g1='#606060'; }

if($style=='4' || $style_run=='4') { $style_color='#DEB887'; }
if($style=='6' || $style_run=='6') { $style_color='#D8BFD8'; }
if($style=='11' || $style_run=='11') { $style_color='#B0E0E6'; }
if($style=='16' || $style_run=='16') { $style_color='#FFE4B5'; }

if(preg_match('/взяли/',$dx[$x]) && preg_match('/Белые/',$dx[$x])) { $color_g1=$style_color; $ee='1'; $summ1=$summ1+'1'; }
if(preg_match('/взяли/',$dx[$x]) && preg_match('/Черные/',$dx[$x])) { $color_g1=$style_color; $ee='1'; $summ2=$summ2+'1'; }
if(preg_match('/детонатор/',$dx[$x])) {  $summ3=$summ3+'1'; }

if($e=='0') { $td1='<tr><td width=1%></td><td bgcolor='.$color_g1.'>'; }
if($e=='1') { $td1='<td bgcolor='.$color_g1.'>'; }

if($t=='1') { $td2='</td>'; }
if($t=='2') { $td2='</td><td width=1%></td></tr>'; }

if($ee=='1' && $style_color!='#848484') { $dex='<font color=#585858>'; $dex2='</font>'; } 
if($ee=='0') { $dex='<font color=#DCDCDC>'; $dex2='</font>'; } 

if($dx[$x]<'  ') { $dx[$x]='Пусто'; }

echo $td1.$dex.'<strong>'.$dxx.'</strong>. '.$dx[$x].$dex2.$td2;  } 
 
$color_g1='';
$color_g2='';

$e=$e+'1';
if($e>'1') { $e='0'; }

$t=$t+'1';
if($t>'2') { $t='1'; }

$tet=$tet+'1';
if($tet>'2') { $tet='0'; }

}

echo '<tr><td width=1%></td><td></td><td></td><td width=1%></td></tr>';
echo '<tr><td width=1%></td><td></td><td></td><td width=1%></td></tr>';
echo '<tr><td width=1%></td><td></td><td></td><td width=1%></td></tr>';

if($b4>'1') {
echo '<tr><td width=1%></td><td>Белые "взяли" <strong>'.$summ1.'</strong> фигур</td>
               <td>Черные "взяли" <strong>'.$summ2.'</strong> фигур</td><td width=1%></td></tr>';
                 }

if($summ3>'0') {
echo '<tr><td width=1%></td><td>Детонатор "взорвал" <strong>'.$summ3.'</strong> раз</td>
               <td></td><td width=1%></td></tr>';
                 }
echo '<tr><td width=1%></td><td></td><td></td><td width=1%></td></tr></table></center>';

echo '</td></tr></table>';

?>