<? include('../shapka_load_style.php'); ?>

<? 
if(isset($_COOKIE['desa'])) { if($desa!=$desa_parol) { setcookie ("desa", $desa, time() + 3); } }

if(!isset($_COOKIE['desa']) ) { 

if($desa==$desa_parol) { if(setcookie ("desa", $desa, time() + 3600*24*30)) { } }
                                          } 

?>

<center>

<? include('../shapka.php'); ?>

<? if($desa!=$desa_parol) { ?>

<table width=90%><tr>
<td class=td_center><center><font size=4><br><strong>Секретный раздел, [[[ <? echo $name;?> ]]]</strong><br><br></font></center></td></tr></table>

<br>

<? } ?>

<table width=90% ><tr>
<td width=14% class=td_center></td><td class=td_center><font size=2><strongl><em><?
echo '</td><td width=14% class=td_center></td></tr>';?>


<? if($desa!=$desa_parol) { ?>

<tr><td width=14% class=td_center></td><td class=td_center><br><center>

Ничего "великого" тут не спрограммировано )
</center><br></td><td width=14% class=td_center></td></tr>

<? } ?>

<? $ip=$_SERVER["REMOTE_ADDR"]; ?>

<? if($desa==$desa_parol && preg_match('/'.$ip_adress.'/',$ip) && $name==$name_admin) { ?>






<tr><td width=7% class=td_center></td><td class=td_center><br><center>

<? if($ban!='ok' && $ban!='ok2' && $ban!='ok3') { ?>
<strong><font size=1>Список посещений
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok>Список банов</a>
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok2>Список всех логинов</a>
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok3>Список активных логинов</a>
</font></strong>
<? } ?>

<? if($ban=='ok') { ?>
<strong>
<font size=1><a href=troxa.php>Список посещений</a>
&nbsp;&nbsp;&nbsp;Список банов
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok2>Список всех логинов</a>
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok3>Список активных логинов</a>
</font></strong>
<? } ?>

<? if($ban=='ok2') { ?>
<strong>
<font size=1><a href=troxa.php>Список посещений</a>
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok>Список банов</a>
&nbsp;&nbsp;&nbsp;Список всех логинов&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok3>Список активных логинов</a>
</font></strong>
<? } ?>

<? if($ban=='ok3') { ?>
<strong>
<font size=1><a href=troxa.php>Список посещений</a>
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok>Список банов</a>
&nbsp;&nbsp;&nbsp;<a href=troxa.php?ban=ok2>Список всех логинов</a>
&nbsp;&nbsp;&nbsp;Список активных логинов
</font></strong>
<? } ?>

</center><br></td><td width=7% class=td_center></td></tr>



<? if($ban!='ok' && $ban!='ok2' && $ban!='ok3') { ?>



<tr><td width=7% class=td_center></td><td class=td_center>

<?
include('../troxa/ip_read.php');
?>

</td><td width=7% class=td_center></td></tr>





<tr><td width=7% class=td_center></td><td class=td_center><br><center>

<? include('../troxa/ip_clear.php'); ?>

<? if($bgr4>'1000') { ?>
<strong><font size=1><a href=troxa.php?rezet=yes>Очистить список</a> ( Таблица сама очистится при 2000 пунктов до 1000 пунктов )</font></strong>
<? } ?>
</center><br></td><td width=7% class=td_center></td></tr>



<?
if($bgr4>'2000') { $del='Ok'; include('../troxa/ip_rezet2000.php'); }
?>





<tr><td width=7%></td><td>

<?
include('../troxa/ip_write.php');
?>

</td><td width=7%></td></tr>


<? } //end if $ban
 

if($ban=='ok2') { 

?>
<tr><td width=7% class=td_center></td><td class=td_center>

<?
include('../troxa/login_read.php');
?>

</td><td width=7% class=td_center></td></tr>

<?

}



 

if($ban=='ok3') { 

?>
<tr><td width=7% class=td_center></td><td class=td_center>

<?
include('../troxa/login_read_active.php');
?>

</td><td width=7% class=td_center></td></tr>

<?

}




 

if($ban=='ok') { 

?>
<tr><td width=7% class=td_center></td><td class=td_center>

<?
include('../troxa/ban_read.php');
?>

</td><td width=7% class=td_center></td></tr>

<?

}








?>



<? } //конец if $desa

if($desa!=$desa_parol) { 

$desa = preg_replace("|[\n\r]+|", "", $desa);

if($desa>' ' && $desa!='Введите пароль') { $desa2='Пароль '.$desa.' не правильный'; }
if($desa=='' || !$desa || $desa=='Введите пароль') { $desa2='Введите пароль'; }






?>

<tr><td width=10% class=td_center></td><td class=td_center>
<center>

 <FORM method=post action="">
<br>
<TEXTAREA NAME=desa ROWS=3  class="button" COLS=90 maxlength=20 ><? echo $desa2; ?></TEXTAREA> 
<br>

  <br><input type="submit"   class="button" name="okay" value="                                                                             Войти с паролем                                                                             ">
  </form>

</center>
</td><td width=10% class=td_center></td></tr>

<?










}

?>

<? if($desa!=$desa_parol) { ?> 

<? include('../chat_mobile_comp.php'); ?>

<? 
if($user=='pc') { $razmer='42%'; }
if($user=='mobile') { $razmer='70%'; }
?>

<center>
<table width=90% height=<? echo $razmer; ?>><tr>
<td class=td_center></td>
</tr></table>
</center>

<? } ?>

</table><br>

<center>
<? include('../podval.php'); ?>

</center>

<?

if($_POST[okay]) {  

$logi='../logi.txt';

if(!$name) { $name='Гость'; }

if($desa==$desa_parol) { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> вошел в Troxa'; } 
if($desa!=$desa_parol) { $logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок '.$name.' не вошел в Troxa <font size=1>[ вводил пароль <strong>"<a href=../troxa/troxa.php>'.$desa.'</a>"</strong> ]</font>'; }
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);


}

?>