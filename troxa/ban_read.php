

<?

if($desa!=$desa_parol) { exit(); }

$width='100%';
?>

<center><table width=<? echo $width; ?>><tr>

<td bgcolor=#303030><br><strong><font size=1><center>Дата бана</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>IP адрес</center></font></strong><br></td>
<td bgcolor=#303030><br><strong><font size=1><center>Логин</center></font></strong><br></td>

</tr>







<?








$bqr4='0';
$s9='../ban/ban_name.txt';

 $ChatDB9=file($s9);

while($a=array_pop($ChatDB9))
{
list($times,$ip,$login)=split(":",$a,3);

$bgr4=$bgr4+'1';
if($times!='#') { $data=$times; } else $data=$bgr4;
$status='-';

if($login>' ') {

echo '
<tr>

<td bgcolor=#404040><br><strong><font size=1><center>'.$data.'</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>'.$ip.'</center></font></strong><br></td>
<td bgcolor=#404040><br><strong><font size=1><center>'.$login.'</center></font></strong><br></td>

</tr>
        ';                                                                       
                 }
                 }



echo '</table></center>';

if($bgr4=='0') { ?>
<center><table width=<? echo $width; ?>
<? echo '<tr><td bgcolor=#404040 width=100%><br><strong><font size=1><center>Нет сохраненных IP адресов</center></font></strong><br></td></tr></table></center>';
                 }

















echo '<tr><td bgcolor=#525252><br><br></td></tr></table></center><br>';



?>