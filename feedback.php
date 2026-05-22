<? include('./shapka_load_style.php'); ?>

<? if(isset($_COOKIE['name'])) { ?>

<? include('./hacker.php'); ?>

<? if(!preg_match('/^[a-zA-Z0-9]+$/',$namer)) { $namer=$name;  } ?>

<center>

<? include('shapka.php'); ?>

<table width=90%><tr>
<td class=td_center><center><font size=3><br><strongl><a href=#>Обратная связь</a></strong><br><br></font></center></td></tr></table>

<br>

<table bgcolor=101010 width=90%><tr>
<td class=td_center><center><font size=1><br><strong>











 <FORM method=post action="">
<font size=2><strong>Здесь можно задать вопрос по  теме этого шахматного сайта</strong></font><br><br>
<? if(!$namer || $namer==$name) { ?><br>Сообщение от <? echo $name; ?><br><br> <? } ?>
<? if($namer && $namer<>$name) { ?><br>Ответить пользователю <?  echo $namer; ?> &nbsp;&nbsp;&nbsp;&nbsp;Вернуться к вашему вопросу  <a href=feedback.php?namer=<? echo $name; ?>><? echo $name; ?></a><br><br> <? } ?>

<TEXTAREA NAME=text ROWS=8  class="button" COLS=80 maxlength=1200 ></TEXTAREA> 
<br>

  <br><input type="submit"   class="button" value="                          Отправить                         ">
  </form>






<?

$dlina_msg = strlen ($text); if($dlina_msg>1200) { $text=''; ?><script>alert('Спам,длина сообщения слишком большая');</script><?}

if($text>'  ') { 

if($namer) { $file_guest='./feedback/'.$namer.'.txt'; } else if(!$namer) { $file_guest='./feedback/'.$name.'.txt'; }
 
echo '&nbsp;&nbsp;<strong>Ваш текст: </strong> '.$text;

echo '='.$file_guest;

if(!$file = fopen($file_guest, "a")) { $file = fopen($file_guest, "w");  if(fputs ($file, '')) {echo '<br>Записано';} fclose ($file); }

if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

} else if(!$file = fopen($file_guest, "r")) {  echo '<br><br>Вы пытаетесь написать не существующему игроку<br><br>'; exit(); }
                                                                  
$text=htmlspecialchars($text);

$text = preg_replace('/http(s)?:\/\/([^\s]+)/', '<a target=_blank href="$0">$2</a>', $text); 

$text = preg_replace("|[\r\n]+|", "", $text);
$text='<font  size=1><em><a href=#>'.date("d.m.Y|G:i:s ").'</a></em></font><strong> '.$name.' </strong>'.$text;
if($file = fopen($file_guest, "a")) {
if(!fputs ($file, $text."\n")) {echo '<br>Не записано';} 
fclose ($file); 
echo '<br>Запись добавлена<br>'; 
$t=$_SERVER["REMOTE_ADDR"];
mail("unlater2@mail.ru", "Cyber обратная связь", "На сайте шахмат Cyber гость $name написал обращение: '$text'  ", "Content-Type:text/html"); 

}

} //end if($text>'')
?>






<?
//считывание файла

if($namer) {  $file_guest='./feedback/'.$namer.'.txt'; } else if(!$namer) { $file_guest='./feedback/'.$name.'.txt'; }

if($file = fopen($file_guest, "r")) { echo ''; $b4=0;

while(!feof($file)) { 
if($v[]= fgets ($file)){$b4++;} }
fclose ($file); 

echo 'Сообщений: '.$b4.'<br><br>';
}

for($a=$b4;$a>-1;$a--) {

$v[$a] = preg_replace("|[\r\n]+|", "", $v[$a]);

if(!$cel) { $cel='#363636'; }
if($cel=='#363636') { $cel='#404040'; } else if($cel=='#404040') { $cel='#363636'; }

if($v[$a]>' ') {

$nb=$a+1;

echo '<center>
<table border="0" width="100%" border=0 bgcolor="" align=left>';
 echo '

<tr>
<td bgcolor='.$cel.'><br><em> &nbsp;&nbsp;'.$v[$a].'</em><br><br></td>
<td width=8% bgcolor='.$cel.'><center><strong>№: '.$nb.'</storng></center></td>';

 if(!$namer) { echo '<td width=8% bgcolor='.$cel.'><center><strong><a href=feedback.php?del='.$nb.'>Удалить '.$nb.'</a></storng></center></td>'; }
 if($namer) { echo '<td width=8% bgcolor='.$cel.'><center><strong><a href=feedback.php?namer='.$namer.'&del='.$nb.'>Удалить '.$nb.'</a></storng></center></td>'; }


echo '</tr>
 
</table></center>
';


}


}

if($text>' ') { 

if($namer) { $n=$namer; } else $n=$name;
$logi='logi.txt';

$logi_text='<font size=1><em>'.date("d.m.Y|G:i:s ").'</em></font>Игрок <strong><em>'.$name.'</em></strong> написал в форме обратной связи в вопросе игрока <strong>'.$n.'</strong> <a target=_blank href=feedback.php?namer='.$n.'>Посмотреть</a>';
$openchatdb=fopen($logi,"a");
 if(fwrite($openchatdb,$logi_text."\n")) { ;  }
fclose($openchatdb);
}


if($text>' ' && !$namer) { echo "<meta http-equiv='refresh' content='1;url=feedback.php?vv=4'>"; }
if($text>' ' && $namer) { echo "<meta http-equiv='refresh' content='1;url=feedback.php?namer=$namer&vv=4'>"; }

//считывание файла
?>


<?
if($vv==4) {
 ?><audio src="./zvuk/thank.mp3" autoplay="autoplay"></audio><?
if(!$namer) { echo "<meta http-equiv='refresh' content='2;url=feedback.php'>"; }
if($namer) { echo "<meta http-equiv='refresh' content='2;url=feedback.php?namer=$namer'>"; }
}
?>










<?
//удаляем пустые строки

if(!$text) {

if($file = fopen($file_guest, "w")) {

for($a=0;$a<$b4+1;$a++) {

$v[$a] = preg_replace("|[\r\n]+|", "", $v[$a]);

if($v[$a]>'  ') {
if(!fputs ($file, $v[$a]."\n")) {echo '<br>Не записано';} 
                    }
}

fclose ($file);

}}
?>












<?
$t=$_SERVER["REMOTE_ADDR"];


if(preg_match('/'.$ip_adress.'/',$ip) && $name==$name_admin && $del>' ') { //удаляем сообщение по номеру

if($file = fopen($file_guest, "w")) {

for($a=0;$a<$b4+1;$a++) {

$v[$a] = preg_replace("|[\r\n]+|", "", $v[$a]);

unset($v[$del-1]);

if($v[$a]>' ') {
if(!fputs ($file, $v[$a]."\n")) {echo '<br>Не записано';} 
                    }
}

fclose ($file);

if(!$namer) { echo "<meta http-equiv='refresh' content='1;url=feedback.php'>"; }
if($namer) { echo "<meta http-equiv='refresh' content='1;url=feedback.php?namer=$namer'>"; }

?><audio src="../zvuk/delete.mp3" autoplay="autoplay"></audio><?

}} else if($del) { ?><audio src="../zvuk/delete_admin.mp3" autoplay="autoplay"></audio><? }

?>














</td>
<td bgcolor="#444444"><center><font size=1><br><strong>

<? include('list_feedback.php'); ?>

</td></tr></table><br>

<? include('podval.php'); ?>

</center><br>

 <? } ?>