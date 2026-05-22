
<center>


<? include('../shapka_load_style.php'); ?>
<? include('../shapka.php'); ?>


<table width=90%><tr><td class=td_center>

<? $d=rand(0,1000); if(!$name) { $name_x='Guest'.$d; } else $name_x=$name; ?>

<br><br>

<center>
<font size="6" ><em><strong>Гостевая</strong></em></font>
<br>
 
  <FORM method=post action="">
<font size=2><strong>Здесь можно оставить отзыв,мнение о сайте,и предложения</strong></font><br><br><br> <br>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="name_d" class="button" size=78 maxlength=20 value=<? echo $name_x; ?>>
<br>Текст* <TEXTAREA NAME=text ROWS=4  class="button" COLS=80 maxlength=1000 ></TEXTAREA> 
<br>

  <br><input type="submit"   class="button" value="                   Готово                   ">
  </form>



<?
if($name_d && $text) { echo $name_d.'&nbsp;'; echo $text.'&nbsp;<br><br>'; }

$login=$name_d;
$message=$text;
$date_x=date("d.m.Y");
$t=$_SERVER["REMOTE_ADDR"];
$ip_adress2=$t;
$tt=rand(0,100000);
$id='a'.$tt.'f';

$message=htmlspecialchars($message);
$login=htmlspecialchars($login);

$message = preg_replace("|[:]+|", "", $message);
$message = preg_replace("|[\r\n]+|", "", $message);

$dlina2 = strlen ($login); if($dlina2>16) { unset($login); }

if(preg_match('/a href/',$message)) { unset($message); echo "<meta http-equiv='refresh' content='1;url=../gost/index.php?zvuk=spam'>";
mail($pochta, "$login СПАМ в гостевой", "В гостевой посетитель $login , с ip адресом $ip_adress , время и дата посещения $date_x , написал СПАМ $message"); 
 }

if($login && $message && $date_x && $ip_adress2 && $id) { $dobro='ok'; }

if($dobro=='ok') {

$xrd2='../gost/gost.txt'; 

if ( file_exists($xrd2) )   {

$openchatdb=fopen($xrd2,"a");

if(fwrite($openchatdb,"\n\r".$login.':'.$message.':'.$date_x.':'.$ip_adress2.':'.$id."\r\n")) { ;  }
                       
fclose($openchatdb);
      
mail($pochta, "$login написал в гостевой", "В гостевой посетитель $login , с ip адресом $ip_adress2 , время и дата посещения $date_x , написал сообщение $message"); 

}



$logi='../logi.txt';

if(!$login) { $login='Гость'; }

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font> Игрок <strong><em>'.$login.'</em></strong> написал в <strong>[ <a href=../gost/index.php>гостевой</a> ], дата '.$date_x.'</strong>';
                 

$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);





echo "<meta http-equiv='refresh' content='1;url=../gost/index.php?zvuk=ok'>";

} //end dobro
?>















<? $fd='0'; ?>
<? $ip=$_SERVER['REMOTE_ADDR']; ?>

<table width=80%>

<? $ChatDB=file("../gost/gost.txt");
while($a=array_pop($ChatDB))
{
list($login,$message,$date,$ip_adress2,$id)=split(":",$a,5);

if($login>' ') { $fd=$fd+'1'; }

if(!preg_match('/'.$ip_adress.'/',$ip)) { $ip_adress2='ip: ***'; } else $ip_adress2='ip: '.$ip_adress2; 
if(!preg_match('/'.$ip_adress.'/',$ip)) { $delete_x='<a href=../gost/index.php?block=block>Удалить</a>'; } else
if(preg_match('/'.$ip_adress.'/',$ip)) { $delete_x='<a href=../gost/index.php?del_x='.$id.'>Удалить</a>'; } 
if(!$id) { $id='0'; }

$color_x='#262626';
$color_n='#444444';
$color_b='#303030';

if($login>' ') {

echo '
<table width=80%><tr>
<td bgcolor='.$color_n.'><br><strong><font size=1><center>Имя: <font size=2>'.$login.'</font></center></font></strong><br></td>
<td bgcolor='.$color_n.'><br><strong><font size=1><center>Дата: '.$date.'</center></font></strong><br></td>
<td bgcolor='.$color_n.'><br><strong><font size=1><center>'.$ip_adress2.'</center></font></strong><br></td>
<td bgcolor='.$color_n.'><br><strong><font size=1><center>id: '.$id.'</center></font></strong><br></td>
<td width=20% bgcolor='.$color_n.'><br><strong><font size=1><center>'.$delete_x.'</center></font></strong><br></td>
<td width=8% bgcolor='.$color_n.'><br><strong><font size=1><center>Номер: '.$fd.'</center></font></strong><br></td>
</tr></table>
<table width=80%><tr>
<td width=64% bgcolor='.$color_b.'><br><strong><font size=1>&nbsp;&nbsp;Сообщение:<br><br>&nbsp;&nbsp;<font size=2>'.$message.'</font><br></font></strong><br></td>
</tr></table><br>
        ';                                                                       

} //end if $name
               

  }

?></table></center>




















<?

$file_guest1='../gost/gost.txt';  
 
if($file = fopen($file_guest1, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($stroki[]= fgets ($file)){$b4++;} }
fclose ($file); 

 }













$xr2='../gost/gost.txt'; 

if ( file_exists($xr2) )   { 

$openchatdb=fopen($xr2,"w");




for($a=0;$a<$b4+1;$a++) { 

if(preg_match('/'.$del_x.'/',$stroki[$a]) && $del_x>'  ' && preg_match('/'.$ip_adress.'/',$ip)) { //echo $stroki[$a].' <br>[ это к удалению ] '; 
$stroki[$a]=''; echo "<meta http-equiv='refresh' content='2;url=../gost/index.php'>"; }

$stroki[$a] = preg_replace("|[\r\n]+|", "", $stroki[$a]);

if($stroki[$a]>'  ') { if(fwrite($openchatdb,$stroki[$a]."\n")) { ;  } }

} //end for


fclose($openchatdb);
      
}


?>







<? if($zvuk=='ok') { ?>
<audio src="../zvuk/thank.mp3" autoplay="autoplay"></audio>
<? echo "<meta http-equiv='refresh' content='2;url=../gost/index.php'>"; ?>
<? } ?>

<? if($zvuk=='spam') { ?>
<audio src="../zvuk/spam.mp3" autoplay="autoplay"></audio>
<? echo "<meta http-equiv='refresh' content='2;url=../gost/index.php'>"; ?>
<? } ?>

<? if($block=='block') { ?>
<audio src="../zvuk/delete_admin.mp3" autoplay="autoplay"></audio>
<? echo "<meta http-equiv='refresh' content='2;url=../gost/index.php'>"; ?>
<? } ?>



</td></tr></table>




<br><center>


<? include('../podval.php'); ?>

</center>