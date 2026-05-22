<? if(isset($_COOKIE['name'])) { if($name==$namer) { $reset='1'; } } ?>

<HTML><HEAD><title>Список досок <? echo $namer ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</HEAD>

<? include('../shapka_load_style.php'); ?>


<center>

<? include('../shapka.php'); ?>

<? include('../panel_archive.php'); ?>

<table width=90%><tr>
<td class=td_center><font size=2><strong><em>
<?

if($namer) { if(preg_match('/^[a-zA-Z0-9]+$/',$namer)) {
$dir = '../archive_doski/'.$namer.'/tip1';
 
if (is_dir($dir))
   $dir_file_cnt = scandir($dir);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt[0], $dir_file_cnt[1]);
// и выводим кол-во
//echo count($dir_file_cnt);

$doski_tip1=count($dir_file_cnt);

echo '&nbsp;&nbsp;&nbsp;Досок '.$namer.' - варианта #1 найдено '.$doski_tip1.':&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';  

$name_zapas=$name;
$name=$namer;
include('../balance.php'); 
include('../rating.php'); 
include('../win_loss.php'); 

$name=$name_zapas;

echo '<hr width=100% class=def size=2>';

if($doski_tip1>$doski_v_archive) { $doski_tip1=$doski_v_archive; }

for($s=1;$s<$doski_tip1+2;$s++) {   //начало for

$ndoski='../archive_doski/'.$namer.'/tip1/'.$dir_file_cnt[$s].'/'.$dir_file_cnt[$s].'_hody.txt';
 $b4='0';
if($file = fopen($ndoski, "r")) {    
while(!feof($file)) { 
if($dx[]= fgets ($file)){ $b4=$b4+1;  }
 }
} 
fclose ($file);


$b4=$b4;

if($dir_file_cnt[$s]>' ') { //начало показа доски
echo '&nbsp;&nbsp;&nbsp;Доска № '.$dir_file_cnt[$s].'&nbsp;Ходов: '.$b4;
                     
if($b4>'1') {
echo '&nbsp;&nbsp;&nbsp;<a target=_blank href=archive_d_tip4_uvel.php?namer='.$namer.'&tip=1&nomer='. $dir_file_cnt[$s].'>Увеличить</a>';
                 } else if($b4<'2') { echo '&nbsp;&nbsp;&nbsp;<font size=1><strong>Не показано</strong></font>'; 
if($reset=='1') { echo '<font size=1>&nbsp;&nbsp;<a href=archive_doski_tip4.php?namer='.$namer.'&nomers='.$dir_file_cnt[$s].'&del=yes>Удалить</a></font>'; 
 } 
} // конец else
          
//echo '<br>'.$ndoski;  
   $schet_doski=$schet_doski+'1';
//echo '$schet_doski='.$schet_doski.'<br>';

$fdoski='../archive_doski/'.$namer.'/tip1/'.$dir_file_cnt[$s].'/'.$dir_file_cnt[$s].'.txt';
 $b5='0';
if($file = fopen($fdoski, "r")) {    
while(!feof($file)) { 
if($figury[]= fgets ($file)){ $b5=$b5+1;  }
 }
} 
fclose ($file);


$fstatix='../archive_doski/'.$namer.'/tip1/'.$dir_file_cnt[$s].'/'.$dir_file_cnt[$s].'_statix.txt';
 $b6='0';
if($file = fopen($fstatix, "r")) {    
while(!feof($file)) { 
if($dstatix[]= fgets ($file)){ $b6=$b6+1;  }
 }
} 
fclose ($file);

$dstatix[5] = preg_replace("|[\r\n]+|", "", $dstatix[5]);
$dstatix[2] = preg_replace("|[\r\n]+|", "", $dstatix[2]);
if($namer==$name && $dstatix[5]=='0') { echo '&nbsp;&nbsp;&nbsp;<a target=_blank href=../index.php?doska='.$namer.'&tip=1&nomer='. $dir_file_cnt[$s].'>Играть</a>'; }
if($namer!=$name && $dstatix[2]=='0') { echo '&nbsp;&nbsp;&nbsp;<a target=_blank href=../index.php?doska='.$namer.'&tip=1&nomer='. $dir_file_cnt[$s].'>Стать соперником</a>'; }

if($dstatix[1]<' ' || $figury[1]<' ') {  $nomers=$dir_file_cnt[$s]; $del='yes';}

 if($b4>'1') { // прячем доску,если 0 ходов
include('archive_doska_tip4.php');
}

echo '<br>';

if($b4>'8') { $ssr=$b4-'8'; echo 'Последние ходы: '; } else $ssr='0'; // подсчет,чтобы показывались последние 5 ходов,если ходов > 5

for($x=$ssr;$x<$b4;$x++) { 
 
if($x>'0') { if($dx[$x]==$dx[0]) { $dx[$x]=''; }}
$ser=$x+'1';
if($dx[$x]>'   ') { echo '&nbsp;&nbsp;'.$ser.'. '.$dx[$x];  } }

echo '<br>';

$dstatix[5] = preg_replace("|[\r\n]+|", "", $dstatix[5]);
$dstatix[8] = preg_replace("|[\r\n]+|", "", $dstatix[8]);

if($dstatix[5]==$namer) { $vigrish=$vigrish+'1'; 
} else if($dstatix[8]==$namer) { $proigrish=$proigrish+'1'; }

unset($figury);                                 
unset($dstatix);                                 
unset($dx);                                 

    } //конец показа доски

echo '<hr width=100% class=def size=2>';

                                               } //конец for

} else echo 'Ошибка имени';


if(!$vigrish) { $vigrish='0'; }
if(!$proigrish) { $proigrish='0'; }
echo '&nbsp;&nbsp;&nbsp;&nbsp;У игрока '.$namer.' выигрышей '.$vigrish.', проигрышей '.$proigrish;


//считываем гюесты списком

//echo '<br><br>';

$dir_n = '../archive_doski';
 
if (is_dir($dir_n))
   $dir_file_cnt_n = scandir($dir_n);
 
// Первый и второй элементы массив $dir_file_cnt это - '.' и '..'  , поэтому
unset($dir_file_cnt_n[0], $dir_file_cnt_n[1]);
// и выводим кол-во
//echo count($dir_file_cnt_n);

$doski_tip_n1=count($dir_file_cnt_n);

echo '&nbsp;&nbsp;&nbsp;Игроков всего найдено '.$doski_tip_n1.':<hr width=100% class=def size=2><br><center>';

$i='0';
for($s=0;$s<$doski_tip_n1+3;$s++) {   //начало for

echo '&nbsp;&nbsp;&nbsp;<a href=archive_doski_tip4.php?namer='.$dir_file_cnt_n[$s].'&tip=1>'.$dir_file_cnt_n[$s].'</a>';
          $i=$i+'1';
if($i=='11') { $i='0'; echo '<br>'; }                         
}
echo '</center><br>'; 
//считываем гюесты списком











} 
echo '<br><font size=1><strong>&nbsp;&nbsp;&nbsp;&nbsp;Будут показываться последние '.$doski_v_archive.' досок игрока <a href=#>'.$namer.'</a><br>
&nbsp;&nbsp;&nbsp;&nbsp;Доски и ходы обновляются после хода белых</strong></font>';
//$deske=$schet_doski_max+'1';
//echo '<br>$schet_doski_min='.$schet_doski_min;
//echo '<br>$schet_doski_max='.$schet_doski_max;
//echo '<br>$deske='.$deske;

//echo '<br><br>&nbsp;&nbsp;&nbsp;&nbsp;<a href=archive_doski_tip1.php?namer='.$namer.'&deske='.$deske.'>Следующие</a> 10 досок игрока '.$namer;
?>
<br><br></em></strong></font></td><tr></table><br></center>

<?
if($del=='yes' && $reset=='1') {

$adres='../archive_doski/'.$namer.'/tip1/'.$nomers;

//echo '$nomers='.$nomers;




// удалить папку целиком с номером доски
function my_delete_dir($mypath){
   $dir = opendir($mypath);
   while (($file = readdir($dir))){
     if (is_file($mypath."/".$file))
       unlink ($mypath."/".$file);
     elseif (is_dir($mypath."/".$file) && ($file != ".") && ($file != ".."))
       my_delete_dir ($mypath."/".$file);
    }
    closedir ($dir);
    rmdir ($mypath);
}

if(!my_delete_dir($adres)) { echo ''; }  // вызов функции
// конец удалить папку целиком с номером доски


echo "<meta http-equiv='refresh' content='1;url=archive_doski_tip4.php?namer=$namer'>";


}

//echo "<meta http-equiv='refresh' content='300;url=../variant2/archive_doski_tip4.php?namer=$namer'>";

?>

<center>
<? include('../podval.php'); ?>
</center>