<? include('shapka_load_style.php'); ?>




<?
$base_hod='logi.txt';

// считываем из файла ходы записанные

if($file = fopen($base_hod, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($zapisi[]= fgets ($file)){$b5++;} }

fclose ($file); 

?><center>

<? include('shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>ЛОГИ ПАРТИЙ "КИБЕРШАХМАТ"</a> </strong><br><br></font></center></td></tr></table>

<br>

<table width=90%><tr>
<td width=7% class=td_center></td><td class=td_center><font size=2><strongl><em>
<br>&nbsp;&nbsp;&nbsp;Записей логов - <? echo $b5; ?>&nbsp;&nbsp;&nbsp;

<? if(!$logi && !$logi_name) { ?>
&nbsp;&nbsp;&nbsp;<a href=logi.php?logi=ok>Все логи</a> [ <? echo $b5; ?> ]
&nbsp;&nbsp;&nbsp;Последние логи [ 100 ]
<? if($name) { ?>&nbsp;&nbsp;&nbsp;<a href=logi.php?logi_name=ok>Логи с моим ником</a> [ <? echo $name; ?> ] <? } ?>
<? } ?>

<? if($logi=='ok') { ?>
&nbsp;&nbsp;&nbsp;Все логи [ <? echo $b5; ?> ]
&nbsp;&nbsp;&nbsp;<a href=logi.php>Последние логи</a> [ 100 ]
<? if($name) { ?>&nbsp;&nbsp;&nbsp;<a href=logi.php?logi_name=ok>Логи с моим ником</a> [ <? echo $name; ?> ] <? } ?>
<? } ?>

<? if($logi_name=='ok') { ?>
&nbsp;&nbsp;&nbsp;<a href=logi.php?logi=ok>Все логи</a> [ <? echo $b5; ?> ]
&nbsp;&nbsp;&nbsp;<a href=logi.php>Последние логи</a> [ 100 ]
<? if($name) { ?>&nbsp;&nbsp;&nbsp;Логи с моим ником [ <? echo $name; ?> ] <? } ?>
<? } ?>

<br><br></td><td width=7% class=td_center></td></tr>

<?

if($b5<'100') { $ssr=$b5+'1'; } 
if($logi!=ok) { $ssr='100'; } 
if($logi==ok) { $ssr=$b5; } 
if($logi_name==ok) { $ssr=$b5; } // подсчет,чтобы показывались последние 100 логов,если логов > 100

$t='0';
for($r=$b5-1;$r>$b5-$ssr-2;$r--) {
$zapisi[$r] = preg_replace("|[\n\r]+|", "", $zapisi[$r]);
$d=$r+'1';

if($t=='0') { $color_n='#565656'; } else if($t=='1') { $color_n='#606060'; } else $color_n='#505050';

if($logi_name!=ok) {
echo '<tr><td class=td_center></td><td bgcolor='.$color_n.'>'.$d.'.&nbsp;'.$zapisi[$r].'<br></td><td class=td_center></td></tr>';
}

if($logi_name==ok) {

$ddr=$ddr+'1';
if(preg_match('/'.$name.'/',$zapisi[$r])) { 
echo '<tr><td class=td_center></td><td bgcolor='.$color_n.'>'.$ddr.'.&nbsp;'.$zapisi[$r].'<br></td><td class=td_center></td></tr>';
}}

$t=$t+'1';
if($t>'1') { $t='0'; }
}

if($b5>'2000') { $del='Ok'; include('logi_rezet2000.php'); }

?>

<tr><td></td><td><br></td><td></td></tr>

</table><br>





<? include('podval.php'); ?>





</center>