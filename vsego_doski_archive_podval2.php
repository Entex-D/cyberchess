<?

if(!$tip) { $tip=1; }

unset($dir_file_cnt);

$doski_tip_summ=0;

$namer_d=$dir_file_cnt_n[$s];

if($namer_d) { if(preg_match('/^[a-zA-Z0-9]+$/',$namer_d)) {

$dir = './archive_doski/'.$namer_d.'/tip1';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip1=count($dir_file_cnt);
$doski_tip_summ=$doski_tip1+$doski_tip_summ;







$dir = './archive_doski/'.$namer_d.'/tip2';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip2=count($dir_file_cnt);
$doski_tip_summ=$doski_tip2+$doski_tip_summ;













$dir = './archive_doski/'.$namer_d.'/tip3';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip3=count($dir_file_cnt);
$doski_tip_summ=$doski_tip3+$doski_tip_summ;













$dir = './archive_doski/'.$namer_d.'/tip4';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip4=count($dir_file_cnt);
$doski_tip_summ=$doski_tip4+$doski_tip_summ;













$dir = './archive_doski/'.$namer_d.'/tip5';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip5=count($dir_file_cnt);
$doski_tip_summ=$doski_tip5+$doski_tip_summ;













$dir = './archive_doski/'.$namer_d.'/tip6';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip6=count($dir_file_cnt);
$doski_tip_summ=$doski_tip6+$doski_tip_summ;













$dir = './archive_doski/'.$namer_d.'/tip7';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip7=count($dir_file_cnt);
$doski_tip_summ=$doski_tip7+$doski_tip_summ;













$dir = './archive_doski/'.$namer_d.'/tip8';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip8=count($dir_file_cnt);
$doski_tip_summ=$doski_tip8+$doski_tip_summ;




unset($v);

$file_guest_mx='./guest/data_rating/'.$namer_d.'.txt';

if ( file_exists($file_guest_mx) )   { 
if($file = fopen($file_guest_mx, "r")) { echo ''; $b4=0; }

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

}

if($v[0]<' ') { $v[0]='/-/'; }



if($tip==1) { if($doski_tip1>$doski_v_archive) { $okay='da'; } } else
if($tip==2) { if($doski_tip2>$doski_v_archive) { $okay='da'; } } else
if($tip==3) { if($doski_tip3>$doski_v_archive) { $okay='da'; } } else
if($tip==4) { if($doski_tip4>$doski_v_archive) { $okay='da'; } } else
if($tip==5) { if($doski_tip5>$doski_v_archive) { $okay='da'; } } else
if($tip==6) { if($doski_tip6>$doski_v_archive) { $okay='da'; } } else
if($tip==7) { if($doski_tip7>$doski_v_archive) { $okay='da'; } } else
if($tip==8) { if($doski_tip8>$doski_v_archive) { $okay='da'; } } 



if($click=='da') { $doski_v_archive='1200'; }

if($doski_tip1>0) { $emde1='<a href=../variant1/archive_doski_tip4.php?namer='.$namer_d.'&tip=1><font size=3>'.$doski_tip1.'</font></a>'; } else $emde1=$doski_tip1;
if($doski_tip2>0) { $emde2='<a href=../variant2/archive_doski_tip4.php?namer='.$namer_d.'&tip=2><font size=3>'.$doski_tip2.'</font></a>'; } else $emde2=$doski_tip2;
if($doski_tip3>0) { $emde3='<a href=../variant3/archive_doski_tip4.php?namer='.$namer_d.'&tip=3><font size=3>'.$doski_tip3.'</font></a>'; } else $emde3=$doski_tip3;
if($doski_tip4>0) { $emde4='<a href=../variant4/archive_doski_tip4.php?namer='.$namer_d.'&tip=4><font size=3>'.$doski_tip4.'</font></a>'; } else $emde4=$doski_tip4;
if($doski_tip5>0) { $emde5='<a href=../variant5/archive_doski_tip4.php?namer='.$namer_d.'&tip=5><font size=3>'.$doski_tip5.'</font></a>'; } else $emde5=$doski_tip5;
if($doski_tip6>0) { $emde6='<a href=../variant6/archive_doski_tip4.php?namer='.$namer_d.'&tip=6><font size=3>'.$doski_tip6.'</font></a>'; } else $emde6=$doski_tip6;
if($doski_tip7>0) { $emde7='<a href=../variant7/archive_doski_tip4.php?namer='.$namer_d.'&tip=7><font size=3>'.$doski_tip7.'</font></a>'; } else $emde7=$doski_tip7;
if($doski_tip8>0) { $emde8='<a href=../variant8/archive_doski_tip4.php?namer='.$namer_d.'&tip=8><font size=3>'.$doski_tip8.'</font></a>'; } else $emde8=$doski_tip8;

if($doski_tip1>0 || $doski_tip2>0 || $doski_tip3>0 || $doski_tip4>0 || $doski_tip5>0 || $doski_tip6>0 || $doski_tip7>0 || $doski_tip8>0) { $dobro_d='da'; } else { $offline_igrok=$offline_igrok+1; $dobro_d='no'; }

$dosok_vsego='У '.$namer_d.' всего <font size=3>'.$doski_tip_summ.'</font> досок';  
$dosok_variant='&nbsp;&nbsp;&nbsp;'.$emde1.'  -  '.$emde2.'  -  '.$emde3.'  -  '.$emde4.'  -  '.$emde5.'  -  '.$emde6.'  -  '.$emde7.'  -  '.$emde8.'';
 $play_all_doski='<br><a href=../variant'.$tip.'/archive_doski_tip4.php?namer='.$namer_d.'&tip='.$tip.'&click=da>Показать все доски варианта '.$tip.'</a>'; 

}}


?>