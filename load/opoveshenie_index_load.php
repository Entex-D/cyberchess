<?

if($name) { $file_guest='./archive_doski/'.$name.'/anketa/opoveshenie.txt';  
 
if($file = fopen($file_guest, "r")) { echo ''; $bd4=0;

while(!feof($file)) { 
if($vq[]= fgets ($file)){$bd4++;} }
fclose ($file); 

 }}

//echo '='.$bd4;
?>