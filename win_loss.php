<?
if(isset($_COOKIE['name'])) {  } 



if($tip) { $base_hod='../wins_losses/'.$name.'.txt'; }
if(!$tip) { $base_hod='../wins_losses/'.$name.'.txt'; }



// считываем из файла ходы записанные
if ( file_exists($base_hod) )   { 

if($file = fopen($base_hod, "r")) { echo ''; $b6=0;} 
while(!feof($file)) { 
if($zapisi_rxxe[]= fgets ($file)){$b6++;} }
fclose ($file); 
} else

// считываем из файла ходы записанные
if ( !file_exists($base_hod) )   { 

$base_hod='wins_losses/'.$name.'.txt';

if($file = fopen($base_hod, "r")) { echo ''; $b6=0;} 
while(!feof($file)) { 
if($zapisi_rxxe[]= fgets ($file)){$b6++;} }
fclose ($file); 
}

if(!$zapisi_rxxe[0] && !$zapisi_rxxe[1]) { $zapisi_rxxe[0]='0'; $zapisi_rxxe[1]='0'; echo 'K'; }
?>


<? if($zapisi_rxxe[0]>' ') { ?><font size=1> <strong>Побед: <font color=#90EE90 size=2>+<? echo $zapisi_rxxe[0].'</font> , проигрышей: <font color=#F08080 size=2>-'.$zapisi_rxxe[1]; ?></font></strong>
<? } ?>