<?
$dir_n = '../archive_doski';
 
if (is_dir($dir_n))
   $dir_file_cnt_n = scandir($dir_n);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt_n[0], $dir_file_cnt_n[1]);
// и выводим кол-во
//echo count($dir_file_cnt_n);

$doski_tip_n1=count($dir_file_cnt_n);

?>

<center><br>
<table width=40%><tr>

<td bgcolor=#444444><center><br><font size=4>[[ <a href=../archive_all_namer.php>Список <? echo $doski_tip_n1; ?> игроков</a> ]]</font><br><br></center></td>

</tr></table>
</center>