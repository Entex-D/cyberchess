<?
if($name>' ') { $nx=$name;
 $ip=$_SERVER['REMOTE_ADDR'];
$date1=date("d.m.Y|G:i:s ");

if(!preg_match('/'.$ip_adress.'/',$ip)) {

mail($pochta, "$nx вошел на Cyber", "На сайт шахмат Cyber вошел посетитель $nx , с ip адресом $ip , время и дата посещения $date1"); 

}

} 
?>
<center>

<?
if($style=='6') { $di='-2'; $reto='6'; }
if($style=='11') { $di=''; $reto='11'; }
if($style=='4') { $di='-3'; $reto='4'; }
if($style=='16') { $di='-3'; $reto='16'; }
?>

<?

$re_start_table='<tr><td class=td_center>';
$re_end_table='</td></tr>';

$re_start1='<div class="div_table1" >';
$re_start2='<div class="div_table2" >';
$re_end='</div>';


?>

<? $fixxa='figure_style'.$style_run.'/'; ?>


<table width=90% bgcolor=#202020>

<? echo $re_start_table; ?><? echo $re_start1; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>

<a href=index.php?tip=1>Вариант #1</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;12х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Меркурий</em></strong></font>&nbsp;&nbsp;&nbsp;+3 новые фигуры - 

<a target=_blank href=../model_game/pravila_yastreb_tip6.jpg>ястреб</a>,
<a target=_blank href=../model_game/pravila_medved_tip6.jpg>медведь</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_prizrak_tip6.jpg>призрак</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant1-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant1-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>


<? echo $re_start_table; ?><? echo $re_start2; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>
<a href=index.php?tip=2>Вариант #2</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;12х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Венера</em></strong></font>&nbsp;&nbsp;&nbsp;+3 новые фигуры - 

<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_legenda.jpg>легенда</a>,
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_delfin_tip8.jpg>дельфин</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_egik.jpg>ёжик</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant2-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant2-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>


<? echo $re_start_table; ?><? echo $re_start1; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>
<a href=index.php?tip=3>Вариант #3</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;12х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Земля</em></strong></font>&nbsp;&nbsp;&nbsp;+3 новые фигуры - 

<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_strela.jpg>стрела</a>,
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_dracon_tip8.jpg>дракон</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_otshelnik.jpg>отшельник</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant3-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant3-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>


<? echo $re_start_table; ?><? echo $re_start2; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>
<a href=index.php?tip=4>Вариант #4</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;12х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Марс</em></strong></font>&nbsp;&nbsp;&nbsp; +4 новые фигуры - крепость,сюрприз,сердце и звезда

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant4-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant4-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>


<? echo $re_start_table; ?><? echo $re_start1; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>
<a href=index.php?tip=5>Вариант #5</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;12х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Юпитер</em></strong></font>&nbsp;&nbsp;&nbsp;+3 новые фигуры - 

<a target=_blank href=../model_game/pravila_yastreb_tip6.jpg>ястреб</a>,
<a target=_blank href=../model_game/pravila_medved_tip6.jpg>медведь</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_prizrak_tip6.jpg>призрак</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant5-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant5-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>


<? echo $re_end; ?><? echo $re_end_table; ?>


<? echo $re_start_table; ?><? echo $re_start2; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>
<a href=index.php?tip=6>Вариант #6</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;12х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Сатурн</em></strong></font>&nbsp;&nbsp;&nbsp;+3 новые фигуры - 

<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_geniy.jpg>гений</a>,
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_insider.jpg>insider</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_pauk.jpg>паук</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant6-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant6-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>


<? echo $re_start_table; ?><? echo $re_start1; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>
<a href=index.php?tip=7>Вариант #7</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;8х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Уран</em></strong></font>&nbsp;&nbsp;&nbsp;Классика, +3 новые фигуры - 

<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_strela.jpg>стрела</a>,
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_dracon_tip8.jpg>дракон</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_otshelnik.jpg>отшельник</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant7-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant7-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>

<? echo $re_start_table; ?><? echo $re_start2; ?><centerl><br><font size=6>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<img src=../picture/ogon.gif width=3% />
<strong>[[[ <eml>

<a href=index.php?tip=8>Вариант #8</a></em> ]]]</strong></font><font size=6>&nbsp;&nbsp;10х8</font><font size=5><strong><em>&nbsp;&nbsp;Доска Нептун</em></strong></font>&nbsp;&nbsp;&nbsp;+3 новые фигуры - 

<a target=_blank href=../model_game/pravila_yastreb_tip6.jpg>ястреб</a>,
<a target=_blank href=../model_game/pravila_medved_tip6.jpg>медведь</a> и 
<a target=_blank href=../model_game/<? echo $fixxa; ?>pravila_prizrak_tip6.jpg>призрак</a>

&nbsp;&nbsp;&nbsp;&nbsp;<a target=_blank href=../model_game/variant8-igra1-style<? echo $reto; ?>.jpg><img id=fixa src=../model_game/variant8-igra1-style<? echo $reto; ?>.jpg width=4%/></a>

</center><br><br>

<? echo $re_end; ?><? echo $re_end_table; ?>



 ?>

</table>

<br>






<?
if($style=='11') { $di='11'; }
if($style=='6') { $di='6'; }
if($style=='4') { $di='4'; }
if($style=='16') { $di='16'; }
$width_td='10';
$width_img='80';
?>



<?
for($x=1;$x<2;$x++) {

$xed='<table width=90%>
<tr><td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant1-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant1-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant2-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant2-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'%></></a> </center>
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
<br><center><a target=_blank href=model_game/variant7-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant7-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'></></a> </center>
</td>

<td width='.$width_td.'% class=td_center>
<br><center><a target=_blank href=model_game/variant8-igra'.$x.'-style'.$di.'.jpg><img id=fixa src=model_game/variant8-igra'.$x.'-style'.$di.'.jpg width='.$width_img.'></></a> </center>
</td>


</tr>

<tr>

<td width='.$width_td.'% class=td_center>
<center><strong>Меркурий</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Венера</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Земля</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Марс</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Юпитер</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Сатурн</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Уран</strong></center>
<br></td>

<td width='.$width_td.'% class=td_center>
<center><strong>Нептун</strong></center>
<br></td>


</tr>

</table>
<br>
';

echo $xed;
}
?>

<? //include('opisanie_dosok/opisanie_na_index.php'); 
?>