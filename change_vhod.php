<? include('shapka_load_style.php'); ?>

<center>






<center>

<table width=90%><tr>

<td class=td_center width=1%><br><center></center></td>
<td class=td_center width=40%><br><center><a href=../index.php>

<img src=../model/logo_color<? echo $style_run; ?>.jpg width=60% />


</a></center></td>
<td class=td_center><br><center></center></td>
<td class=td_center width=40%><br><center><font size=5 color=#DCDCDC><strong><em>8 вариантов шахмат</em></strong></font><br>
                                                                       <font size=3 color=#DCDCDC><strong>Телеграм <em><a target=_blank href=http://t.me/ziberchess>Кибершахматы.рф</a></em></strong></font></center></td>
<td class=td_center width=6%><br><center></center></td>

</tr></table>

<br>

<? 

if($new_vhod=='11') { $button1='disabled'; $text1='"          Включено          "'; } else  $text1='"          Включить          "'; 
 if($new_vhod=='6') { $button2='disabled'; $text2='"          Отключено          "'; } else  $text2='"          Отключить          "'; 

if($new_vhod=='11' && $s==5) { ?><audio src="./zvuk/run_zvuk.mp3" autoplay="autoplay"></audio><? } 
 if($new_vhod=='6' && $s==5) { ?><audio src="./zvuk/off_zvuk.mp3" autoplay="autoplay"></audio><? }  
?>



<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Включить / Отключить Вход на сайт</a></strong><br><br></font></center></td></tr></table>

<br>








<table width=90% height=60%><tr><td class=td_center><center>

<table border=3 width=66% height=62%><tr>
<td class=td_center><center>

<table width=100%><tr>
<td bgcolor=#404040><center><font size=4><br><strong>Вход настроится  для этого браузера в компьютере</strong><br><br>

<? if($new_vhod=='11') { ?><br><br><br><img src=picture/igrok_status/online.png width=4% /><br><br>Включено <? } ?>
<? if($new_vhod=='6') { ?><br><br><br><img src=picture/igrok_status/offline.png width=4% /><br><br>Выключено <? } ?>

<br><br></font></center>

</td></tr></table>


<table width=100% height=60%><tr>
<td bgcolor=#404040>

<center>
 <FORM method=post action="change_vhod.php">
  <br><input type="submit"  <? echo $button1; ?> class="button" name="crystal" value=<? echo $text1; ?>>
  </form>

</center>
</td><td bgcolor=#404040>
<center>

 <FORM method=post action="change_vhod.php">
  <br><input type="submit"  <? echo $button2; ?> class="button" name="pink" value=<? echo $text2; ?>>
  </form>

</center>
</td>


</center>

</td></tr></table>

</center></td></tr></table>
</center></td></tr></table>








<?

if($pink) { $new_vhod='6'; setcookie ("new_vhod", $new_vhod, time() + 3600*24*7);  }
if($crystal) { $new_vhod='11'; setcookie ("new_vhod", $new_vhod, time() + 3600*24*7);  }


if($orange || $green || $pink || $crystal || $style1 || $style2) { 


if($crystal) { $slovo='Стиль #1'; }
if($pink) { $slovo='Стиль #2'; }

$logi='logi.txt';

if(!$name) { $name='Гость'; }

if($crystal) {
$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> включил Вход в <strong>[ <a href=../change_vhod.php>настройках</a> ]</strong>';
                 }

if($pink) {
$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> отключил Вход в <strong>[ <a href=../change_vhod.php>настройках</a> ]</strong>';
                 }

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

                                                                                          }


if($orange || $green || $pink || $crystal || $style1 || $style2) { echo "<meta http-equiv='refresh' content='1;url=change_vhod.php?s=5'>"; }
?>
<br>
<? include('podval.php');