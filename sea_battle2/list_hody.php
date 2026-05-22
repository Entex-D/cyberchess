<? include('../sea_battle2/load_style.php'); ?>

<?
echo '<center><table width=700 bgcolor=><tr><td bgcolor=><center><br><font size=5><strong>Список всех ходов</strong></font><br><br></center></td></tr><table><br>';


?>










<?
echo '<center><table width=700 bgcolor=><tr><td bgcolor=><br>';
?>




<?

$dir1 = '../sea_battle2/igrok/hod/';
 
if (is_dir($dir1))
   $dir_file_cnt_n = scandir($dir1);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt_n[0], $dir_file_cnt_n[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$list_message_n=count($dir_file_cnt_n);

//$list_message=$list_message-'1';

//echo '&nbsp;&nbsp;&nbsp;<font size=1><em> <font size=2>'.$list_message_n.'</font> человек</em></font><br>';
?>


















<?

//if($nick=='Igrok14') {

$b4=0;
for($s=2;$s<$list_message_n+2;$s++) {   //начало for



$zet='../sea_battle2/igrok/hod/'.$dir_file_cnt_n[$s];



if ( file_exists($zet) )   { 
if($file = fopen($zet, "r")) { echo ''; $listed=0; }

while(!feof($file)) { 
if($mex[]= fgets ($file)){$b4++;  $listed=$listed+1;} }
fclose ($file); 
} //else echo '<br>='.$zet;


if($mex[0]<'  ' && $mex[0]!='0') { $listed=$listed-1; $b4=$b4-'1'; }

include('../sea_battle2/list_hody_read.php');

unset($mex);


                                                         } // end for

echo '<br>&nbsp;&nbsp;&nbsp;<em><font size=1>Всего <font size=2>'.$b4.'</font> записи ходов в архиве</font></em><br>';


echo '</font></center><br>
</td></tr></table></center>';




                           //   } //end if $igrok14


?>