
<?
echo '<center><table width='.$width_variant2_doska_niz.'><tr><td bgcolor=>';
?>


<?

$dir = '../sea_battle2/igrok/';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$list_message=count($dir_file_cnt);

//$list_message=$list_message-'1';

echo '&nbsp;&nbsp;&nbsp;<font size=1><em>Страницу посмотрело <font size=2>'.$list_message.'</font> человек</em></font>';
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
$s4=0;
for($s=2;$s<$list_message+2;$s++) {   //начало for

$dir_file_cnt[$s] = preg_replace("/_figure/", "", $dir_file_cnt[$s]);
$dir_file_cnt[$s] = preg_replace("/_comp/", "", $dir_file_cnt[$s]);
$dir_file_cnt[$s] = preg_replace("/.txt/", "", $dir_file_cnt[$s]);

$zet1='../sea_battle2/igrok/'.$dir_file_cnt[$s].'_figure.txt';
$zet2='../sea_battle2/igrok/hod/'.$dir_file_cnt[$s].'_hod.txt';
$zet3='../sea_battle2/igrok/analiz/'.$dir_file_cnt[$s].'_analiz.txt';
$zet4='../sea_battle2/igrok/analiz/'.$dir_file_cnt[$s].'_analiz_comp.txt';
$zet5='../sea_battle2/igrok/'.$dir_file_cnt[$s].'_figure_comp.txt';


if ( file_exists($zet3) )   { 
if($file = fopen($zet3, "r")) { echo '';  }

while(!feof($file)) { 
if($mex[]= fgets ($file)){$b4++;} }
fclose ($file); 
} //else echo '<br>='.$zet;

$mex[0] = preg_replace("|[\r\n]+|", "", $mex[0]);

//echo '<br>='.$mex[0]; 

if($mex[0]=='0') {  $s4=$s4+1; //echo '<br>'.$s.'.'.$zet1; echo '<br>'.$s.'.'.$zet2; echo '<br>'.$s.'.'.$zet3;  echo '<br>'.$s.'.'.$zet4; echo '<br>'.$s.'.'.$zet5; 


if($del=='ok') { unlink ($zet1);  unlink ($zet2);  unlink ($zet3);  unlink ($zet4);   unlink ($zet5);    }
                                                  }

unset($mex);

                                                         } // end for

echo '<br>&nbsp;&nbsp;&nbsp;<em><font size=1>Всего <font size=2>'.$b4.'</font> записи ходов в архиве';

 echo '&nbsp;&nbsp;&nbsp;<a target=_blank href=list_hody.php>Список всех ходов</a>
<br> &nbsp;&nbsp;&nbsp;К удалению '.$s4.' * 3 файлов <a href=dosa.php?del=ok>Удалить</a></font></em><br>'; 

echo '</font></center><br>
</td></tr></table></center>';




                           //   } //end if $igrok14


?>