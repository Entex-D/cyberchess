<? include('../shapka_load_style.php'); ?>



<center>

<? include('../shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Бомба взрывает фигуры,обновление через 4 секунды</a></strong><br><br></font></center></td></tr></table>

<br>

<center><table width=90% height=62%>

<tr bgcolor=#525252><td class=td_center><br>

<? include('doska.php'); ?>

<br><br>

<? $dlina_e = strlen ($death); if($dlina_e>8) { $death='0'; } ?>
<? $dlina_c = strlen ($raz); if($dlina_c>8) { $raz='0'; } ?>

<? if (!$raz) { $raz='1'; } else $raz=$raz+'1'; ?>

<center><font size=3><strong>
Убито фигур <? echo $death; ?>
<br>Страница обновилась <? echo $raz; ?> раз [ max 20 ]
<? if($raz>19) { ?><br><a href=igra.php>Сбросить цифры</a> <? } ?>
</strong></font></center>
<br></td>
</tr>

</table>
<br>

<? include('../podval.php'); ?>

</center>

<br><br>


<? if($raz<20) { ?>

<? echo "<meta http-equiv='refresh' content='4;url=igra.php?death=$death&raz=$raz'>"; ?>

<? } ?>