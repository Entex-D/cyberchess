
<?
//setcookie ("s", $s, time() + 4);
include ('./ban/load.php');

$t=$_SERVER["REMOTE_ADDR"];

$s=$_GET['s'];

if($s=='4') { setcookie ("s", $s, time() + 3600*4); }

if($s<' ') { $s=$_COOKIE['s']; }

if($s!='4') {
 if(!preg_match('/477/',$t)) { $slovo='close'; }
                }

if($slovo=='close') { $blok=true; $ef='1'; }
if($name>' ' && $bex>' ' && $name==$bex) { $blok=true; $ef='2'; }

if($s==4 && $new_vhod=='6') { $blok=true; $ef='3'; }

if($blok==true) {

?>

<? if($d=='4' && $zvuki=='11') { 

$qq=rand(0,2);

if($qq==0) {
?><audio src="zvuk/cyber_brain2.mp3" autoplay="autoplay"></audio><?
                 }

if($qq==1) {
?><audio src="zvuk/cyber_brain3.mp3" autoplay="autoplay"></audio><?
                 }

if($qq==2) {
?><audio src="zvuk/cyber_brain4.mp3" autoplay="autoplay"></audio><?
                 }

}

?>


<? include('chat_mobile_comp.php'); ?>

<? 
if($user=='pc') { $razmer='72%'; }
if($user=='mobile') { $razmer='86%'; }

 ?>

     <title>Шахматы RMX</title>
     
<center>

<? include('shapka.php'); ?>

<table width=90% height=<? echo $razmer; ?> ><tr><td class=td_center><center>

<img src=../model/logo_color<? echo $style_run; ?>.jpg width=500 />

<br>
<font size=4><strong>Новый проект <a target=_blank href=https://кибершашки.рф>Кибершашки.рф</a></strong></font>

<br></center></td></tr>

<tr><td class=td_center><center>

<table width=74% height=60% border=5><tr><td bgcolor=#404040><br>

<? if($ef=='1') { ?>

<center>
<font size=4><strong> Шахматы с AI </strong></font><br>
<font size=4><strong> 8 вариантов, 
<a target=_blank href=figure.php>20 новых фигур</a> и 
<a target=_blank href=rules.php>новые клетки</a> 
 </strong></font><br><br>
<font size=4><strong> [[[ <a href=index.php?s=4>Войти на сайт</a> ]]]</strong></font><br><br> 

<? include('ochki/total_figure.php'); ?>

<font size=2><strong> На сайте убито <? echo $total[0]; ?> фигур на <? echo $total[1]; ?> баллов </strong>[ <a href=ochki/ochki.php>баллы</a> ]</font><br> 

<? include('ochki/vsego_igr.php'); ?>

<font size=2><strong> Всего сыграно ~<? echo $vsego_igr[0]; ?> игр</strong></font><br> 

<? include('blokirovka_log.php'); ?>
<? include('blokirovka_logi_email.php'); ?>

<? 
} else if($ef=='2') { ?>

<center>
<font size=3><strong> Вы заблокировваны на неопределённое время</strong></font><br>
<font size=3><em> Ваш логин <a target=_blank href=variant1/archive_doski_tip4.php?namer=<? echo $name; ?>&tip=1><? echo $name; ?></a></em></font><br>
<font size=2><strong> Попробуйте придти попозже</strong></font></center><br>

<? } else if($ef=='3') { ?>

<center>
<font size=3><strong> Скачайте исходник, разместите у себя на сайте и играйте</strong></font><br>
<font size=3><em>[[[ <a target=_blank href=Source_Cyber_chess_07_04_2026.zip>Исходник</a> ]]]</em></font><br>
<font size=2><strong>Программа написана на языке PHP 5.2</strong></font><br>
<font size=2><strong>Вход на сайт легко открыть:</strong></font><br>
<font size=3><em>[[[ <a href=../change_vhod.php>Открыть вход на сайт</a> ]]]</em></font></center><br>

<? } 


?>

</td></tr></table>




<? if($ef=='1') { ?>

<?
if($style=='11') { $di='11'; }
if($style=='6') { $di='6'; }
if($style=='4') { $di='4'; }
if($style=='16') { $di='16'; }
$width_td='10';
$width_img='94';
$width_img7='64';
$width_img8='74';
?>


<?
for($x=1;$x<2;$x++) {

$xed='<table width=74%>
<tr>

<td width=1% class=td_center><center></center></td>
<td class=td_center width=6%><center><img src=../picture/ogon.gif width=90% /></center></td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant1-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant1-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
</td>

<td width=6% class=td_center>
<br><center><a target=_blank href=model_game/variant2-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant2-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a></center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant3-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant3-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant4-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant4-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant5-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant5-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant6-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant6-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant7-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant7-igra'.$x.'-style'.$di.'.jpg width='.$width_img7.'%></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant8-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant8-igra'.$x.'-style'.$di.'.jpg width='.$width_img8.'%></></a> </center>
</td>

<td class=td_center width=6%><center><img src=../picture/ogon.gif width=90% /></center></td>
<td width=1% class=td_center><center></center></td>


</tr>

<tr>

<td width=1% class=td_center></td>
<td width=6% class=td_center></td>
<td width='.$width_td.'%>
<center><strong>Вариант #1</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #2</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #3</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #4</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #5</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #6</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #7</strong></center>
</td>

<td width='.$width_td.'%>
<center><strong>Вариант #8</strong></center>
</td>

<td class=td_center width=6%></td>
<td class=td_center width=1%></td>

</tr>

</table>

';

echo $xed;
}

} //end if ef=='1'

?>









</center>
<br></td></tr></table>

<br>

<? include('podval.php'); ?>

</center>




<?

}


?>