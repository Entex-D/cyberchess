<? include('./shapka_load_style.php'); ?>



<center><table width=92%><tr><td width=3%></td>

<td width=50% class=td_center><centerl><font size=8><em><strong><a href=index.php>

<img src=../model/logo_color<? echo $style_run; ?>.jpg width=400 />

</a></strong></em></font></center></td>











<td width=50% class=td_center>
<strong><font size=2>
<?
  $open_game='0';
$open_variant='';
$di='';
if($nomer_doski) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 1 / '; $di=' / '; }
if($nomer_doski2) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 2 / '; $di=' / '; }
if($nomer_doski3) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 3 / '; $di=' / '; }
if($nomer_doski4) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 4 / '; $di=' / '; }
if($nomer_doski5) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 5 / '; $di=' / '; }
if($nomer_doski6) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 6 / '; $di=' / '; }
if($nomer_doski7) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 7 /'; $di=' / '; }
if($nomer_doski8) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 8 /'; $di=' / '; }
if($nomer_doski9) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 9 /'; $di=' / '; }
if($nomer_doski10) { $open_game=$open_game+'1'; $open_variant=$open_variant.'Вариант 10'; $di=' / '; }

?>  <font size=1><em>Ваш логин - </em><? echo $name;  ?> [ <a href=login_name.php>сменить логин</a> ]
<br>  
<em>У вас <? echo $open_game; ?> открытых игр <? echo $di.$open_variant; ?></em></font>

<? if(!preg_match('/^[a-zA-Z0-9]+$/',$doska)) { $doska=$name; }

 if($name!=$doska) { echo '<em><font size=1><br>Вы играете на чужой доске игрока '.$doska.' на варианте '.$tip.'</em></font>'; } ?>

</td><td width=20%></td></tr></table>
</center>













<? if(!$sopernik_zapas && !$tip) {  ?>

<?
if($name) { $name_tip1=$name; } else $name_tip1=$t_ip; 
?>

<?

$de1='bgcolor=#727272';
$de2='bgcolor=#646464';

?>

<table width=92%><tr>

<? echo '<td width=0%></td>
<td '.$de1.'><strong><center><em><font size=3><a href=?doska='.$name_tip1.'&tip=1>Вариант #1</a> / 
  <a href=?doska='.$name_tip1.'&tip=2>Вариант #2</a> / 
  <a href=?doska='.$name_tip1.'&tip=3>Вариант #3</a> / 
  <a href=?doska='.$name_tip1.'&tip=4>Вариант #4</a> / 
  <a href=?doska='.$name_tip1.'&tip=5>Вариант #5</a> / 
  <a href=?doska='.$name_tip1.'&tip=6>Вариант #6</a> / 
  <a href=?doska='.$name_tip1.'&tip=7>Вариант #7</a> / 
  <a href=?doska='.$name_tip1.'&tip=8>Вариант #8</a> / 
  <a href=?doska='.$name_tip1.'&tip=9>Вариант #9</a> / 
    <a href=?doska='.$name_tip1.'&tip=10>Вариант #10</a></font></em></center></strong></td>
<td width=0%></td>'; ?>

</tr></table></center>

<? } ?>