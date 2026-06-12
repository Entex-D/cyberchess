<? include('load/opoveshenie_index_load.php'); ?>
<? include('load/chats_user_index_load.php'); ?>
<? include('load/feedback_index_load.php'); ?>
<? include('load/run_game_name.php'); ?>





<? include('./shapka_load_style.php'); ?>


</head>














<?
//добавление про админку
 $ip=$_SERVER['REMOTE_ADDR'];
if(preg_match('/'.$ip_adress.'/',$ip)) { $troxa_n='Da'; }
//добавление админку
?>



<table width="100%"><tr><td> 

<ul id="m_menu">

<ul>


<? if($troxa_n=='Da') { ?>

<li><a  href=../troxa/troxa.php>Troxa</a>
<ul>
</ul>

<? } ?>



<li><a  href="../logi.php">Логи</a>
<ul>
</ul>











<li>


<?
if($name) {
if(!$tip) { $gip=rand(1,2); } else $gip=$tip;
if($gip) { echo '<a  href=../variant'.$gip.'/archive_doski_tip4.php?namer='.$name.'&tip='.$gip.'>Архив</a>
<ul>
<li><a  href=../archive_all_namer.php>Список игроков</a></li>
</ul>
'; }
               }
?>

<ul>
</ul>



<li><a  href=#>Правила</a>
<ul>
<li><a  href=../analiz_neiro.php>Анализ от нейросети</a></li>
<li><a  href=../analiz_neiro2.php>Почему здесь не играют</a></li>
<li><a  href=../analiz_neiro3.php>Это мёртвая игра?</a></li>
<li><a  href=../rules.php>Клетки</a></li>
<li><a  href=../figure.php>Ходы фигур >>></a>
<ul>
<li><a  href=../figure/all_figure.php>Фигуры крупно</a></li>
</ul>

<li><a  href=../opisanie_dosok/1.php>Правила варианта #1</a></li>
<li><a  href=../opisanie_dosok/2.php>Правила варианта #2</a></li>
<li><a  href=../opisanie_dosok/3.php>Правила варианта #3</a></li>
<li><a  href=../opisanie_dosok/4.php>Правила варианта #4</a></li>
<li><a  href=../opisanie_dosok/5.php>Правила варианта #5</a></li>
<li><a  href=../opisanie_dosok/6.php>Правила варианта #6</a></li>
<li><a  href=../opisanie_dosok/7.php>Правила варианта #7</a></li>
<li><a  href=../opisanie_dosok/8.php>Правила варианта #8</a></li>
</ul>





<li><a  href=#>Играть</a>
<ul>

<? if($name) { ?>

<?

if($nomer || $nomer_doski) { $gge='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer2 || $nomer_doski2) { $gge2='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge2='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer3 || $nomer_doski3) { $gge3='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge3='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer4 || $nomer_doski4) { $gge4='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge4='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer5 || $nomer_doski5) { $gge5='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge5='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer6 || $nomer_doski6) { $gge6='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge6='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer7 || $nomer_doski7) { $gge7='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge7='<img src=../picture/igrok_status/offline.jpg width=12 />'; 
if($nomer8 || $nomer_doski8) { $gge8='<img src=../picture/igrok_status/online.jpg width=10 />'; } else $gge8='<img src=../picture/igrok_status/offline.jpg width=12 />'; 




if($nomer || $nomer_doski) { 

$sxx='./archive_doski/'.$name.'/tip1/'.$nomer_doski.'/'.$nomer_doski.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth=$exxo[2];
unset($exxo);

}

 } 




if($nomer2 || $nomer_doski2) { 

$sxx='./archive_doski/'.$name.'/tip2/'.$nomer_doski2.'/'.$nomer_doski2.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth2=$exxo[2];
unset($exxo);
}

 } 






if($nomer3 || $nomer_doski3) { 

$sxx='./archive_doski/'.$name.'/tip3/'.$nomer_doski3.'/'.$nomer_doski3.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth3=$exxo[2];
unset($exxo);
}

 } 






if($nomer4 || $nomer_doski4) { 

$sxx='./archive_doski/'.$name.'/tip4/'.$nomer_doski4.'/'.$nomer_doski4.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth4=$exxo[2];
unset($exxo);
}

 } 






if($nomer5 || $nomer_doski5) { 

$sxx='./archive_doski/'.$name.'/tip5/'.$nomer_doski5.'/'.$nomer_doski5.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth5=$exxo[2];
unset($exxo);
}

 } 






if($nomer6 || $nomer_doski6) { 

$sxx='./archive_doski/'.$name.'/tip6/'.$nomer_doski6.'/'.$nomer_doski6.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth6=$exxo[2];
unset($exxo);
}

 } 






if($nomer7 || $nomer_doski7) { 

$sxx='./archive_doski/'.$name.'/tip7/'.$nomer_doski7.'/'.$nomer_doski7.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth7=$exxo[2];
unset($exxo);
}

 } 






if($nomer8 || $nomer_doski8) { 

$sxx='./archive_doski/'.$name.'/tip8/'.$nomer_doski8.'/'.$nomer_doski8.'_statix.txt';

if ( file_exists($sxx) )   {  //echo 'файл '.$sxx.' присутствует';

if($file = fopen($sxx, "r")) {  echo '' ; $b4=0;} 
while(!feof($file)) { 
if($exxo[]= fgets ($file)){ $b4=$b4+1; }
 }
fclose ($file);

$exxo[0] = preg_replace("|[\r\n]+|", "", $exxo[0]);
$exxo[1] = preg_replace("|[\r\n]+|", "", $exxo[1]);
$exxo[2] = preg_replace("|[\r\n]+|", "", $exxo[2]);

$tth8=$exxo[2];
unset($exxo);
}

 } 



if($tth=='0') { $tth='Нету'; }
if($tth2=='0') { $tth2='Нету'; }
if($tth3=='0') { $tth3='Нету'; }
if($tth4=='0') { $tth4='Нету'; }
if($tth5=='0') { $tth5='Нету'; }
if($tth6=='0') { $tth6='Нету'; }
if($tth7=='0') { $tth7='Нету'; }
if($tth8=='0') { $tth8='Нету'; }



?>

<li><a  href=../index.php?tip=1&s=4>Вариант #1 [ <? echo $gge.' '.$tth; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=1&s=4>12х8, фигуры: ястреб, медведь, призрак</a></li>
</ul>


<li><a  href=../index.php?tip=2&s=4>Вариант #2 [ <? echo $gge2.' '.$tth2; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=2&s=4>12х8, фигуры: легенда, дельфин, ёжик</a></li>
</ul>


<li><a  href=../index.php?tip=3&s=4>Вариант #3 [ <? echo $gge3.' '.$tth3; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=3&s=4>12х8, фигуры: стрела, дракон, отшельник</a></li>
</ul>


<li><a  href=../index.php?tip=4&s=4>Вариант #4 [ <? echo $gge4.' '.$tth4; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=4&s=4>12х8, фигуры: звезда, сюрприз, сердце, крепость</a></li>
</ul>


<li><a  href=../index.php?tip=5&s=4>Вариант #5 [ <? echo $gge5.' '.$tth5; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=5&s=4>12х8, фигуры: медведь, ястреб, призрак</a></li>
</ul>


<li><a  href=../index.php?tip=6&s=4>Вариант #6 [ <? echo $gge6.' '.$tth6; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=6&s=4>12х8, фигуры: гений, insider и паук</a></li>
</ul>


<li><a  href=../index.php?tip=7&s=4>Вариант #7 [ <? echo $gge7.' '.$tth7; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=7&s=4>8х8, фигуры: классика</a></li>
</ul>

<li><a  href=../index.php?tip=8&s=4>Вариант #8 [ <? echo $gge8.' '.$tth8; ?> ]</a>
<ul>
<li><a  href=../index.php?tip=8&s=4>10х8, фигуры: ястреб, медведь, призрак</a></li>
</ul>

<? } else { ?><li><a  href=>Войдите на сайт, чтобы играть</a> <? } ?>

</ul>






<? if($name) {  ?>

<li><a href=#><? echo $name; ?> </a>
<ul>
<li><a  href=../anketa.php>Ваши игры</a></li>
<li><a  href=../opoveshenie/opoveshenie.php>Оповещения ( <? echo $bd4; ?> )</a></li>
<li><a  href=../anketa_run_game.php>Вызовы Вам ( <? echo $bds4; ?> )</a></li>
<li><a href=../run_game_call.php>Предложить игру</a></li>
</ul>

<? } ?>


<?

if(!$name) { $name='Гость'; }

if($zvuki=='11') { $gge='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($zvuki=='6') { $gge='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($zvuki_hody=='11') { $hht='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($zvuki_hody=='6') { $hht='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($new_kletki=='11') { $vvb='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($new_kletki=='6') { $vvb='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($new_transform=='11') { $ddf='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($new_transform=='6') { $ddf='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($new_transform_magic=='11') { $mms='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($new_transform_magic=='6') { $mms='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($change_bomb=='11') { $mmg='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($change_bomb=='6') { $mmg='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($change_all=='11') { $mmd='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($change_all=='6') { $mmd='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($new_vhod=='11') { $ddg='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($new_vhod=='6') { $ddg='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($dobro_color=='11') { $mmb='<img src=../picture/igrok_status/online.jpg width=10 />'; } else
if($dobro_color=='6') { $mmb='<img src=../picture/igrok_status/offline.jpg width=12 />'; }

if($style_run=='16') { $qqw='Св. Желтый'; } else
if($style_run=='4') { $qqw='Т. желтый'; } else
if($style_run=='6') { $qqw='Розовый'; } else
if($style_run=='11') { $qqw='Кристальный'; } 


if($style_figure=='16') { $qqr='4'; } else
if($style_figure=='4') { $qqr='3'; } else
if($style_figure=='6') { $qqr='2'; } else
if($style_figure=='11') { $qqr='1'; }


?>




<li><a  href=#>Настройки</a>
<ul>
<li><a  href=../change_style.php>Сменить стиль  [ Стиль <? echo $qqw; ?> ] </a></li>
<li><a  href=../change_figure.php>Сменить вид фигур  [ Вид фигур <? echo $qqr; ?> ] </a></li>
<li><a  href=../login_name.php>Сменить логин [ Логин <? echo $name; ?> ] </a></li>
<li><a  href=../change_zvuk.php>Вкл / Откл приветствия [ <? echo $gge; ?> ] </a></li>
<li><a  href=../change_zvuk_hody.php>Вкл / Откл звуки ходов  [ <? echo $hht; ?> ] </a></li>
<li><a  href=../change_new_kletki.php>Вкл / Откл клетки  [ <? echo $vvb; ?> ] </a></li>
<li><a  href=../change_transform.php>Вкл / Откл трансформацию  [ <? echo $ddf; ?> ] </a>

<ul>
<li><a  href=#> Для Профессионалов </a></li>
</ul>

<li><a  href=../change_transformation.php>Вкл / Откл превращение пешки  [ <? echo $mms; ?> ] </a>

<ul>
<li><a  href=#> Для Профессионалов </a></li>
</ul>

<li><a  href=../change_bomb.php>Вкл / Откл бомбы и домики  [ <? echo $mmg; ?> ] </a>

<ul>
<li><a  href=#> Для Профессионалов </a></li>
</ul>

<li><a  href=../change_color.php>Вкл / Откл подсветку  [ <? echo $mmb; ?> ] </a>

<ul>
<li><a  href=#> Для Профессионалов </a></li>
</ul>

<li><a  href=../change_all.php>Вкл / Откл все новшества  [ <? echo $mmd; ?> ] </a></li>
<li><a  href=../change_vhod.php>Вкл / Откл вход на сайт  [ <? echo $ddg; ?> ] </a>
</ul>






<li><a  href=#>Связь</a>
<ul>
<li><a  href=../chats_user.php>Чаты ( <? echo $bd5; ?> )</a></li>
<li><a  href=../chat/chat_full_screen.php>Общий чат</a></li>			
<li><a  href=../feedback.php>Обратная связь ( <? echo $bd6; ?> )</a></li>
<li><a  href=../forum/index.php>Форум</a></li>
<li><a  href=../gallery/index.php>Галерея</a></li>
<li><a  href=../gost/index.php>Гостевая</a></li>
</ul>




<li><a  href=#>Игры</a>
<ul>

<li><a  href=#>Шахматы с ИИ >>></a>
<ul>
<li><a  target=_blank  href=../chess_comp/chess/index.html>Шахматы с ИИ #1</a></li>
<li><a  href=../chess_comp2/dosa.php>Шахматы с ИИ #2</a></li>
<li><a target=_blank href=../variant13/igra.php>Битва с компом</a></li>
<li><a target=_blank href=../variant18/igra.php>Рандомная битва с ИИ</a></li>
<li><a target=_blank href=../variant20/chess/index.html>+8 фигур,игра с ИИ</a></li>
<li><a target=_blank href=../variant21/chess/index.html>+4 ферзя,игра с ИИ</a></li>
<li><a target=_blank href=../variant22/chess/index.html>-6 фигур,игра с ИИ</a></li>
<li><a target=_blank href=../variant23/chess/index.html>-6 фигур,игра с ИИ</a></li>
</ul>

<li><a  href=../sea_battle/dosa.php>Морской бой #1</a></li>
<li><a  href=../sea_battle2/dosa.php>Морской бой #2</a></li>
<li><a href=../variant11/igra.php>Бомба</a></li>
<li><a target=_blank href=../variant12/igra.php>Битва компов</a></li>
<li><a target=_blank href=../variant14/igra.php>Битва ферзей</a></li>
<li><a target=_blank href=../variant15/igra.php>Битва ладей и коней</a></li>
<li><a target=_blank href=../variant17/igra.php>Умная битва компов</a></li>
</ul>			


<li><a  href=../ratings_user.php>Рейтинги</a>
<ul>
</ul>


<li><a  href=../ochki/ochki.php>Баллы</a>
<ul>
</ul>








<li><a  href=#>Прочее</a>
<ul>

<? if(preg_match('/'.$ip_adress.'/',$ip) && $name==$name_admin) { ?>

<li><a target=_blank href=../chatovod.php>Слежка за чатами</a>

<? } ?>

<li><a target=_blank href=../zvuki.php>Звуки сайта</a></li>
<li><a target=_blank href=../melodiya.php>Моя музыка</a></li>
<li><a  href=../radio/1.php>Радио Коммерсант</a></li>
<li><a  href=../radio/2.php>Радио Бизнес FM</a></li>
<li><a  href=../radio/3.php>Радио Спутник</a></li>
</ul>



<li><a  href=../contacts.php>Контакты</a>
<ul>
</ul>


<li><a  href=#>Исходник</a>
<ul>
<li><a target=_blank href=https://github.com/Entex-D/cyberchess> На сайте github</a>

<ul>
<li><a href=#>от 06.06.2026</a></li>
</ul>


<li><a href=../Source_Cyber_chess_07_04_2026.zip> Папка zip</a>

<? $ttq=date("d.m.Y"); ?>

<ul>
<li><a href=#>от <? echo $ttq; ?></a></li>
</ul>

</ul>





</td></tr></table>
		</center>