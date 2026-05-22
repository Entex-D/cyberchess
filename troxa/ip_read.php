
<?

if($desa!=$desa_parol) { exit(); }

$width='100%';
?>

<center><table width=<? echo $width; ?>><tr>

<td bgcolor=#404040><br><strong><font size=1><center>№  / Дата посещения</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>IP адрес</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Логин</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Вариант</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Игра</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>Статус</center></font></strong><br></td>

</tr>



<? 


$dfr2='../troxa/ip_index.txt'; 

if ( !file_exists($dfr2) ) { 

$openchatdb=fopen($dfr2,"w");

 if(fwrite($openchatdb,' ')) {   } 

fclose($openchatdb);
  
} 





$bqr4='0';
$s9='../troxa/ip_index.txt';

 $ChatDB9=file($s9);

while($a=array_pop($ChatDB9))
{
list($times,$ip,$login,$variant,$igra)=split(",",$a,5);

$bgr4=$bgr4+'1';
if($times!='#') { $data=$times; } else $data=$bgr4;
$status='-';

$variant = preg_replace("|[\n\r]+|", "", $variant);
$variant = preg_replace("|[ ]+|", "", $variant);

$igra = preg_replace("|[\n\r]+|", "", $igra);
//$igra = preg_replace("|[ ]+|", "", $igra);

if(preg_match('/'.$ip_adress.'/',$ip)) { $status='<a href=troxa.php?delot=all>Удалить все</a>'; }


if($variant=='0') { $color_n1='#606060'; $variant='Нет типа игры';} else $color_n1='#404040';


if($igra=='0')  { $color_n2='#363636'; $igra='Не играет'; $color_n3='#fff'; } else 

if($igra!='0')  { 

if($style=='4') { $color_n2='#DEB887'; }
if($style=='6') { $color_n2='#D8BFD8'; } 
if($style=='11') { $color_n2='#B0E0E6'; }
if($style=='16') { $color_n2='#FFE4B5'; }

$color_n3='#000';  }

echo '
<tr>

<td bgcolor=#464646><br><strong><font size=1><center>'.$bgr4.'.&nbsp;'.$data.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$ip.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$login.'</center></font></strong><br></td>
<td bgcolor='.$color_n1.'><br><strong><font size=1><center>'.$variant.'</center></font></strong><br></td>
<td bgcolor='.$color_n2.'><br><strong><font size=1 color='.$color_n3.'><center>'.$igra.'</center></font></strong><br></td>
<td bgcolor=#464646><br><strong><font size=1><center>'.$status.'</center></font></strong><br></td>

</tr>
        ';                                                                       

                 }



echo '</table></center>';

if($bgr4=='0') { ?>
<center><table width=<? echo $width; ?>
<? echo '<tr><td bgcolor=#404040 width=100%><br><strong><font size=1><center>Нет сохраненных IP адресов</center></font></strong><br></td></tr></table></center>';
                 }


?>