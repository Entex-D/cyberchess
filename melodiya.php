










<? include('shapka_load_style.php'); ?>

<center>

<? include('shapka.php'); ?>





<center>

<table width=90%><tr>

<td class=td_center width=><br><center><font size=5 color=#DCDCDC><strong><em><a fref=#>Любимые мелодии</a></em></strong></font><br><br><td class=td_center width=><br><br><br><center></center></td>

</tr></table>

<br>









<table width=90% height=60%><tr>
<td class=td_center><center><font size=4><br><strong>


<a href=../melodiya_load/example.php>Закачать свою мелодию</a>
<br><br>
Нажмите PLAY для воспроизведения с выбранного трека &nbsp;&nbsp;<a href=../melodiya.php>Вырубить PLAY</a>

<?
$chet_dosok=0;
$chet_dosok_vsego=0;


echo '<table width=80%><tr>
<td  bgcolor=#404040><br><center><font size=4><strong><em>№</em></strong></font></center><br></td>
<td  bgcolor=#404040><center><font size=4><strong><em>Название файла</em></strong></font></center></td>
<td  bgcolor=#404040><center><font size=4><strong><em>Плеер</em></strong></font></center></td>
<td  bgcolor=#404040><center><font size=4><strong><em>Выбор</em></strong></font></center></td>
<td  bgcolor=#404040><center><font size=4><strong><em>Удалить</em></strong></font></center></td>
</tr>';

$dir = './melodiya';
 
$f = scandir($dir);
 
foreach ($f as $file){
    if(preg_match('/\.(mp3)/', $file)){
    //$file_konvert = preg_replace("|[.]+|", "_", $file);
    $file = preg_replace("/.txt/", "", $file);
$chet_dosok=$chet_dosok+1;
//$chet_dosok_vsego=$chet_dosok_vsego+1;
if($chet_dosok>0 && $file>' ') {   
 //echo $chet_dosok.' - выбрать доску <a href=index.php?doska='.$file_konvert.'&tip=1>'.$file.'</a><br/>';

if(!$cel) { $cel='#484848'; }
if($cel=='#484848') { $cel='#404040'; } else if($cel=='#404040') { $cel='#484848'; }

if($name=='Guest653') { $decto='Удалить'; } else $decto='/-/';

  if(preg_match('/ /',$file) || preg_match('/(/',$file)) { $file_new = str_replace(' ', '_', $file); $file_new = str_replace('(', '', $file_new); $file_new = str_replace(')', '', $file_new);  

if (file_exists('./melodiya/'.$file)) {
if (rename('./melodiya/'.$file, './melodiya/'.$file_new)) {  ?><audio src="./zvuk/file_rename.mp3" autoplay="autoplay"></center><br><br></audio><? echo "<meta http-equiv='refresh' content='2;url=../melodiya.php'>";   } 
}}

$razmer = filesize('./melodiya/'.$file);
$razmer=$razmer/1000000;
$razmer = round((float)$razmer, 1);



$filename = './melodiya/'.$file;
if($file=='Savage_44-Dance_Party.mp3' || $file=='Savage_44-Love_Emotion.mp3' || $file=='alan-morris-cathy-burton-im-not-alone.mp3') { $bitrate_kbps = 128; } else
$bitrate_kbps = 320; // Укажите битрейт вашего MP3 в kbps

$filesize = filesize($filename); // Размер файла в байтах


// Убираем размер ID3v1‑тега (128 байт) и ID3v2‑тега (если есть)
// Для простоты примера предположим, что ID3v2 нет
$audio_size = $filesize - $bitrate_kbps;

// Длительность в секундах: (размер аудиоданных в битах) / (битрейт в битах/сек)
$duration_seconds = ($audio_size * 8) / ($bitrate_kbps * 1000);

//echo "Длительность: " . round($duration_seconds, 2) . " секунд";



$seconds = round($duration_seconds, 2);

$minutes = floor($seconds / 60);    // Целые минуты
$remainingSeconds = $seconds % 60; // Оставшиеся секунды

$time_s="$minutes:$remainingSeconds"; // Выведет: "2 минут 47 секунд"

if($play>0 && $chet_dosok==$play) { $track_play='autoplay="autoplay"'; $second=round($duration_seconds, 2); } else $track_play='preload="none"'; 
$play_coord=$chet_dosok;

echo '<tr>
<td width=4% bgcolor='.$cel.'><center><strong> '.$chet_dosok.'</strong></center></td>
<td bgcolor='.$cel.'><center><strong> <a target=_blank href="../melodiya/'.$file.'"  rel="nofollow" >'.$file.'</a> '.$razmer.' MB / '.$time_s.'</strong></center></td>
<td bgcolor='.$cel.'><br><center><em><strong> <audio src="../melodiya/'.$file.'" '.$track_play.'></audio></strong></em><br></center></td>';
?><td width=8% bgcolor=<? echo $cel; ?>><br><center><em><strong> <a href=../melodiya.php?play=<? echo $play_coord; ?>>PLAY</a></strong></em><br></center></td>
<? if($name==$name_admin) { ?><td width=8% bgcolor=<? echo $cel; ?>><br><center><em><strong> <a href=../melodiya_load/example.php?delete=../melodiya/<? echo $file; ?>><? echo $decto; ?></a></strong></em><br></center></td><? } ?>
<? if($name!=$name_admin) { ?><td width=8% bgcolor=<? echo $cel; ?>><br><center><em><strong> <? echo $decto; ?></strong></em><br></center></td><? } ?>

</tr><?

unset($play_coord);
   }                      }
 }    
?>







</center>







</strong><br><br></font></center></td></tr></table>

<br>
</td></tr></table>

<br>





<? include('podval.php'); ?>



<? 
if($play) { $deso=$play+1;
echo "<meta http-equiv='refresh' content='$second;url=../melodiya.php?play=$deso'>";
} 
?>



<script src="../player<? echo $style_run; ?>/audiojs/audio.min.js"></script>

<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>