<?

if($name) { $file_guest='./archive_doski/'.$name.'/anketa/list_game_run.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $bds4=0;

while(!feof($file)) { 
if($vq[]= fgets ($file)){$bds4++;} }
fclose ($file); 

 }}

//echo '='.$bd4;
?>