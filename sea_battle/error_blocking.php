<?

$fix='1';

$base_hod_ip2='../sea_battle/igrok/hod/'.$nick.'_hod.txt'; 

if ( !file_exists($base_hod_ip2) )   { 

$openchatdb=fopen($base_hod_ip2,"w");

 if(fwrite($openchatdb,'')) { ;  }

fclose($openchatdb);
 } 


// считываем ходы из отдельного файла на каждую доску

if($file = fopen($base_hod_ip2, "r")) { echo ''; $b5=0;} 

while(!feof($file)) { 
if($hody_r[]= fgets ($file)) { $b5++; } }

fclose ($file); 

if(preg_match('/Человек/',$hody_r[$b5-1])) { //echo '<br><font size=1>Сейчас ход компьютера</font>';
                                                                    $fix='2'; } else $ekex='?storona=1';

?>