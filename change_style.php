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
 if($style_run=='11') { $button3='disabled'; $text3='"          Стиль активен          "'; } else  $text3='"          Кристальный          "'; 
 if($style_run=='6') { $button2='disabled'; $text2='"          Стиль активен          "'; } else  $text2='"          Розовый          "'; 
if($style_run=='4') { $button1='disabled'; $text1='"          Стиль активен          "'; } else  $text1='"          Тёмно желтый          "'; 
 if($style_run=='16') { $button4='disabled'; $text4='"          Стиль активен          "'; } else  $text4='"          Светло желтый          "'; 
?>





<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Сменить стиль для игрока <? echo $name; ?></a></strong><br><br></font></center></td></tr></table>

<br>




<table width=90% height=62%><tr>
<td class=td_center><center>

<table border=3 width=66% height=62%><tr>
<td class=td_center><center>

<table width=100%><tr>

<td bgcolor=#404040><center><br>
<img src=picture/ogon.gif width=26% ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>

<td bgcolor=#404040 width=33%><center><br><img src=model/style<? echo $style; ?>_figure<? echo $style_figure; ?>.jpg width=60% />
</td>

<td bgcolor=#404040><center><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=picture/ogon.gif width=26% ?>
<br><br></center></td></tr></table>


<table width=100%><tr>
<td bgcolor=#404040><center><font size=2><br><strong>Стиль изменится только персонально для игрока <? echo $name; ?></strong><br><br></font></center></td></tr></table>

<table width=100%>

<tr><td bgcolor=#404040>

<center>
 <FORM method=post action="">
  <br><input type="submit"  <? echo $button3; ?> class="button" name="crystal" value=<? echo $text3; ?>>
  </form>

</center>
</td>
<td bgcolor=#404040>
<center>

 <FORM method=post action="">
  <br><input type="submit"  <? echo $button2; ?> class="button" name="pink" value=<? echo $text2; ?>>
  </form>

</center>
</td>

<td bgcolor=#404040>
<center>
 <FORM method=post action="">
  <br><input type="submit"  <? echo $button1; ?> class="button" name="orange" value=<? echo $text1; ?>>
  </form>

</center>

</td>

<td bgcolor=#404040>
<center>
 <FORM method=post action="">
  <br><input type="submit"  <? echo $button4; ?> class="button" name="green" value=<? echo $text4; ?>>
  </form>

</center>

</td></tr></table>

</center></td></tr></table>
</center></td></tr></table>








<?

if($orange) { $style_run='4'; setcookie ("style_run", $style_run, time() + 3600*24*7);  }
if($green) { $style_run='16'; setcookie ("style_run", $style_run, time() + 3600*24*7);  }
if($pink) { $style_run='6'; setcookie ("style_run", $style_run, time() + 3600*24*7);  }
if($crystal) { $style_run='11'; setcookie ("style_run", $style_run, time() + 3600*24*7);  }


if($orange || $green || $pink || $crystal || $style1 || $style2) { 

if($orange) { $slovo='Тёмно желтый'; }
if($green) { $slovo='Светло желтый'; }
if($pink) { $slovo='Розовый'; }
if($crystal) { $slovo='Кристальный'; }

$logi='logi.txt';

if(!$name) { $name='Гость'; }

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> сменил стиль на <strong>[ <a href=../change_style.php>'.$slovo.'</a> ]</strong>';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

                                                                                          }


if($orange || $green || $pink || $crystal || $style1 || $style2) { echo "<meta http-equiv='refresh' content='1;url=change_style.php'>"; }
?>
<br>
<? include('podval.php'); ?>