<? include('shapka_load_style.php'); ?>

<? session_start(); ?>

<center>

<table width=90%><tr>

<td class=td_center width=1%><br><center></center></td>
<td class=td_center width=40%><br><center><a href=../index.php>

<? if($style_run=='4') { ?>
<img src=../model/logo_color4.jpg width=60% />
<? } ?>

<? if($style_run=='6') { ?>
<img src=../model/logo_color6.jpg width=60% />
<? } ?>

<? if($style_run=='11') { ?>
<img src=../model/logo_color11.jpg width=60% />
<? } ?>

<? if($style_run=='16') { ?>
<img src=../model/logo_color16.jpg width=60% />
<? } ?>

</a></center></td>
<td class=td_center><br><center></center></td>
<td class=td_center width=40%><br><center><font size=5 color=#DCDCDC><strong><em>8 вариантов шахмат</em></strong></font><br>
                                                                       <font size=3 color=#DCDCDC><strong>Телеграм <em><a target=_blank href=http://t.me/ziberchess>Кибершахматы.рф</a></em></strong></font></center></td>
<td class=td_center width=6%><br><center></center></td>

</tr></table>

<br>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Сменить логин <? echo $name; ?></a></strong><br><br></font></center></td></tr></table>

<br>

<table bgcolor=#202020 width=90% height=62%><tr><td class=td_center><center>

<table width=74% border=5 ><tr><td bgcolor=#404040><br><br>

<? include ('./ban/load.php'); ?>

<? if($name==$bex && $name>' ' && $bex> ' ') { $block=true; 
                        echo '<center><font size=2><strong>Ваш логин <font=3><a target=_blank href=variant1/archive_doski_tip4.php?namer='.$name.'&tip=1>'.$name.'</a> заблокирован</font></strong></font></center><br><br>';

                                                                         }

if($block!=true) { ?>

<center><strong><em><font size=2>К логину привязаны текущие партии,со сменой логина теряются все оповещения<br><br></font><em></strong></center>

<form method='post' action=''>

<center>

 <font size=2 color="#e4e4e4">Новый логин ENG:  </font><input type="text" class="button"  size=16% maxlength=16 name="chatmsg" value="" style:bgcolor=black>
<input type='submit' class="button" name="smena" value='        Сменить         '> </em></strong></a>
</form>

<?
if($_POST['smena']) {

$chatmsg = preg_replace("/ /", "", $chatmsg);
$dd=strlen($chatmsg);
if(!$name) { $name='Гость'; }








$ip=$_SERVER["REMOTE_ADDR"];

$base_x='guest/data_rating/'.$chatmsg.'.txt';

if ( file_exists($base_x) && $name!='Cyber')   {  

if($file = fopen($base_x, "r")) { $b4=0;} 
while(!feof($file)) { 
if($login_x[]= fgets ($file)){ $b4=$b4+1; }
}
fclose ($file);

$login_x[1] = preg_replace("|[\r\n]+|", "", $login_x[1]);

 $rest = substr($login_x[1], 0, -6);  

if(!preg_match('/'.$rest.'/',$ip)) { echo '<br><br>Логин '.$chatmsg.' занят другим ip адресом'; $da=true; }

}

if($da==true) {

$logi='logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> пытался  сменить ник на <strong>'.$chatmsg.'</strong>,ник занят';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);

}



if($da==true) { unset($chatmsg); }


if(preg_match('/^[a-zA-Z0-9]+$/',$chatmsg) && $chatmsg>' ' && $dd>3)       {


                       if(setcookie ("name", $chatmsg, time() + 3600*24*700)) {

echo '<br><br><center><font size=2><strong>Ваш логин сохранен как <font=3><a href=#>'.$chatmsg.'</a></font></strong></font></center>';


$logi='logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$name.'</em></strong> сменил ник на <strong>'.$chatmsg.'</strong>';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);


                                                                                                           } else echo '<br><br>Имя не сохранилось';

                                                                       } else echo '<br><br><center><font size=2><strong>Некорректный ввод символов</strong></font></center>';

                               }

?>

    <br><br>

<? }  ?>

</td>
   <tr>
</table><br>

    </center></td>
   <tr>
</table><br>

<? include('podval.php'); ?>

</center>

<br><br>