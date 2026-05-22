<? include('shapka_load_style.php'); ?>




<center>

<? include('shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Ваши игры <? echo $name;?></a></strong><br><br></font></center></td></tr></table>

<br>

<table width=90% ><tr>
<td  class=td_center width=7%></td><td class=td_center><font size=2><strongl><em><?
echo '<br></td><td  class=td_center width=7%></td></tr>';?>


<tr><td  class=td_center width=7% ></td>

<td bgcolor=#404040 width=28%><br><center>

<? include('./balance.php'); ?>

</center><br></td>



<td bgcolor=#404040 width=28%><br><center>

<? include('./rating.php'); ?>

</center><br></td>


<td bgcolor=#404040 width=28%><br><center>

<? include('./win_loss.php'); ?> 

</center><br></td>


<td class=td_center width=7% ></td></tr></table>












<table width=90%><tr><td class=td_center width=7% class=td_center></td><td class=td_center><br><center>

<strong><font size=1>Ваши открытые игры:</font></strong>

</center><br></td><td  class=td_center width=7%></td></tr>







<tr><td width=7% class=td_center></td><td>

<?
include('./opoveshenie/opens_game_read.php');
?>

</td><td width=7%></td></tr>





<tr><td width=7% class=td_center></td><td class=td_center><br><center>

<? include('./opoveshenie/open_game_clear.php'); ?>

<? if($bg4>'10') { ?>
<strong><font size=1><a href=anketa.php?rezet=yes>Очистить список открытых игр</a> ( Таблица очистится при 60 пунктах )</font></strong>
<? } ?>
</center><br></td><td width=7%></td></tr>

















<tr><td width=7% class=td_center></td><td class=td_center><br><center>

<strong><font size=1>Ваши завершенные игры:  <a href=anketa.php?d=ok>Очистить список</a></font></strong>

</center><br></td><td width=7%></td></tr>







<tr><td width=7% class=td_center></td><td>

<?
include('./opoveshenie/close_game_read.php');
?>

</td><td width=7%></td></tr>


<tr><td width=7% class=td_center></td><td></tr>
<tr><td width=7% class=td_center></td><td></tr>




</table><br>

<? include('podval.php'); ?>

</center>