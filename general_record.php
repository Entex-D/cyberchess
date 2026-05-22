<? 
// записываем все ходы в чат нижний 

$base_hod8='ip/hod/base_hod.txt';
if ( !file_exists($base_hod8) )   {  echo 'файл '.$base_hod.' отсутствует';
$openchatdb=fopen($base_hod8,"w");
 if(fwrite($openchatdb,"1"."\n")) { ;  }
fclose($openchatdb);
 } 


 $width='80%';

echo '<br><center><table bgcolor=#202020 width=92%><tr><td width=5% class=td_center bgcolor=#202020></td><td width='.$width.' class=td_center><font size=2><strong>';

if($hod_two!='1000') {

  }

// считываем из файла ходы записанные

unset($zapisi);

if($file = fopen($base_hod8, "r")) { echo ''; $bt5=0;} 

while(!feof($file)) { 
if($zapisi[]= fgets ($file)){$bt5++;} }

fclose ($file); 

$sb5=$bt5-'1';
echo '<br>Записей ходов - '.$sb5.'&nbsp;&nbsp;<a target=_blank href=vse_hody.php>Список всех ходов</a><br><br></td><td width=5%></td></tr>';

for($r=$bt5-1;$r>$bt5-20-1;$r--) {

if(preg_match('/Белые/',$zapisi[$r])) { $color_m='#606060'; 
} else if(preg_match('/Черные/',$zapisi[$r])) { $color_m='#565656'; } else $color_m='#505050';

echo '<tr><td class=td_center></td><td bgcolor='.$color_m.'>'.$r.'. '.$zapisi[$r].'</td><td class=td_center></td></tr>';
}

?>

<tr><td></td><td><br><font size=1><strong><em>Показаны последние 20 ходов</em></strong><font></strong></font></td><td></td><tr></table></center>