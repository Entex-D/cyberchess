<?

$dir_n = './archive_doski';
 
if (is_dir($dir_n))
   $dir_file_cnt_n = scandir($dir_n);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt_n[0], $dir_file_cnt_n[1]);
// и выводим кол-во
//echo count($dir_file_cnt_n);

$doski_tip_n1=count($dir_file_cnt_n);

echo '&nbsp;&nbsp;&nbsp;<center><font size=4>Игроков всего найдено '.$doski_tip_n1.'</font>';

if(!$crox) { echo ' <font size=2><a href=archive_all_namer.php?crox=da>не активные</a></font>'; } else echo ' <font size=2><a href=archive_all_namer.php>активные</a></font>';

?><br><table width=80%><tr>

<td bgcolor=#303030><center><br><font size=4>№</font></center></td>
<td bgcolor=#303030><center><font size=4>Игрок</font></center></td>
<td bgcolor=#303030><center><font size=4>Всего досок</font></center></td>
<td bgcolor=#303030><center><font size=4>Доски на вариантах</font></center></td>
<td bgcolor=#303030><center><font size=4>Дата посещения</font></center></td>

</tr><?

$i='1';
for($s=2;$s<$doski_tip_n1+2;$s++) {   //начало for

include('./vsego_doski_archive_podval2.php');

if($dir_file_cnt_n[$s]==$name) { $text_done=' / Вы'; } else $text_done='';

if($dobro_d=='da' || $crox=='da') {
echo '<tr><td width=4% bgcolor=#363636><center>'.$i.'</center></td><td bgcolor=#464646><center>&nbsp;&nbsp;&nbsp;[[- <a href=variant'.$tip.'/archive_doski_tip4.php?namer='.$dir_file_cnt_n[$s].'&tip='.$tip.'>'.$dir_file_cnt_n[$s].'</a>'.$text_done.' -]]</center></td>
<td bgcolor=#363636><center>'.$dosok_vsego.'</center></td>
<td bgcolor=#464646><center><br>'.$dosok_variant.'</center></td>
<td bgcolor=#363636><center><br>'.$v[0].'</center></td>
</tr>';

$i=$i+'1';
}

$dosok_all=$dosok_all+$doski_tip_summ;

}
echo '</center><br>'; 
//считываем гюесты списком

?></table>

<table width=80%><tr><td bgcolor=#404040><center><br><a href=#>[[</a> Всего досок со всех игроков: <font size=4><? echo $dosok_all; ?></font> <a href=#>]]</a><br><br></center></td></tr></table>
<table width=80%><tr><td bgcolor=#404040><center><br><a href=#>[[</a> Игроков без досок: <font size=4><? echo $offline_igrok; ?></font> <a href=#>]]</a><br><br></center></td></tr></table>

<br>

<? include('./ochki/vsego_igr_write.php'); ?>