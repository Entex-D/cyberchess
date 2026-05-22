<?

$doski_tip_summ=0;

if($namer) { if(preg_match('/^[a-zA-Z0-9]+$/',$namer)) {

$dir = '../archive_doski/'.$namer.'/tip1';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip1=count($dir_file_cnt);
$doski_tip_summ=$doski_tip1+$doski_tip_summ;







$dir = '../archive_doski/'.$namer.'/tip2';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip2=count($dir_file_cnt);
$doski_tip_summ=$doski_tip2+$doski_tip_summ;













$dir = '../archive_doski/'.$namer.'/tip3';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip3=count($dir_file_cnt);
$doski_tip_summ=$doski_tip3+$doski_tip_summ;













$dir = '../archive_doski/'.$namer.'/tip4';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip4=count($dir_file_cnt);
$doski_tip_summ=$doski_tip4+$doski_tip_summ;













$dir = '../archive_doski/'.$namer.'/tip5';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip5=count($dir_file_cnt);
$doski_tip_summ=$doski_tip5+$doski_tip_summ;













$dir = '../archive_doski/'.$namer.'/tip6';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip6=count($dir_file_cnt);
$doski_tip_summ=$doski_tip6+$doski_tip_summ;













$dir = '../archive_doski/'.$namer.'/tip7';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip7=count($dir_file_cnt);
$doski_tip_summ=$doski_tip7+$doski_tip_summ;













$dir = '../archive_doski/'.$namer.'/tip8';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip8=count($dir_file_cnt);
$doski_tip_summ=$doski_tip8+$doski_tip_summ;








if($tip==1) { if($doski_tip1>$doski_v_archive) { $okay='da'; } } else
if($tip==2) { if($doski_tip2>$doski_v_archive) { $okay='da'; } } else
if($tip==3) { if($doski_tip3>$doski_v_archive) { $okay='da'; } } else
if($tip==4) { if($doski_tip4>$doski_v_archive) { $okay='da'; } } else
if($tip==5) { if($doski_tip5>$doski_v_archive) { $okay='da'; } } else
if($tip==6) { if($doski_tip6>$doski_v_archive) { $okay='da'; } } else
if($tip==7) { if($doski_tip7>$doski_v_archive) { $okay='da'; } } else
if($tip==8) { if($doski_tip8>$doski_v_archive) { $okay='da'; } } 



if($click=='da') { $doski_v_archive='1200'; }



$dosok_vsego='Досок '.$namer.' на всех вариантах найдено <font size=3>'.$doski_tip_summ.'</font>';  
$dosok_variant='&nbsp;&nbsp;&nbsp;( '.$doski_tip1.'  -  '.$doski_tip2.'  -  '.$doski_tip3.'  -  '.$doski_tip4.'  -  '.$doski_tip5.'  -  '.$doski_tip6.'  -  '.$doski_tip7.'  -  '.$doski_tip8.' ) ';
if($okay=='da') { $play_all_doski='<br><br> [ <a href=../variant'.$tip.'/archive_doski_tip4.php?namer='.$name.'&tip='.$tip.'&click=da>Показать все доски варианта '.$tip.'</a> ] '; }

}}

?>