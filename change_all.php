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

if($change_all=='11') { $button1='disabled'; $text1='"          Включено          "'; } else  $text1='"          Включить          "'; 
 if($change_all=='6') { $button2='disabled'; $text2='"          Отключено          "'; } else  $text2='"          Отключить          "'; 

if($change_all=='11' && $s==5) { ?><audio src="./zvuk/run_zvuk.mp3" autoplay="autoplay"></audio><? } 
 if($change_all=='6' && $s==5) { ?><audio src="./zvuk/off_zvuk.mp3" autoplay="autoplay"></audio><? }  
?>



<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Включить / Отключить все новшества</a></strong><br><br></font></center></td></tr></table>

<br>








<table width=90% height=60%><tr><td class=td_center><center>

<table border=3 width=66% height=62%><tr>
<td class=td_center><center>

<table width=100%><tr>
<td bgcolor=#404040><center><font size=4><br><strong>Все новшества настроятся  для этого браузера в компьютере</strong><br><br>

<? if($change_all=='11') { ?><br><br><br><img src=picture/igrok_status/online.png width=4% /><br><br>Включено <? } ?>
<? if($change_all=='6') { ?><br><br><br><img src=picture/igrok_status/offline.png width=4% /><br><br>Выключено <? } ?>

<br><br></font></center>

</td></tr></table>


<table width=100% height=60%><tr>
<td bgcolor=#404040>

<center>
 <FORM method=post action="change_all.php">
  <br><input type="submit"  <? echo $button1; ?> class="button" name="crystal" value=<? echo $text1; ?>>
  </form>

</center>
</td><td bgcolor=#404040>
<center>

 <FORM method=post action="change_all.php">
  <br><input type="submit"  <? echo $button2; ?> class="button" name="pink" value=<? echo $text2; ?>>
  </form>

</center>
</td>


</center>

</td></tr></table>

</center></td></tr></table>
</center></td></tr></table>








<?

if($pink) { 

$zvuki='6'; setcookie ("zvuki", $zvuki, time() + 3600*24*7); 
$zvuki_hody='6'; setcookie ("zvuki_hody", $zvuki_hody, time() + 3600*24*7); 
$new_kletki='6'; setcookie ("new_kletki", $new_kletki, time() + 3600*24*7); 
$new_transform='6'; setcookie ("new_transform", $new_transform, time() + 3600*24*7); 
$new_transform_magic='6'; setcookie ("new_transform_magic", $new_transform_magic, time() + 3600*24*7); 
$change_bomb='6'; setcookie ("change_bomb", $change_bomb, time() + 3600*24*7);  
$change_all='6'; setcookie ("change_all", $change_all, time() + 3600*24*7); 

 }

if($crystal) { 

$zvuki='11'; setcookie ("zvuki", $zvuki, time() + 3600*24*7);  
$zvuki_hody='11'; setcookie ("zvuki_hody", $zvuki_hody, time() + 3600*24*7);  
$new_kletki='11'; setcookie ("new_kletki", $new_kletki, time() + 3600*24*7);  
$new_transform='11'; setcookie ("new_transform", $new_transform, time() + 3600*24*7);  
$new_transform_magic='11'; setcookie ("new_transform_magic", $new_transform_magic, time() + 3600*24*7);  
$change_bomb='11'; setcookie ("change_bomb", $change_bomb, time() + 3600*24*7);  
$change_all='11'; setcookie ("change_all", $change_all, time() + 3600*24*7);  

}


if($orange || $green || $pink || $crystal || $style1 || $style2) { 


if($crystal) { $slovo='Стиль #1'; }
if($pink) { $slovo='Стиль #2'; }

$logi='logi.txt';

if(!$name) { $name='Гость'; }

if($crystal) {
$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> включил все новшества в <strong>[ <a href=../change_all.php>настройках</a> ]</strong>';
                 }

if($pink) {
$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> отключил все новшества в <strong>[ <a href=../change_all.php>настройках</a> ]</strong>';
                 }

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

                                                                                          }


if($orange || $green || $pink || $crystal || $style1 || $style2) { echo "<meta http-equiv='refresh' content='1;url=change_all.php?s=5'>"; }
?>
<br>
<? include('podval.php');