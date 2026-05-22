<? include('../shapka_load_style.php'); ?>
<? include('../chat_mobile_comp.php'); ?>



<center>

<? //include('../shapka.php'); 
?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl>Игра с ИИ / Рандомная расстановка</strong><br><br></font></center></td></tr></table>

<br>

<center><table width=90% height=86%>

<tr bgcolor=#525252><td class=td_center><br><center><font size=4>В начале игры смотрите, нет ли шаха белому королю</font></center><br>

<? if($user=='pc') { ?>

<? include('igra.html'); ?>

<? } ?>

<? if($user=='mobile') { ?>

<? include('igra2.html'); ?>

<? } ?>

<br></td>
</tr>

</table>
<br>

<? //include('../podval.php'); 
?>

</center>

<br><br>