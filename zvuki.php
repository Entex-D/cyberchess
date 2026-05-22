










<? include('shapka_load_style.php'); ?>

<center>

<? include('shapka.php'); ?>





<center>

<table width=90%><tr>

<td class=td_center width=><br><center><font size=5 color=#DCDCDC><strong><em><a fref=#>Используемые звуки сайта</a></em></strong></font><br><br><td class=td_center width=><br><br><br><center></center></td>

</tr></table>

<br>









<table width=90% height=60%><tr>
<td class=td_center><center><font size=4><br><strong>





<?
$chet_dosok=0;
$chet_dosok_vsego=0;


echo '<table width=70%><tr>
<td  bgcolor=#404040><br><center><font size=4><strong><em>№</em></strong></font></center><br></td>
<td  bgcolor=#404040><center><font size=4><strong><em>Название файла</em></strong></font></center></td>
<td  bgcolor=#404040><center><font size=4><strong><em>Плеер</em></strong></font></center></td>
</tr>';
$dir = './zvuk';
 
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

$razmer = filesize('./zvuk/'.$file);
$razmer=$razmer/1000;
$razmer = round((float)$razmer, 1);



$filename = './zvuk/'.$file;
$bitrate_kbps = 70; // Укажите битрейт вашего MP3 в kbps

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



echo '<tr>
<td width=4% bgcolor='.$cel.'><center><strong> '.$chet_dosok.'</strong></center></td>
<td bgcolor='.$cel.'><center><strong> <a target=_blank href="../zvuk/'.$file.'"  rel="nofollow" >'.$file.'</a> '.$razmer.' KB / '.$time_s.'</strong></center></td>
<td bgcolor='.$cel.'><br><center><em><strong> <audio src="../zvuk/'.$file.'" preload="none"></audio></strong></em><br></center></td>
</tr>';
   }                      }
 }    
?>











</center>







</strong><br><br></font></center></td></tr></table>

<br>
</td></tr></table>

<br>





<? include('podval.php'); ?>










<script src="../player<? echo $style_run; ?>/audiojs/audio.min.js"></script>

<script>
  audiojs.events.ready(function() {
    var as = audiojs.createAll();
  });
</script>