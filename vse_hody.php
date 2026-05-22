<? include('shapka_load_style.php'); ?>




<?
$base_hod='ip/hod/base_hod.txt';

// считываем из файла ходы записанные

if($file = fopen($base_hod, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($zapisi[]= fgets ($file)){$b5++;} }

fclose ($file); 

?><center>


<table width=80%>
<tr><td width=5%></td><td class=td_center><center><font size=4><br><strong>Список всех ходов Кибершахмат</strong><br><br></font></center></td><td width=5%></td></tr>
<?

echo '<tr><td width=5%></td><td class=td_center><br><strong>Записей ходов - '.$b5.'</strong><br><br></td><td width=5%></td></tr>';

if($b5>'250') { $sec=$b5-'250'; } else $sec='0';

$e='0';

for($r=$b5;$r>$sec;$r--) {

if($e=='0') { $bgcolor='#606060'; }
if($e=='1') { $bgcolor='#565656'; }

if($zapisi[$r]>' ') {
echo '<tr><td width=5%></td><td bgcolor='.$bgcolor.'>'.$r.'. '.$zapisi[$r].'<br></td><td width=5%></td></tr>';
                          }
$e=$e+'1';
if($e>'1') { $e='0'; }
}

echo '<tr><td width=5%></td><td class=td_center><br><strong>Показаны последние 250 ходов</strong><br><br></td><td width=5%></td></tr>';
?>

<? if($b5>'2000') { $del='Ok'; include('vse_hody_reset2000.php'); } ?>

<tr><td width=5%></td><td class=td_center><br></td><td width=5%></td></tr></table><br></center>